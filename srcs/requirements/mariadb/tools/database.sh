#!/bin/bash

# Create Database

service mysql start

  echo "Creating database $MARIADB_NAME ..."
  mysql -e "CREATE DATABASE IF NOT EXISTS $MARIADB_NAME ;"
  echo "Database created."
  echo "Creating user $MARIADB_USER..."
  mysql -e "CREATE USER IF NOT EXISTS '$MARIADB_USER'@'%' IDENTIFIED BY '$MARIADB_PWD' ;"
  mysql -e "GRANT ALL PRIVILEGES ON $MARIADB_NAME.* TO '$MARIADB_USER'@'%' ;"
  mysql -e "FLUSH PRIVILEGES"
  echo "User created and granted all privileges."

kill $(cat /var/run/mysqld/mysqld.pid)

mysqld
