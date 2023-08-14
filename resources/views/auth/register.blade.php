<!doctype html>
<html lang="en">

<head>
  <title>PROOH</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel = "stylesheet"href= "{{asset ('assets/estilos.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="https://cdn-icons-png.flaticon.com/128/760/760847.png" style="width: 185px;" alt="logo">
                  <h3 class="mt-1 mb-5 pb-1">Registrarse</h3>
                </div>
                <form action="{{route('register')}}" method= "post" id="registrationForm">
                  @csrf
                  <p></p>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example33">Nombre completo</label>
                    <input type="text" name="name" id="form2Example33" pattern="[[A-Z][a-z][\s]]*" class="form-control" minlength="10" style='text-transform:capitalize;' />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Correo electrónico</label>
                    <input type="email" name="email" id="form2Example11" class="form-control" required />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Contraseña</label>
                    <div class="input-group position-relative">
                      <input type="password" name="password" id="form2Example22" class="form-control" minlength="8" required/>
                      <button class="btn btn-outline-secondary password-toggle-icon" type="button" id="togglePassword">
                        <i class="fas fa-eye-slash"></i>
                      </button>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example23">Confirma tu contraseña</label>
                    <div class="input-group position-relative">
                      <input type="password" name="password_confirmation" id="form2Example23" class="form-control" required/>  
                      <button class="btn btn-outline-secondary password-toggle-icon" type="button" id="togglePassword2">
                        <i class="fas fa-eye-slash"></i>
                      </button>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between pb-4">
                    <a href="{{route('login')}}" class="btn btn-outline-primary">Iniciar sesión</a>
                    <button class="btn btn-outline-danger" type="submit">Registrarse</button>
                  </div>

                </form>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Información de ingreso</h4>
                <p class="medium mb-0">Pulsar el icono del correo para solicitar una
                    cuenta e ingersar a la página.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const togglePassword = document.querySelector("#togglePassword");
      const passwordInput = document.querySelector("#form2Example22");
      
      togglePassword.addEventListener("click", function() {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);
    
        // Cambiar el ícono del botón
        const icon = this.querySelector("i");
        if (icon.classList.contains("fa-eye-slash")) {
          icon.classList.remove("fa-eye-slash");
          icon.classList.add("fa-eye");
        } else {
          icon.classList.remove("fa-eye");
          icon.classList.add("fa-eye-slash");
        }
      });
    });
    </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const togglePassword2 = document.querySelector("#togglePassword2");
      const passwordInput2 = document.querySelector("#form2Example23");
    
      togglePassword2.addEventListener("click", function() {
        const type = passwordInput2.getAttribute("type") === "password" ? "text" : "password";
        passwordInput2.setAttribute("type", type);
    
        // Cambiar el ícono del botón
        const icon = this.querySelector("i");
        if (icon.classList.contains("fa-eye-slash")) {
          icon.classList.remove("fa-eye-slash");
          icon.classList.add("fa-eye");
        } else {
          icon.classList.remove("fa-eye");
          icon.classList.add("fa-eye-slash");
        }
      });
      const registrationForm = document.querySelector("#registrationForm");
      registrationForm.addEventListener("submit", function(event) {
        const passwordValue = passwordInput.value;
        const passwordConfirmationValue = passwordInput2.value;
        
        if (passwordValue !== passwordConfirmationValue) {
          event.preventDefault(); // Evita el envío del formulario
          alert("Las contraseñas no coinciden. Por favor, verifique.");
        }
      });
    });
  </script>
</body>

</html>
