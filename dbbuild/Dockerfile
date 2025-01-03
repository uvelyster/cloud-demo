FROM quay.io/uvelyster/mysql:8.1
COPY create_db_webtest.sql /docker-entrypoint-initdb.d/
COPY my.cnf /etc/mysql/conf.d/custom.cnf
