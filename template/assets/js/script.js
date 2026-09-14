document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('mainContactForm');
    const status = document.getElementById('formStatus');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            status.innerHTML = '<div class="alert alert-success py-2 mb-0">Спасибо! Заявка успешно отправлена.</div>';
            form.reset();
        });
    }
});