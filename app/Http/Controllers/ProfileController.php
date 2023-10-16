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
use DateTime;
use Illuminate\Support\Facades\Log;

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
            'servico' => 'required',
            'data' => 'required',
            'hora' => 'required',
            'valor' => 'required',
        ];
    
        $messages = [
            'nome.required' => 'O campo NOME é obrigatório.',
            'servico.required' => 'O campo TIPO DE SERVIÇO é obrigatório.',
            'data.required' => 'O campo DIA E HORA é obrigatório.',
            'hora.required' => 'O campo DIA E HORA é obrigatório.',
            'valor.required' => 'O campo VALOR é obrigatório.',
        ];
    
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

         // Recebendo o valor da consulta do usuário através do formulário
         $valorConsulta = str_replace(',', '.', str_replace('.', '', $request->input('valor')));

         // Convertendo o valor para float
         $valorConsultaFloat = (float) $valorConsulta;


        $lac = new Lancamento;
        $lac->name =  $request->nome;
        $lac->convenio = $request->convenio;
        $lac->servico = $request->servico;
        $lac->data = $request->data;
        $lac->confirmacao = 1;
        $lac->hora = $request->hora;
        $lac->telefone = $request->telefone;
        $lac->valor = $valorConsultaFloat;
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
        $valor = DB::table('lancamentos')->where('mes', $datames)->sum('valor');
        $v['receita'] = number_format($valor, 2, ',', '.');


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

    public function pacientesAno(){

        $anoAtual = date('Y');
        $v['listarpacienteAno'] = DB::table('lancamentos')
            ->whereYear('created_at', $anoAtual)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pacientesAno', $v); 
    }


    public function valorMes(Request $request) {
        $dataCompleta = $request->input('data_completa'); // Obter a data completa do usuário
        
        // Converter a data completa para um objeto DateTime
        $dataObj = new DateTime($dataCompleta);
        $ano = $dataObj->format('Y'); // Obtém o ano da data
        $mes = $dataObj->format('m'); // Obtém o mês da data
        
        if($request->all() == null){
          
                $mes = $request->input('data_inicio');
                $v['mes'] = $request->input('ano_mes');
                $anoAtual = date('Y');  // Obtém o ano atual
                $mesAtual = date('m');  // Obtém o mês atual
                
                $v['listarpacienteAno'] = DB::table('lancamentos')
                    ->whereYear('created_at', $anoAtual)  // Filtra pelo ano atual
                    ->whereMonth('created_at', $mesAtual)  // Filtra pelo mês atual
                    ->orderBy('created_at', 'desc')  // Ordena os resultados
                    ->get();  // Obtém a lista de registros
        
                    $v['totalValor'] = DB::table('lancamentos')
                    ->whereYear('created_at', $anoAtual)
                    ->whereMonth('created_at', $mesAtual)
                    ->sum('valor');
                    
        
                return view('valorMes', $v); 
        }
        
        $anoMes = $request->input('ano_mes'); // Obter o ano e mês no formato "AAAA-MM"
        $dataFormatada = Carbon::createFromFormat('Y-m', $request->input('ano_mes'));

        $v['mes'] = $dataFormatada->format('m/Y');
    // Separar o ano e mês da entrada
    list($ano, $mes) = explode('-', $anoMes);

    $v['listarpacienteAno'] = DB::table('lancamentos')
        ->whereYear('created_at', $ano)  // Filtra pelo ano
        ->whereMonth('created_at', $mes)  // Filtra pelo mês
        ->orderBy('created_at', 'desc')  // Ordena os resultados
        ->get();  // Obtém a lista de registros

    $v['totalValor'] = DB::table('lancamentos')
        ->whereYear('created_at', $ano)
        ->whereMonth('created_at', $mes)
        ->sum('valor');

    return view('valorMes', $v);
    }
    

}

