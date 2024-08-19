<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <!-- Bootstrap JS -->
  <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
  <!-- jQuery -->
  <script src="./jquery-3.7.1.min.js/jquery-3.7.1.min.js"></script>
  <!-- jQuery Validation -->
  <script src="./jquery-validation-1.19.5/dist/jquery.validate.js"></script>
  <title>Signo número</title>
</head>

<body>
  <h1>Ejercicio 1</h1>
  <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
    llamar a un script (vernumero.php) y visualizar un mensaje que indique si el número
    enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
    respuesta, que permita volver a la página anterior.</p>
  <div class="container mt-5">
    <form action="./action/action_ejercicio_1.php" method="get" class="needs-validation" novalidate id="miFormulario">
      <div class="mb-3">
        <label for="numero" class="form-label">Número </label>
        <input type="number" name="numero" id="numero" required class="form-control">
        <div class="invalid-feedback">
          El dato introducido debe ser un número.
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>


  <script>
    /*
    $(document).ready(function() {
      //Interceptar el envío del formulario
      $('#miFormulario').on('submit', function(event) {
        //Evitar el envío si el formulario no es válido
        if (this.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();

          //Agregar las clases de Bootstrap para mostrar los mensajes de error
          $(this).addClass('was-validated');
        }
      });

      //Validar campos especificicos en tiempo real
      $('#numero').on('input', function() {
        if (this.checkValidity()) {
          $(this).removeClass('is-invalid').addClass('is-valid');
        } else {
          $(this).removeClass('is-valid').addClass('is-invalid');
        }
      });
    });
    */

    $(document).ready(function () {
      //Interceptar el envío del formulario
      $('#miFormulario').on('submit', function(event) {
        //Evitar el envío si el formulario no es válido
        if (this.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();

          //Agregar las clases de Bootstrap para mostrar los mensajes de error
          $(this).addClass('was-validated');
        }
      });
      //Definición de reglas de validación
      $('#miFormulario').validate({
        rules: {
          numero: {
            required: true,
            number: true
          }
        },
        messages: {
          numero: {
            required: 'Ingrese un número.',
            number: 'El valor ingresado debe ser un número.'
          }
        },
        errorElement: 'div',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element) {
          $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function (element) {
          $(element).addClass('is-valid').removeClass('is-invalid');
        }
      });
    });
  </script>

</body>

</html>