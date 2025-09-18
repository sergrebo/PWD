/**
 * Metodo confeccionado para chequear que el formato de los datos ingresados por el usuario tengan el de la expresion regular de las patentes emitidas en Argentina
 */
$.validator.addMethod("patente_ar", function(value, element) {
  // Expresión regular combinada para ambos formatos
  const regex = /^[A-Za-z]{3} [0-9]{3}$|^[A-Za-z]{2} [0-9]{3} [A-Za-z]{2}$/;
  return this.optional(element) || regex.test(value);
}, "Por favor, ingresa un formato de patente argentino válido (ej: ABC 123 o AB 123 CD)");

$(document).ready(function() {
  $("#formulario").validate({
    rules: {
      patente: {
        required: true,
        patente_ar: true
      },
    },
    messages: {
      patente: {
        required: "Campo obligatorio."
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