FROM m1nor/php-nginx

RUN docker-php-ext-install pdo pdo_mysql
