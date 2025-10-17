<?php include("database/db.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NextLoad</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 1rem;
    }
    .card-title {
      font-weight: 600;
    }
    textarea {
      resize: none;
    }
  </style>
</head>
<body>

<!-- 🧭 NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">NextLoad</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#noticias">Noticias</a></li>
        <li class="nav-item"><a class="nav-link" href="#comentarios">Comentarios</a></li>
        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- 🖼️ HERO -->
<header class="bg-light p-5 mb-4 text-center">
  <div class="container">
    <h1 class="display-5 fw-bold text-success">Blog Tecnológico NextLoad</h1>
    <p class="lead text-muted">Historias, análisis y novedades del mundo de la computación.</p>
    <a href="#noticias" class="btn btn-success btn-lg">Ver últimas noticias</a>
  </div>
</header>

<!-- 📰 NOTICIAS -->
<section id="noticias" class="container mb-5">
  <h2 class="text-success mb-4 fw-bold text-center">📰 Noticias Tecnológicas</h2>
  <div class="row">
    <?php
    $result = $conn->query("SELECT * FROM noticias ORDER BY fecha DESC LIMIT 3");
    while ($row = $result->fetch_assoc()):
    ?>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <img src="<?= $row['imagen']; ?>" class="card-img-top rounded-top" alt="Noticia">
          <div class="card-body">
            <h5 class="card-title text-success"><?= $row['titulo']; ?></h5>
            <p class="card-text"><?= $row['descripcion']; ?></p>
          </div>
          <div class="card-footer bg-light text-end">
            <small class="text-muted"><i class="bi bi-calendar-event me-1"></i><?= $row['fecha']; ?></small>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<!-- 💬 COMENTARIOS -->
<section id="comentarios" class="container mb-5">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card shadow border-0">
        <div class="card-body">
          <h3 class="text-success fw-bold mb-3">💬 Deja tu comentario</h3>

<form method="POST" action="#comentarios">
  <input type="hidden" name="formulario" value="comentario">
  <div class="form-floating mb-3">
    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Tu nombre" required>
    <label for="nombre">Tu nombre</label>
  </div>
  <div class="form-floating mb-3">
    <textarea name="mensaje" class="form-control" placeholder="Escribe algo..." id="mensaje" style="height: 100px" required></textarea>
    <label for="mensaje">Mensaje</label>
  </div>
  <button class="btn btn-success w-100">Publicar comentario</button>
</form>
          <hr>
          <h5 class="fw-bold mb-3">Comentarios recientes</h5>
         <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['formulario'] == 'comentario') {
  $nombre = $_POST['nombre'];
  $mensaje = $_POST['mensaje'];
  $conn->query("INSERT INTO comentarios (nombre, mensaje) VALUES ('$nombre', '$mensaje')");
}
$result = $conn->query("SELECT * FROM comentarios ORDER BY fecha DESC LIMIT 5");
while ($row = $result->fetch_assoc()):?>

            <div class="border rounded p-3 mb-3 bg-light shadow-sm">
              <div class="d-flex justify-content-between">
                <strong class="text-success"><?= htmlspecialchars($row['nombre']); ?></strong>
                <small class="text-muted"><?= $row['fecha']; ?></small>
              </div>
              <p class="mb-0 mt-2"><?= nl2br(htmlspecialchars($row['mensaje'])); ?></p>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✉️ CONTACTO -->
<section id="contacto" class="container mb-5">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
      <div class="card shadow-lg border-0">
        <div class="card-body p-4">
          <h3 class="text-center mb-3 text-success fw-bold">📬 Contáctanos</h3>
          <p class="text-muted text-center mb-4">¿Tienes dudas o sugerencias? Escríbenos y te responderemos pronto.</p>

          <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['formulario'] == 'contacto') {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje_texto = $_POST['mensaje'];
  $conn->query("INSERT INTO contacto (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje_texto')");
  echo '<div class="alert alert-success text-center mt-3">✅ Mensaje enviado correctamente.</div>';
}
?>
<form method="POST" action="#contacto">
  <input type="hidden" name="formulario" value="contacto">
  <div class="mb-3">
    <label class="form-label fw-semibold">Nombre</label>
    <input type="text" name="nombre" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label fw-semibold">Correo electrónico</label>
    <input type="email" name="correo" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label fw-semibold">Mensaje</label>
    <textarea name="mensaje" rows="4" class="form-control" required></textarea>
  </div>
  <button class="btn btn-success w-100">Enviar</button>
</form>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- 🦶 FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-5">
  <div class="container">
    <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script> NextLoad - Todos los derechos reservados</p>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
