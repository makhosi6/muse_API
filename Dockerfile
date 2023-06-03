FROM lorisleiva/laravel-docker

WORKDIR /app

COPY composer*.json ./


COPY . .

RUN composer install
ENV APP_NAME=muse_app_name

EXPOSE 8922

CMD ["php", "artisan", "serve" ]
