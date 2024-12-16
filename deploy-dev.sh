#!/bin/bash

docker rm -fv webserver dbserver 

docker network ls | grep myapp-net
if [ $? -ne 0 ]
  then 
    docker network create myapp-net --subnet 172.20.0.0/24 
fi

docker run \
  -d \
  -p 3306:3306 \
  -e MYSQL_ROOT_PASSWORD=Test123! \
  -e MYSQL_DATABASE=webtest \
  -e MYSQL_USER=testuser \
  -e MYSQL_PASSWORD=testpass \
  -v mydata:/var/lib/mysql \
  -v ./create_db_webtest.sql:/docker-entrypoint-initdb.d/webtest.sql \
  --net myapp-net \
  --name dbserver \
  quay.io/uvelyster/mysql:5.7

docker run --net myapp-net -d -p 2222:80 -v /source:/var/www/html --name webserver php:7.3-apache
docker exec webserver docker-php-ext-install mysqli
docker restart webserver
