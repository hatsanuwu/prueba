<?php include("database/db.php"); ?>

<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje_texto = $_POST['mensaje'];

    $sql = "INSERT INTO contacto (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje_texto')";
    if ($conn->query($sql)) {
        $mensaje = "✅ Tu mensaje ha sido enviado correctamente.";
    } else {
        $mensaje = "❌ Error al enviar: " . $conn->error;
    }
}
?>

<div class="container my-5">
    <h2>Contacto</h2>
    <form method="POST" id="formContacto" onsubmit="return validarFormulario()">
        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Correo:</label>
            <input type="email" name="correo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mensaje:</label>
            <textarea name="mensaje" class="form-control" required></textarea>
        </div>
        <button class="btn btn-success">Enviar</button>
    </form>
    <p class="mt-3"><?= $mensaje; ?></p>
</div>

<script>
function validarFormulario() {
    let nombre = document.forms["formContacto"]["nombre"].value;
    let correo = document.forms["formContacto"]["correo"].value;

    if (nombre.length < 3) {
        alert("El nombre debe tener al menos 3 caracteres.");
        return false;
    }
    if (!correo.includes("@")) {
        alert("Ingresa un correo válido.");
        return false;
    }
    return true;
}
</script>
