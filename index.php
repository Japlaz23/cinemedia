<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Cinemedia - Mis películas favoritas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- CSS propio -->
  <link rel="stylesheet" href="css/estilos.css" />
  
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container mt-4">
    <h1 class="text-center mb-4">🎬 Cinemedia - Mis películas favoritas</h1>
    <div class="row" id="galeria">
      <?php
      $resultado = $conexion->query("SELECT * FROM peliculas");
      while ($fila = $resultado->fetch_assoc()) {
        echo '
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow">
            <img src="img/' . $fila["imagen"] . '" class="card-img-top poster" alt="' . $fila["titulo"] . '" />
            <div class="card-body">
              <h5 class="card-title">' . $fila["titulo"] . '</h5>
              <p class="descripcion" style="display:none;">' . $fila["descripcion"] . '</p>
              <button class="btn btn-outline-primary ver-detalles">Ver más</button>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>

<script>
$(document).ready(function() {
  // Mostrar/ocultar descripción al pulsar el botón "Ver más"
  $(".ver-detalles").click(function() {
    $(this).siblings(".descripcion").slideToggle();
  });

  // Ampliar/encoger imagen al hacer clic sobre el póster
  $(".poster").click(function() {
    $(this).toggleClass("ampliada");
  });

  // Cambio de fondo de la tarjeta al pasar el mouse (hover)
  $(".card").hover(
    function() {
      $(this).css("background-color", "#eef");
    },
    function() {
      $(this).css("background-color", "white");
    }
  );
});
</script>
</body>
</html>
