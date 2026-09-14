<section class="py-5" id="services">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Каталог услуг</h2>
        </div>
        <div class="row g-4">
            <?php foreach ($site_data['services'] as $service): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 bg-light">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold mb-2"><?= htmlspecialchars($service['title']); ?></h5>
                            <p class="card-text text-muted small flex-grow-1"><?= htmlspecialchars($service['desc']); ?></p>
                            <a href="#contact-form" class="btn btn-outline-dark btn-sm w-100 mt-3">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>