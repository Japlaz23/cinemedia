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
  <div class="container">
    <h1 class="text-center">🎬 Cinemedia - Mis películas favoritas</h1>

    <div class="row" id="galeria">
      <?php
      $resultado = $conexion->query("SELECT * FROM peliculas");
      while ($fila = $resultado->fetch_assoc()) {
        echo '
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="card" 
               data-bs-toggle="modal" 
               data-bs-target="#modalDetalle"
               data-titulo="' . htmlspecialchars($fila["titulo"]) . '"
               data-descripcion="' . htmlspecialchars($fila["descripción"]) . '"
               data-imagen="img/' . htmlspecialchars($fila["imagen"]) . '"
          >
            <img src="img/' . htmlspecialchars($fila["imagen"]) . '" class="card-img-top" alt="' . htmlspecialchars($fila["titulo"]) . '" />
            <div class="card-body">
              <h5 class="card-title text-center">' . htmlspecialchars($fila["titulo"]) . '</h5>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>

  <!-- Modal detalle -->
  <div class="modal fade" id="modalDetalle" tabindex="-1" aria-labelledby="modalDetalleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="modalDetalleLabel">Título</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body d-flex flex-column flex-md-row gap-3">
          <img src="" alt="" id="modalImagen" class="img-fluid rounded shadow" style="max-width: 300px; object-fit: cover;">
          <p id="modalDescripcion" class="fs-5"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Script propio -->
  <script src="js/scripts.js"></script>
</body>
</html>
