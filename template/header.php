<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site_data['company']['name']); ?> — Аренда спецтехники</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="/template/assets/css/style.css">
</head>
<body>

<header class="sticky-top bg-white border-bottom shadow-sm ">
    <nav class="navbar navbar-expand-lg navbar-light container py-2 px-2">
        <a class="navbar-brand fw-bold fs-4 text-dark" href="/">
            <span class="text-warning">Абарин и Ко</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <?php foreach ($site_data['menu'] as $link => $title): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link; ?>"><?= htmlspecialchars($title); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <a href="tel:<?= $site_data['company']['phone_raw']; ?>" class="fw-bold text-decoration-none text-dark fs-6">
                    <i class="bi bi-telephone-fill text-warning me-1"></i>
                    <?= htmlspecialchars($site_data['company']['phone']); ?>
                </a>
                <a href="#contact-form" class="btn btn-warning text-white fw-semibold">Заказать звонок</a>
            </div>
        </div>
    </nav>
</header>