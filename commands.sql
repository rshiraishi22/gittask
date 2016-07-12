create database repairing;

use repairing;

create table news(name varchar(100),explane varchar(2000));

grant all on repairing_login.* to testuser@localhost identified by '9999';

insert into news (name, explane) values ('ニュース', '新サービスがリリースされました');
insert into news (name, explane) values ('ニュース', 'スマホアプリ提供開始');
