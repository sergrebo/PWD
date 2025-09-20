/**
 * Metodo confeccionado para chequear que el formato de los datos ingresados por el usuario tengan el de la expresion regular de las patentes emitidas en Argentina
 */
$.validator.addMethod("patente_ar", function(value, element) {
  // Expresión regular combinada para ambos formatos
  const regex = /^[A-Za-z]{3} [0-9]{3}$|^[A-Za-z]{2} [0-9]{3} [A-Za-z]{2}$/;
  return this.optional(element) || regex.test(value);
}, "Por favor, ingresa un formato de patente argentino válido (ej: ABC 123 o AB 123 CD)");

/**
 * Metodo que chequea que el dato ingresado en el campo este solo formado por letras
 */
$.validator.addMethod( "lettersonly", function( value, element ) {
  return this.optional( element ) || /^[A-Za-z]+$/i.test( value );
}, "Solo puede ingresar letras." );

$(document).ready(function() {
  $("#formulario").validate({
    rules: {
      patente: {
        required: true,
        patente_ar: true,
      },
      nombre: {
        required: true,
        lettersonly: true,
      },
      apellido: {
        required: true,
        lettersonly: true,
      },
      nroDni: {
        required: true,
        digits: true,
      },
      fechaNac: "required",
      domicilio: "required",
      telefono: {
        required: true,
        digits: true,
      },
      dniDuenio: {
        required: true,
        digits: true,
      },
      marca: "required",
      modelo: {
        required: true,
        digits: true,
        minlenght: 2,
        maxlenght: 4,
      }
    },
    messages: {
      patente: {
        required: "Campo obligatorio.",
      },
      nombre: {
        required: "Campo obligatorio.",
      },
      apellido: {
        required: "Campo obligatorio.",
      },
      nroDni: {
        required: "Campo obligatorio.",
        digits: "Solo puede ingresar dígitos."
      },
      fechaNac: "Campo obligatorio.",
      domicilio: "Campo obligatorio.",
      telefono: {
        required: "Campo obligatorio.",
        digits: "Solo puede ingresar dígitos.",
      },
      dniDuenio: {
        required: "Campo obligatorio.",
        digits: "Solo puede ingresar dígitos."
      },
      marca: "Campo obligatorio.",
      modelo: {
        required: "Campo obligatorio.",
        digits: "Solo puede ingresar dígitos.",
        minlenght: "Mínimo debe ingresar 2 dígitos.",
        maxlenght: "Máximo pueden ingresar 4 dígitos",
      },
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