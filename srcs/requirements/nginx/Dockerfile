FROM debian:buster

ARG CERT
ARG KEY

RUN apt-get update -y
RUN apt-get install nginx -y
RUN apt-get install openssl -y

RUN mkdir /etc/nginx/openssl

COPY ./conf/nginx.conf /etc/nginx/conf.d
COPY ./tools/nginx.sh /
RUN chmod +x ./nginx.sh

EXPOSE 443

CMD [ "./nginx.sh" ]