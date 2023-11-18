#!/bin/bash

openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes  \
    -out $CERT \
    -keyout $KEY \
    -subj "/C=DE/ST=Heilbronn/L=Heilbronn/O=42 School/OU=arobu/CN=arobu/"

nginx -g 'daemon off;'