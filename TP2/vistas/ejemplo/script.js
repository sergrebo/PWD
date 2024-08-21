$('#formulario').validate ({
  rules: {
    numero: {
      required: true,
      number: true,
      //normalizer elimina espacios en principio y fin del string ingresado
      normalizer: function (value) {
        return $.trim(value);
      }
    },

    nombre: 'required',

    email: {
      required: true,
      email: true
    },

    password: {
      required: true,
      minlength: 6
    },
  },

  messages: {
    numero: {
      required: 'Debe ingresar un número',
      number: 'El valor ingresado debe ser un número'
    },

    nombre: 'Debe ingresar su nombre',

    email: {
      required: 'Debe ingresar su correo electrónico',
      email: 'Debe ingresar un correo válido'
    },

    password: {
      required: 'Debe ingresar su contraseña',
      minlength: 'La contraseña debe tener 6 mínimo caracteres'
    }
  },

  errorElement: 'div',

  errorPlacement: function (error, element) {
    error.addClass('invalid-feedback');
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

});