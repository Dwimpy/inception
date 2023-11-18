FROM debian:buster

RUN apt-get update -y
RUN apt-get install -y mariadb-server

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/database.sh /
RUN chmod +x ./database.sh

EXPOSE 3306
CMD [ "./database.sh" ]