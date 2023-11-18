FROM debian:buster

RUN apt-get update -y
RUN apt-get install -y \
    php-fpm \
    php-mysql \
    curl \
    wget

RUN mkdir /var/www
RUN mkdir /var/www/html

COPY ./tools/wordpress.sh /

RUN chmod +x ./wordpress.sh

WORKDIR /

EXPOSE 9000

CMD [ "./wordpress.sh" ]
