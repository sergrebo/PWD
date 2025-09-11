<?php include_once '../../estructura/cabecera-retorno.php' ?>

  <div class="container col-3 mt-5">
    <div class="bg-light p-4 rounded-3 shadow-lg">

    <div class="row">
      <div class="col-1 align-self-end ms-auto">
        <a href="#" class="link-secondary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
          </svg>
        </a>
      </div>
    </div>

      <form action="./action_ej3.php" method="post" class="needs-validation" id="formulario" novalidate>
        <h1 class="text-center mt-1 mb-5 fw-normal">Iniciar Sesión</h1>
        <div class="input-group mb-3 rounded-1 position-relative">
          <span class="input-group-text border border-end-0" id="basic-addon1" style="background-color:none;">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
          <input type="text" name="usuario" class="form-control border border-start-0" placeholder="Usuario" id="usuario">
        </div>

        <div class="input-group mb-3 position-relative">
          <span class="input-group-text border border-end-0" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
              <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
              <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
            </svg>
          </span>
          <input type="password" name="clave" class="form-control border border-start-0" placeholder="Contraseña" id="clave">
        </div>

        <div class="input-group mb-3">
          <input type="submit" class="btn btn-success form-control mb-4">
        </div>

      </form>
    </div>
  </div>
  <script src="../../js/validacion.js"></script>

<?php include_once '../../estructura/pie.php' ?>