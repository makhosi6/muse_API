FROM lorisleiva/laravel-docker

WORKDIR /workdir

COPY composer*.json ./

RUN composer install

COPY . .

ENV APP_NAME=name_from_docker

EXPOSE 8000

CMD ["php" "artisan" "serve" ]
