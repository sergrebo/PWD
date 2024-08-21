$(document).ready(function () {
  $('#formulario').validate({
    //Reglas de validación.
    rules: {
      horas_lunes: {
        required: true,
        number: true
      },
      horas_martes: {
        required: true,
        number: true
      },
      horas_miercoles: {
        required: true,
        number: true
      },
      horas_jueves: {
        required: true,
        number: true
      },
      horas_viernes: {
        required: true,
        number: true
      }
    },
    //Mensajes de fallo en la validación.
    messages: {
      horas_lunes: {
        required: 'Este campo es obligatorio',
        number: 'Debe ingresar un número válido'
      },
      horas_martes: {
        required: 'Este campo es obligatorio',
        number: 'Debe ingresar un número válido'
      },
      horas_miercoles: {
        required: 'Este campo es obligatorio',
        number: 'Debe ingresar un número válido'
      },
      horas_jueves: {
        required: 'Este campo es obligatorio',
        number: 'Debe ingresar un número válido'
      },
      horas_viernes: {
        required: 'Este campo es obligatorio',
        number: 'Debe ingresar un número válido'
      }
    },
    //Elemento HTML donde se inscribirá el mensaje de fallo.
    errorElement: 'div',
    //Función que ubica donde se colocará el mensaje de error respecto al campo que falló.
    errorPlacement: function  (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    //Agrega la clase is-invalid e is-valid al elemento que corresponda.
    highlight: function (element) {
      $(element).addClass('is-invalid').removeClass('is-valid');
    },
    //Agrega la clase is-valid e is-invalid al elemento que corresponda.
    unhighlight: function (element) {
      $(element).addClass('is-valid').removeClass('is-invalid');
    },
    //La función submitHandler dentro de jQuery Validate es una opción que te permite personalizar lo que sucede cuando un formulario es válido y está listo para ser enviado. 
    submitHandler: function (form) {
      form.submit();
    }
  })
})