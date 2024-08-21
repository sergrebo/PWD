$(document).ready(function () {
  $('#miFormulario').validate({
    //Definición de reglas de validación
    rules: {
      //La regla se define según el atributo 'name' de la etiqueta input
      numero: {
        required: true,
        number: true
      }
    },

    //Definición de mensajes de error.
    messages: {
      numero: {
        required: 'Ingrese un número.',
        number: 'El valor ingresado debe ser un número.'
      }
    },

    //Especifica el tipo de elemento HTML que se utilizará para mostrar los mensajes de error.
    errorElement: 'div',

    //Especifica una función que define dónde se colocará el mensaje de error relativo al campo del formulario que no pasa la validación. Parámetro error es el mensaje de error generado por el plugin. Parámetro element es el campo del formulario que ha fallado la validación.
    errorPlacement: function (error, element) {
      //Añade la clase 'invalid-feedback' al elemento que contiene el mensaje de error (error).
      error.addClass('invalid-feedback');
      //Esto busca el contenedor más cercano al campo del formulario (element) que tenga la clase 'form-group'. Este contenedor es donde se agrupan el campo del formulario y su etiqueta. 'append(error)' inserta el mensaje de error dentro de ese contenedor, después de los demás elementos dentro del contenedor.
      element.closest('.form-group').append(error);
    },

    //Esta función se ejecuta cada vez que un campo del formulario no pasa la validación. Agrega la clase 'is-invalid' al campo que no pasó la validación y elimina la clase 'is-valid' del campo asegurando que el campo no se muestre como válido si anteriormente había pasado la validación.
    highlight: function (element) {
      $(element).addClass('is-invalid').removeClass('is-valid');
    },

    //Esta función se ejecuta cada vez que un campo que previamente no pasó la validación ahora la pasa. Agrega la clase 'is-valid' al campo que ahora es válido. Elimina la clase 'is-invalid' del campo quitando la marca de campo inválido si previamente no había pasado la validación.
    unhighlight: function (element) {
      $(element).addClass('is-valid').removeClass('is-invalid');
    },

    //La función submitHandler dentro de jQuery Validate es una opción que te permite personalizar lo que sucede cuando un formulario es válido y está listo para ser enviado. 
    submitHandler: function (form) {
      form.submit();
    }

  });
});