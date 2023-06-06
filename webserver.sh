#! /bin/bash 

yum install -y libjpeg* libpng* freetype* gd-* gcc gcc-c++ gdbm-devel libtermcap-devel

yum install -y httpd* 

curl -O https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm -Uvh epel-release-latest-7.noarch.rpm

curl -O http://rpms.remirepo.net/enterprise/remi-release-7.rpm
rpm -Uvh remi-release-7.rpm

yum install -y yum-utils
yum-config-manager --enable remi-php72
yum install -y php php-common php-opcache php-cli php-gd php-curl php-mysqlnd php-mysqli

systemctl start httpd
systemctl enable httpd
yum install -y mysql nfs-utils rpcbind
systemctl start mysql
yum install -y unzip stress
