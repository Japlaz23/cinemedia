<!-- db.php -->
<?php
$conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");
$conexion->set_charset("utf8");

$resultado = $conexion->query("SELECT * FROM peliculas");

while ($fila = $resultado->fetch_assoc()) {
  echo '
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="img/' . $fila["imagen"] . '" class="card-img-top" alt="' . $fila["titulo"] . '">
        <div class="card-body">
          <h5 class="card-title">' . $fila["titulo"] . '</h5>
          <p class="card-text resumen" style="display:none;">' . $fila["descripcion"] . '</p>
          <button class="btn btn-primary ver-mas">Ver más</button>
        </div>
      </div>
    </div>';
}
?>
