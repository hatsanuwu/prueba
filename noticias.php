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

    <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
            <article class="card shadow-lg border-0">
                <div class="card-body p-4 p-md-5">
                    <span class="text-uppercase text-muted small">Especial</span>
                    <h3 class="text-success fw-bold mt-2 mb-3">Historia, tipos y componentes de las computadoras</h3>
                    <p class="text-muted">Reunimos en un solo artículo la evolución de la computación, los principales formatos de equipos y los componentes esenciales que impulsan cada máquina.</p>

                    <section class="mt-4">
                        <h4 class="text-success fw-semibold mb-3">Historia</h4>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="border rounded h-100 shadow-sm overflow-hidden">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Two_women_operating_ENIAC_%28full_resolution%29.jpg/1280px-Two_women_operating_ENIAC_%28full_resolution%29.jpg" class="w-100" alt="ENIAC">
                                    <div class="p-3">
                                        <h5 class="fw-semibold">1940s - ENIAC</h5>
                                        <p class="mb-0">Primera computadora electrónica de propósito general.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded h-100 shadow-sm overflow-hidden">
                                    <img src="https://www.lighterra.com/articles/historyofcomputers/commodorepetlarge.jpg" class="w-100" alt="PC">
                                    <div class="p-3">
                                        <h5 class="fw-semibold">1970s - PC</h5>
                                        <p class="mb-0">Nacimiento de las computadoras personales.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded h-100 shadow-sm overflow-hidden">
                                    <img src="https://tecscience.tec.mx/es/wp-content/uploads/sites/8/2024/05/historia-del-internet.jpg" class="w-100" alt="Internet">
                                    <div class="p-3">
                                        <h5 class="fw-semibold">2000s - Internet</h5>
                                        <p class="mb-0">Era de la conectividad global.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mt-5">
                        <h4 class="text-success fw-semibold mb-3">Tipos de computadoras</h4>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="border rounded h-100 shadow-sm text-center overflow-hidden">
                                    <img src="https://www.generacionuniversitaria.com.mx/wp-content/uploads/2023/04/Huawei-MateStation-S-1024x640.webp" class="w-100" alt="PC de escritorio">
                                    <div class="p-3">
                                        <h5 class="fw-semibold">Desktop</h5>
                                        <p class="mb-0">Computadoras de escritorio para uso profesional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded h-100 shadow-sm text-center overflow-hidden">
                                    <img src="https://cdn.aarp.net/content/dam/aarpe/es/home/hogar-familia/tecnologia/info-2020/guia-para-comprar-computadoras-portatiles/_jcr_content/root/container_main/container_body_main/container_body2/container_body_cf/body_two_cf_one/par10/articlecontentfragme/cfimage.coreimg.50.932.jpeg/content/dam/aarp/home-and-family/personal-technology/2020/08/1140-webcam-call-esp.jpg" class="w-100" alt="Laptop">
                                    <div class="p-3">
                                        <h5 class="fw-semibold">Laptop</h5>
                                        <p class="mb-0">Computadoras portátiles para movilidad.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border rounded h-100 shadow-sm text-center overflow-hidden">
                                    <img src="https://cink.es/wp-content/uploads/2024/02/Diferencia-Smartphone-y-Android-jpg.webp" class="w-100" alt="Dispositivo móvil">
                                    <div class="p-3">
                                        <h5 class="fw-semibold">Móvil</h5>
                                        <p class="mb-0">Dispositivos inteligentes de bolsillo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mt-5">
                        <h4 class="text-success fw-semibold mb-3">Componentes esenciales</h4>
                        <div class="row g-4">
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
                </div>
            </article>
        </div>
    </div>
</div>

