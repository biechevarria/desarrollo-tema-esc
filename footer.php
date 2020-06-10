  <?php
    /*
    *****Fichero que muestra el footer del tema o plantilla
    *****Fichero que carga CSS's, JS y otros ficheros no indispensables.
    */
  ?>
  
  <!-- Footer -->
  <footer class="page-footer font-small pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 mt-md-0 mt-4">

      <!-- Content -->
      <h5 class="text-uppercase">RRSS</h5>
      

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-4">

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-4 text-center ">
      <img src="<?php bloginfo('template_url'); ?> /img/logo.png" alt="logo English Soccer Camp">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-4">

      <!-- Links -->
      <h5 class="text-uppercase">Agradecimientos y otros</h5>

      <ul class="list-unstyled">
        <li>
          <a href="#!">Link 1</a>
        </li>
        <li>
          <a href="#!">Link 2</a>
        </li>
        <li>
          <a href="#!">Link 3</a>
        </li>
        <li>
          <a href="#!">Link 4</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/">Diseñado y desarrollado por borjaechevarria.es</a>
</div>
<!-- Copyright -->

<!--JQuery first, then Tether, then Boostrap JS.-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script src="<?php bloginfo('template_url'); ?> /js/personalizados.js" type="text/javascript"></script>

<?php wp_footer(); ?>
</footer>
<!-- Footer -->