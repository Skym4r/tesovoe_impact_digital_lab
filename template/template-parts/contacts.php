<section class="py-5" id="contacts">
    <div class="container py-4">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Контакты</h2>
                <ul class="list-unstyled lh-lg">
                    <li class="mb-2"><i class="bi bi-geo-alt-fill text-warning me-2"></i> <strong>Адрес:</strong> <?= htmlspecialchars($site_data['company']['address']); ?></li>
                    <li class="mb-2"><i class="bi bi-telephone-fill text-warning me-2"></i> <strong>Телефон:</strong> <a href="tel:<?= $site_data['company']['phone_raw']; ?>" class="text-decoration-none text-dark"><?= htmlspecialchars($site_data['company']['phone']); ?></a></li>
                    <li class="mb-2"><i class="bi bi-envelope-fill text-warning me-2"></i> <strong>Email:</strong> <a href="mailto:<?= $site_data['company']['email']; ?>" class="text-decoration-none text-dark"><?= htmlspecialchars($site_data['company']['email']); ?></a></li>
                    <li class="mb-2"><i class="bi bi-clock-fill text-warning me-2"></i> <strong>Режим работы:</strong> <?= htmlspecialchars($site_data['company']['work_hours']); ?></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="rounded overflow-hidden border shadow-sm" style="height: 350px;">
                    <iframe
                            src="https://yandex.ru/map-widget/v1/?ll=104.300000%2C52.280000&z=13&pt=104.300000%2C52.280000%2Cpm2wtm"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            allowfullscreen="true"
                            style="border: 0; display: block;">
                    </iframe>
                </div
            </div>
        </div>
    </div>
</section>