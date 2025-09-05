$.validator.addMethod( "lettersonly", function( value, element ) {
  return this.optional( element ) || /^[a-z]+$/i.test( value );
}, "El campo solo puede completarse con letras." );
$(document).ready(function() {
  $("#formulario").validate({
    rules: {
      numero: {
        required: true,
        number: true
      },
      horaLunes: {
        required: true,
        number: true
      },
      horaMartes: {
        required: true,
        number: true
      },
      horaMiercoles: {
        required: true,
        number: true
      },
      horaJueves: {
        required: true,
        number: true
      },
      horaViernes: {
        required: true,
        number: true
      },
      nombre: {
        required: true,
        lettersonly: true
      },
      apellido: {
        required: true,
        lettersonly: true
      },
      edad: {
        required: true,
        number: true,
        min: 0
      },
      direccion: "required",
      opcion: "required",
      genero: "required"
    },
    messages: {
      numero: {
        required: "Por favor, ingrese un número.",
        number: "El dato ingresado debe ser un número."
      },
      horaLunes: {
        required: "Por favor, ingrese un número.",
        number: "El dato ingresado debe ser un número."
      },
      horaMartes: {
        required: "Por favor, ingrese un número.",
        number: "El dato ingresado debe ser un número."
      },
      horaMiercoles: {
        required: "Por favor, ingrese un número.",
        number: "El dato ingresado debe ser un número."
      },
      horaJueves: {
        required: "Por favor, ingrese un número.",
        number: "El dato ingresado debe ser un número."
      },
      horaViernes: {
        required: "Por favor, ingrese un número.",
        number: "El dato ingresado debe ser un número."
      },
      nombre: {
        required: "Campo obligatorio."
      },
      apellido: {
        required: "Campo obligatorio."
      },
      edad: {
        required: "Campo obligatorio.",
        number: "El dato ingresado debe ser un número.",
        min: "El numero ingresado debe ser mayor que cero."
      },
      direccion: "Campo obligatorio.",
      opcion: "Debe seleccionar una opción.",
      genero: "Debe seleccionar una opción."
    },
    errorElement: 'div',
    errorPlacement: function (error, element) {
      error.addClass('invalid-tooltip');
      element.closest('.mb-3').append(error);
    },
    highlight: function (element) {
      $(element).addClass('is-invalid').removeClass('is-valid');
    },
    unhighlight: function (element) {
      $(element).addClass('is-valid').removeClass('is-invalid');
    },
    submitHandler: function (form) {
      form.submit();
    }
  })
})