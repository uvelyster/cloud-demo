#!/bin/bash

docker rm -f test 
docker build -t testimage:$1 .
docker run -d --name test testimage:$1
sleep 1s 
curl 172.17.0.2
