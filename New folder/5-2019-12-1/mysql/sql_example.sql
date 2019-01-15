
--create database--
create database example;


--create table--
Create table example.users (
id int not null primary key auto_increment,
name varchar(50),
email varchar(255) UNIQUE,
password varchar(20),
role  int not null default '1'  ,
 FOREIGN KEY (role) REFERENCES roles(id)
  
);
 Create table example.roles ( 
id int  not null primary key auto_increment ,
name varchar(50) UNIQUE
)
;

--insert--
insert into example.roles (id,name) values ('1','hoc');
insert into example.roles (id,name) values ('2','choi');
 
 
 insert into example.users(id,name,email,password,role) values ('1','linh','nguyenlynh@gmail','linh1234','2');
insert into example.users(name,email,password,role) values ('lan','nguyenlanh@gmail','lan1234','1');
insert into example.users(name,email,password,role) values ('hoa','nguyenhoa@gmail','lan1234','1');
insert into example.users(name,email,password,role) values ('nam','nguyennam@gmail','lan1234','2');
insert into example.users(name,email,password) values ('nam','nguyenm@gmail','lan1234');


--select --
select * from example.users;
select * from example.roles;


use example;
--join--
select  users.id ,  users.name , users.role,  roles.name as name_role
from  users   join  roles on  users.role =  roles.id ; 

--where--
select * from users where role = '1';

--update--
update users 
set password = 'linh123' 
where id = '2'

use mydb;
drop table roles;
drop table users
select * from mydb.roles;
select * from mydb.users;