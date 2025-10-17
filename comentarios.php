<?php include("database/db.php"); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $conn->query("INSERT INTO comentarios (nombre, mensaje) VALUES ('$nombre', '$mensaje')");
}
?>

<div class="container my-5">
    <h2>Comentarios</h2>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Tu nombre" class="form-control mb-2" required>
        <textarea name="mensaje" placeholder="Escribe tu comentario" class="form-control mb-2" required></textarea>
        <button class="btn btn-success">Enviar</button>
    </form>

    <hr>

    <?php
    $result = $conn->query("SELECT * FROM comentarios ORDER BY fecha DESC");
    while ($row = $result->fetch_assoc()):
    ?>
    <div class="border p-2 mb-2 rounded">
        <strong><?= $row['nombre']; ?>:</strong>
        <p><?= $row['mensaje']; ?></p>
        <small class="text-muted"><?= $row['fecha']; ?></small>
    </div>
    <?php endwhile; ?>
</div>
