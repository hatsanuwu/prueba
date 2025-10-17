<?php include("database/db.php"); ?>

<div class="container my-5">
    <h2 class="mb-4 text-center">Noticias Tecnológicas</h2>
    <div class="row">
        <?php
        $result = $conn->query("SELECT * FROM noticias ORDER BY fecha DESC");
        while ($row = $result->fetch_assoc()):
        ?>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="<?= $row['imagen']; ?>" class="card-img-top" alt="Noticia">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['titulo']; ?></h5>
                    <p class="card-text"><?= $row['descripcion']; ?></p>
                    <small class="text-muted"><?= $row['fecha']; ?></small>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>

