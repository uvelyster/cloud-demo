#!/bin/bash

git clone -b terraform https://github.com/uvelyster/cloud-demo.git
mysql -u${db_username} -p${db_password} -h${db_url} ${db_name} < /cloud-demo/create_db_webtest.sql 

export DB_URL=${db_url}
export DB_NAME=${db_name}
export DB_USER=${db_username}
export DB_PASS=${db_password}

sed -i "s/DB_IP/$DB_URL/g" cloud-demo/process_create.php
sed -i "s/DBNAME/$DB_NAME/g" cloud-demo/process_create.php
sed -i "s/USERNAME/$DB_USER/g" cloud-demo/process_create.php
sed -i "s/PASSWORD/$DB_PASS/g" cloud-demo/process_create.php

cp cloud-demo/*.php /var/www/html
