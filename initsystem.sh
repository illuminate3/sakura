#!/bin/bash

echo Attempting to refresh system migrations and seed database.
php artisan migrate --force

php artisan db:seed --force


echo Upload datasets to enable zipcodes and drug codes.

echo Stay tuned for diagnosis sets and other database goodies.

