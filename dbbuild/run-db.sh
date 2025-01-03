#!/bin/bash

docker run \
  -d \
  -e MYSQL_ROOT_PASSWORD=test \
  -e MYSQL_USER=testuser \
  -e MYSQL_PASSWORD=testpass \
  -e MYSQL_DATABASE=webtest \
  --name phpdbsvc \
  --network test \
  -v ./my.cnf:/etc/mysql/conf.d/my.cnf \
  -v ./create_db_webtest.sql:/docker-entrypoint-initdb.d/webtest.sql  \
  mysql:8.1

# docker run -d -e MYSQL_ROOT_PASSWORD=test -e MYSQL_USER=testuser -e MYSQL_PASSWORD=testpass -e MYSQL_DATABASE=webtest --name phpdbsvc --network test  myregistry.com/myproj/phpdb:v2
