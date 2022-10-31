<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php
include "header.php";
?>

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Registrarse</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Registro
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  <div class="card lg-3" >
    <div class="row g-0 d-flex align-items-center">
      
      <div class="col-lg-8 mx-auto">
        <div class="card-body py-5 px-md-5">

          <form method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" class="form-control" />
              <label class="form-label" for="form2Example1">Ingresa correo electronico</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Recordar contraseña </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#!">Olvidaste la contraseña?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4">Registrarse</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

    <?php
include "footer.php";
?>