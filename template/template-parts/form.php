<section class="py-5 bg-warning bg-opacity-10" id="contact-form">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="bg-white p-4 p-md-5 rounded shadow-sm border">
                    <h3 class="fw-bold text-center mb-2">Оставить заявку</h3>
                    <p class="text-muted text-center mb-4 small">Заполните форму, и наш менеджер перезвонит вам в течение 10 минут</p>

                    <form id="mainContactForm">
                        <div class="mb-3">
                            <label class="form-label small text-muted">Ваше имя</label>
                            <input type="text" class="form-control" name="name" required placeholder="Иван Иванов">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Телефон</label>
                            <input type="tel" class="form-control" name="phone" required placeholder="+7 (___) ___-__-__">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Комментарий</label>
                            <textarea class="form-control" name="message" rows="3" placeholder="Какой вид техники вас интересует?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 text-white fw-bold py-2">Отправить заявку</button>
                        <div class="mt-3 text-center" id="formStatus"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>