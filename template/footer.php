<footer class="bg-dark text-white py-4 border-top">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 text-white">
        <div class="small">
            &copy; <?= date('Y'); ?> <?= htmlspecialchars($site_data['company']['name']); ?>. Все права защищены.
        </div>
        <ul class="nav">
            <?php foreach ($site_data['menu'] as $link => $title): ?>
                <li class="nav-item">
                    <a href="<?= $link; ?>" class="nav-link small px-2 text-white"><?= htmlspecialchars($title); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/template/assets/js/script.js"></script>
</body>
</html>