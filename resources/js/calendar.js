import moment from 'moment';

const hourMask = $('.js-hour-mask');
if (hourMask.length) {
  hourMask.mask('00:00');
}

document.addEventListener('DOMContentLoaded', function () {

  var Calendar = FullCalendar.Calendar;
  var Draggable = FullCalendar.Draggable;
  var containerEl = document.getElementById("external-events");
  var checkbox = document.getElementById("drop-remove");
  new Draggable(containerEl, {
    itemSelector: ".fc-event",
    eventData: function (eventEl) {
      return {
        title: eventEl.innerText
      };
    }
  });
  const calendarEl = document.getElementById('calendar');
  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    themeSystem: 'standard',
    locale: 'pt-br',
    timeZone: 'America/Porto_Velho',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
    },
    events: JSON.parse(calendarEl.getAttribute('data-events')),
    select: function (start) {
      const selectedDate = moment(start.startStr).format('DD/MM/YYYY');
      $('.js-modal-title').html(selectedDate);

      // show modal dialog
      $('#event-modal').modal('show');

      $('.js-picker-inicio').datepicker({
        autoclose: true,
        language: 'pt-BR',
      }).datepicker("setDate", selectedDate).datepicker('update');
    },
    selectHelper: true,
    selectable: true,
    editable: true,
    droppable: true,
    eventLimit: true,
    disableDragging: false,
    navLinks: true,

    eventClick: function(info) {
      alert('Event: ' + info.event.title);
      console.log(info);

      // change the border color just for fun
      info.el.style.borderColor = 'red';
    },

  });


  calendar.render();
});

import { Calendar } from '@fullcalendar/core';
import interactionPlugin, { Draggable } from '@fullcalendar/interaction';
import dayGridPlugin from '@fullcalendar/daygrid';

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var draggableEl1 = document.getElementById('draggable1');
  var draggableEl2 = document.getElementById('draggable2');

  var calendar = new Calendar(calendarEl, {
    plugins: [ interactionPlugin, dayGridPlugin ],
    droppable: true,
    dropAccept: '.cool-event',
    drop: function() {
      alert('dropped!');
    }
  });

  calendar.render();

  new Draggable(draggableEl1);
  new Draggable(draggableEl2);
});


