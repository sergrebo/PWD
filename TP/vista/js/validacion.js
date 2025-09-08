// Limit the size of each individual file in a FileList.
$.validator.addMethod( "maxsize", function( value, element, param ) {
	if ( this.optional( element ) ) {
		return true;
	}

	if ( $( element ).attr( "type" ) === "file" ) {
		if ( element.files && element.files.length ) {
			for ( var i = 0; i < element.files.length; i++ ) {
				if ( element.files[ i ].size > param ) {
					return false;
				}
			}
		}
	}

	return true;
}, $.validator.format( "File size must not exceed {0} bytes each." ) );

$.validator.addMethod( "extension", function( value, element, param ) {
	param = typeof param === "string" ? param.replace( /,/g, "|" ) : "png|jpe?g|gif";
	return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ) );
}, $.validator.format( "Please enter a value with a valid extension." ) );

$.validator.addMethod( "lettersonly", function( value, element ) {
  return this.optional( element ) || /^[a-z]+$/i.test( value );
}, "El campo solo puede completarse con letras." );

$.validator.addMethod( "checkDivisionByZero", function(value, element) {
  //Obtengo el valor de la operación
  const operacion = $('#Operacion').val();
  //Obtengo el valor del divisor (el segundo número)
  const numero2 = $('#numero2').val();
  //Verifico si la operacion es división y si el divisor es 0
  if (operacion === "DIVISION" && numero2 === "0") {
    //Si la condición se cumple, la validación falla (retorna false)
    return false;
  }
})

$.validator.addMethod( "notEqualTo", function( value, element, param ) {
  return this.optional( element ) || !$.validator.methods.equalTo.call( this, value, element, param );
}, "Please enter a different value, values must not be the same." );

/*
$.validator.addMethod( "alphanumeric", function( value, element ) {
  return this.optional( element ) || /^\w+$/i.test( value );
}, "Letters, numbers, and underscores only please." );
*/

$.validator.addMethod("unaLetraUnNumero", function(value, element) {
  return this.optional(element) || /^(?=.*\d)(?=.*[a-zA-Z]).+$/.test(value);
}, "La contraseña debe tener al menos una letra y al menos un numero.")

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

      sexo: "required",
      
      numero1: {
        required: true,
        number: true
      },
      numero2: {
        required: true,
        number: true,
        checkDivisionByZero: {
          depends: function(element) {
            return $("#Operacion").val() === "DIVISION";
          }
        }
      },
      Operacion: "required",
      estudiante: "required",
      usuario: "required",
      clave: {
        required: true,
        minlength: 8,
        notEqualTo: "#usuario",
        unaLetraUnNumero: true,
      },
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
      sinopsis: 'required',
      miArchivo: {
        required: true,
        extension: "doc|pdf",
        maxsize: 2097152 // 2 MiB en bytes (2 * 1024 * 1024)
      },
      miArchivoTxt: {
        required: true,
        extension: "txt",
      },
      image: {
        required: true,
        extension: "jpg|jpeg|png|gif|webp",
      }
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

      sexo: "Debe seleccionar una opción.",

      numero1: {
        required: "Por favor, ingrese un número.",
        number: "El dato ingresado debe ser un número."
      },
      numero2: {
        required: "Por favor, ingrese un número.",
        number: "El dato ingresado debe ser un número.",
        checkDivisionByZero: "La división por cero no esta permitida."
      },
      Operacion: "Debe seleccionar una operación.",
      estudiante: "Debe seleccionar una opción.",
      usuario: "Campo obligatorio.",
      clave: {
        required: "Campo obligatorio.",
        minlength: "Debe tener al menos 8 caracteres.",
        notEqualTo: "Usuario y contraseña no pueden ser iguales",
      },
      titulo: 'Campo es obligatorio.',
      director: 'Campo es obligatorio.',
      produccion: 'Campo es obligatorio.',
      nacionalidad: 'Campo es obligatorio.',
      duracion: {
        required: 'Campo es obligatorio.',
        number: 'Debe ingresar solo números.',
        maxlength: 'Solo puede ingresar tres dígitos.'
      },
      actores: 'Campo es obligatorio.',
      guion: 'Campo es obligatorio.',
      anio: {
        required: 'Campo es obligatorio.',
        number: 'Debe ingresar solo números.',
        maxlength: 'Solo puede ingresar cuatro digitos.'
      },
      genero: 'Campo es obligatorio.',
      restricciones: 'Campo es obligatorio.',
      sinopsis: 'Campo es obligatorio.',
      miArchivo: {
        required: "Campo obligatorio.",
        extension: "El archivo a cargar debe ser .doc o .pdf.",
        maxsize: "El tamaño del archivo no puede superar 2 MiB."
      },
      miArchivoTxt: {
        required: "Campo obligatorio.",
        extension: "El archivo a cargar debe ser .txt.",
      },
      image: {
        required: "Campo obligatorio.",
        extension: "El archivo a cargar debe tener extensión .jpg, .jpeg, .png, .gif o .webp."
      }
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