DROP table 4_2019_10_1_sql.users;
DROP table 4_2019_10_1_sql.roles;


--thay đổi yêu cầu của fiels--
Alter table 4_2019_10_1_sql.users
Modify column role int not null default '1';

select 4_2019_10_1_sql.users.id , 4_2019_10_1_sql.users.name ,4_2019_10_1_sql.users.role, 4_2019_10_1_sql.roles.name as name_role
from 4_2019_10_1_sql.users   join 4_2019_10_1_sql.roles on 4_2019_10_1_sql.users.role = 4_2019_10_1_sql.roles.id ;



Create table 4_2019_10_1_sql.users (
id int not null primary key auto_increment,
name varchar(50),
email varchar(255) UNIQUE,
password varchar(20),
role  int not null  ,
 FOREIGN KEY (role) REFERENCES roles(id)
  
)
select *from 4_2019_10_1_sql.users;
select *from 4_2019_10_1_sql.roles
;
 Create table 4_2019_10_1_sql.roles ( 
id int  not null primary key auto_increment ,
name varchar(50) UNIQUE
)
;

insert into 4_2019_10_1_sql.roles (id,name) values ('1','hoc');
insert into 4_2019_10_1_sql.roles (id,name) values ('2','choi');
 
insert into 4_2019_10_1_sql.users(id,name,email,password,role) values ('1','linh','nguyenlynh@gmail','linh1234','2');
insert into 4_2019_10_1_sql.users(id,name,email,password,role) values ('lan','nguyenlanh@gmail','lan1234','1');
insert into 4_2019_10_1_sql.users(id,name,email,password,role) values ('hoa','nguyenhoa@gmail','lan1234','1');
insert into 4_2019_10_1_sql.users(name,email,password,role) values ('nam','nguyennam@gmail','lan1234','2');
insert into 4_2019_10_1_sql.users(name,email,password) values ('nam','nguyenm@gmail','lan1234');