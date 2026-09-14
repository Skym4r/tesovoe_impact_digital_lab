FROM php:8.2-apache

# Включаем mod_rewrite для красивых URL, если понадобятся
RUN a2enmod rewrite

# Копируем все файлы проекта в веб-директорию Apache
COPY . /var/www/html/

# Открываем 80 порт
EXPOSE 80