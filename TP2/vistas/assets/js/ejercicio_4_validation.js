$(document).ready(function() {
  $('form').validate({
    rules: {
      titulo: 'required',
      director: 'required',
      produccion: 'required',
      nacionalidad: 'required',
      duracion: {
        required: true,
        number: true,
        maxlength: 3
      },
      actores: 'required',
      guion: 'required',
      anio: {
        required: true,
        number: true,
        maxlength: 4,
      },
      genero: 'required',
      restricciones: 'required',
      sinopsis: 'required'
    },
    messages: {
      titulo: 'Este campo es obligatorio',
      director: 'Este campo es obligatorio',
      produccion: 'Este campo es obligatorio',
      nacionalidad: 'Este campo es obligatorio',
      duracion: {
        required: 'Este campo es obligatorio',
        number: 'Debe ingresar solo números',
        maxlength: 'Solo puede ingresar tres dígitos'
      },
      actores: 'Este campo es obligatorio',
      guion: 'Este campo es obligatorio',
      anio: {
        required: 'Este campo es obligatorio',
        number: 'Debe ingresar solo números',
        maxlength: 'Solo puede ingresar cuatro digitos'
      },
      genero: 'Este campo es obligatorio',
      restricciones: 'Este campo es obligatorio',
      sinopsis: 'Este campo es obligatorio'
    },
    errorElement: 'div',
    errorPlacement: function  (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
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