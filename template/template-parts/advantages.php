<section class="py-5" id="advantages">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Почему клиенты выбирают «Абарин и Ко»?</h2>
        </div>
        <div class="row g-4">
            <?php foreach ($site_data['advantages'] as $adv): ?>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="p-4 rounded border h-100 shadow-sm bg-white">
                        <div class="fs-1 mb-3 text-warning"><i class="bi bi-<?= $adv['icon']; ?>"></i></div>
                        <h5 class="fw-bold mb-2"><?= htmlspecialchars($adv['title']); ?></h5>
                        <p class="text-muted small mb-0"><?= htmlspecialchars($adv['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>