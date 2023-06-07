set password=password('Test123!');
grant all privileges on *.* to 'root'@'10.0.1.%' identified by 'Test123!';
flush privileges;
create database webtest default charset=utf8 collate=utf8_bin;
use webtest;
create table items ( id int(11) not null auto_increment, title varchar(45) not null, description text, created datetime not null, primary key(id) );
