create database sesiones;
use sesiones;
create table login(usuario varchar(40) not null primary key, password varchar (40));
insert into login(usuario, password) values('jocripana', '1234');
