#!/bin/sh

cd /var/www

npm install

exec "$@"