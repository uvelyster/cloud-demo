FROM quay.io/uvelyster/ubuntu:24.04
RUN apt-get update; \
    apt-get install -y apache2
VOLUME /var/www/html
EXPOSE 80
CMD apachectl -D FOREGROUND
