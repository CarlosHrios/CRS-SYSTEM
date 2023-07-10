<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Calendar;
use App\Models\Lancamento;
use App\Models\User;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    //UPDATE DE USUARIO
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    //DELETAR USUARIO
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function calendario()
    {

        return view('calendario');
    }

    //METODO PARA SALVAR NOVOS LANCAMENTOS
    public function lancamento(Request $request)
    {
        $rules = [
            'nome' => 'required',
            'convenio' => 'required',
            'servico' => 'required',
            'data' => 'required',
            'hora' => 'required',
            'telefone' => 'required',
            'valor' => 'required',
        ];
    
        $messages = [
            'nome.required' => 'O campo NOME é obrigatório.',
            'convenio.required' => 'O campo CONVENIO é obrigatório.',
            'servico.required' => 'O campo TIPO DE SERVIÇO é obrigatório.',
            'data.required' => 'O campo DIA E HORA é obrigatório.',
            'hora.required' => 'O campo DIA E HORA é obrigatório.',
            'telefone.required' => 'O campo TELEFONE é obrigatório.',
            'valor.required' => 'O campo VALOR é obrigatório.',
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $lac = new Lancamento;
        $lac->name =  $request->nome;
        $lac->convenio = $request->convenio;
        $lac->servico = $request->servico;
        $lac->data = $request->data;
        $lac->hora = $request->hora;
        $lac->telefone = $request->telefone;
        $lac->valor = $request->valor;
        $lac->mes = Carbon::now()->format('m');
        $lac->save();
    
        if(isset($lac))
        {
            return redirect()->back()->with('success', 'Lancamento Feito');   

        }
    }
    //METODO PARA no dashboard
    public function show(){
        //============modulo contar total de pacientes
        $v['clientes'] = DB::table('lancamentos')->count();

        //modulo somar valor mes
        $datames = Carbon::now()->format('m');
        $v['receita'] = DB::table('lancamentos')->where('mes', $datames)->sum('valor');
       
       
        //==========modulo consultas hoje
        $dataConsulta = Carbon::now()->format('Y-m-d');
        $v['consultas'] = DB::table('lancamentos')->where('data', $dataConsulta)->count('data');

        
        //==========modulo listar pacientes
        $v['listarpaciente'] = DB::table('lancamentos')->where('data', $dataConsulta)->get();


        return view('dashboard', $v);
    }

    //METODO PARA AGENDAMENTO
    public function agendamento (){
        return view('agendamento');
    }
    public function lancarAgenda (){

        return view('agendamento');

    }
    //METODO PARA PACIENTES
    public function pacientesDetalhe(){
        
        $dataConsulta = Carbon::now()->format('Y-m-d');
        $v['listarpaciente'] = DB::table('lancamentos')->where('data', $dataConsulta)->get();

        return view('pacientes', $v); 
    }

}

