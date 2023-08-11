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
                  <img src="https://cdn-icons-png.flaticon.com/256/1738/1738691.png"
                  style="width: 185px;" alt="logo">
                  <h3 class="mt-1 mb-5 pb-1">Iniciar sesión</h3>
                </div>

                <form action="{{route('login')}}" method= "post">
                  @csrf
                  <p></p>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Correo electrónico</label>
                    <input type="email" name="email" id="form2Example11" class="form-control" required />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Contraseña</label>
                    <div class="input-group position-relative">
                      <input type="password" name="password" id="form2Example22" class="form-control" minlength="8" required/>
                      <button class="btn btn-outline-secondary password-toggle-icon" type="button" id="togglePassword">
                        <i class="fas fa-eye"></i>
                      </button>
                    </div>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-outline-primary">Iniciar sesión</button>
                    <a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">¿No tienes cuenta?</p>
                    <a href="{{route('register')}}" class="btn btn-outline-danger">Registrarse</a>  
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                      <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/PROOH.MX?mibextid=ZbWKwL" style="margin-right: 10px;">
                      <img src="https://cdn-icons-png.flaticon.com/128/2504/2504903.png" style="width: 20px;" alt="facebook"></a>
                      <img src="https://cdn-icons-png.flaticon.com/128/5968/5968534.png" style="width: 20px;" alt="email"></a>
                  </div>
                    
                    

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Información de ingreso</h4>
                <p class="small mb-0">Pulsar el icono del correo para solicitar una cuenta
                    para ingersar a la página.</p>
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
        if (icon.classList.contains("fa-eye")) {
          icon.classList.remove("fa-eye");
          icon.classList.add("fa-eye-slash");
        } else {
          icon.classList.remove("fa-eye-slash");
          icon.classList.add("fa-eye");
        }
      });
    });
  </script>
</body>

</html>
