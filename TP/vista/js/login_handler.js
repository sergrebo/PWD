document.getElementById("formLogin").addEventListener("submit", function (event) {
  // Obtengo el valor de la contraseña en texto plano
  var passwordInput = document.getElementById("uspass");
  var password = passwordInput.value;

  if (password) {
    // Calculo el hash MD5 de la contraseña
    var passwordHash = hex_md5(password);

    // Pongo el hash en el campo oculto que se enviará al servidor
    document.getElementById("passwordHash").value = passwordHash;

    // Limpio y deshabilito el campo de la contraseña
    passwordInput.value = "";
    passwordInput.disabled = true;

    // El formulario se envia normalmente (ahora con el hash)
  } else {
    // Si el campo contraseña esta vacío, no envio el formulario
    alert("Por favor, ingresa una contraseña.");
    event.preventDefault();
  }
});