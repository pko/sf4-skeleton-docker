#!/bin/sh

docker-compose pull
docker-compose build
docker-compose run php composer update
echo 'Run `docker-compose up --build --force-recreate` now and check that everything is fine!'
