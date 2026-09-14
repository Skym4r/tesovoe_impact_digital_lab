<section class="py-5 bg-light" id="reviews">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Отзывы клиентов</h2>
        </div>
        <div class="row g-4">
            <?php foreach ($site_data['reviews'] as $review): ?>
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <div class="text-warning mb-2">
                                <?php for($i=0; $i < $review['rating']; $i++): ?>
                                    <i class="bi bi-star-fill"></i>
                                <?php endfor; ?>
                            </div>
                            <p class="card-text text-muted mb-3">"<?= htmlspecialchars($review['text']); ?>"</p>
                            <h6 class="fw-bold mb-0">— <?= htmlspecialchars($review['author']); ?></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>