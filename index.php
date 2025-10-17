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
        <li class="nav-item"><a class="nav-link" href="#historia">Historia</a></li>
        <li class="nav-item"><a class="nav-link" href="#tipos">Tipos</a></li>
        <li class="nav-item"><a class="nav-link" href="#componentes">Componentes</a></li>
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
    <h1 class="display-5 fw-bold text-success">Historia de las Computadoras</h1>
    <p class="lead text-muted">Explora la evolución de la tecnología computacional.</p>
    <a href="#historia" class="btn btn-success btn-lg">Comenzar</a>
  </div>
</header>

<!-- 🕰️ HISTORIA -->
<section id="historia" class="container mb-5">
  <h2 class="text-success mb-4 fw-bold text-center">Historia</h2>
  <div class="row">
    <div class="col-lg-4 mb-3">
      <div class="card shadow-sm">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Two_women_operating_ENIAC_%28full_resolution%29.jpg/1280px-Two_women_operating_ENIAC_%28full_resolution%29.jpg" class="card-img-top" alt="ENIAC">
        <div class="card-body">
          <h5 class="card-title">1940s - ENIAC</h5>
          <p class="card-text">Primera computadora electrónica de propósito general.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-3">
      <div class="card shadow-sm">
        <img src="https://www.lighterra.com/articles/historyofcomputers/commodorepetlarge.jpg" class="card-img-top" alt="PC">
        <div class="card-body">
          <h5 class="card-title">1970s - PC</h5>
          <p class="card-text">Nacimiento de las computadoras personales.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-3">
      <div class="card shadow-sm">
        <img src="https://tecscience.tec.mx/es/wp-content/uploads/sites/8/2024/05/historia-del-internet.jpg" class="card-img-top" alt="Internet">
        <div class="card-body">
          <h5 class="card-title">2000s - Internet</h5>
          <p class="card-text">Era de la conectividad global.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 💻 TIPOS -->
<section id="tipos" class="container mb-5">
  <h2 class="text-success mb-4 fw-bold text-center">Tipos de Computadoras</h2>
  <div class="card-group shadow-sm">
    <div class="card">
      <img src="https://www.generacionuniversitaria.com.mx/wp-content/uploads/2023/04/Huawei-MateStation-S-1024x640.webp" class="card-img-top" alt="PC">
      <div class="card-body text-center">
        <h5 class="card-title">Desktop</h5>
        <p class="card-text">Computadoras de escritorio para uso profesional.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://cdn.aarp.net/content/dam/aarpe/es/home/hogar-familia/tecnologia/info-2020/guia-para-comprar-computadoras-portatiles/_jcr_content/root/container_main/container_body_main/container_body2/container_body_cf/body_two_cf_one/par10/articlecontentfragme/cfimage.coreimg.50.932.jpeg/content/dam/aarp/home-and-family/personal-technology/2020/08/1140-webcam-call-esp.jpg" class="card-img-top" alt="Laptop">
      <div class="card-body text-center">
        <h5 class="card-title">Laptop</h5>
        <p class="card-text">Computadoras portátiles para movilidad.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://cink.es/wp-content/uploads/2024/02/Diferencia-Smartphone-y-Android-jpg.webp" class="card-img-top" alt="Móvil">
      <div class="card-body text-center">
        <h5 class="card-title">Móvil</h5>
        <p class="card-text">Dispositivos inteligentes de bolsillo.</p>
      </div>
    </div>
  </div>
</section>

<!-- ⚙️ COMPONENTES -->
<section id="componentes" class="container mb-5">
  <h2 class="text-success mb-4 fw-bold text-center">Componentes</h2>
  <div class="row">
    <div class="col-md-6">
      <ul class="list-group shadow-sm">
        <li class="list-group-item"><i class="bi bi-cpu me-2"></i> Procesador (CPU)</li>
        <li class="list-group-item"><i class="bi bi-memory me-2"></i> Memoria RAM</li>
      </ul>
    </div>
    <div class="col-md-6">
      <ul class="list-group shadow-sm">
        <li class="list-group-item"><i class="bi bi-hdd me-2"></i> Disco Duro</li>
        <li class="list-group-item"><i class="bi bi-card-image me-2"></i> Tarjeta Gráfica</li>
      </ul>
    </div>
  </div>
</section>

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
