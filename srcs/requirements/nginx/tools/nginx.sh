#!/bin/bash

openssl req -x509 -nodes -days 365 -newkey rsa:2048  \
    -out $CERT \
    -keyout $KEY \
    -subj "/C=DE/ST=Heilbronn/L=Heilbronn/O=42 School/OU=arobu/CN=arobu/"

nginx -g 'daemon off;'