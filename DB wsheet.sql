create database cfg;

use cfg;

create table emplist(empid varchar(10) NOT NULL,
passwd varchar(10) NOT NULL,
des int );

insert into emplist values("1","password1",1);
insert into emplist values("2","password2",1);
insert into emplist values("3","password3",0);

select * from emplist;

create table courses(cid varchar(10) NOT null,
clen int not null);

insert into courses values("1",5);
insert into courses values("2",6);

create table enrollment(empid varchar(10) not null,
cid varchar(10) not null,
comp int not null);

insert into enrollment values("1","1",2);
insert into enrollment values("1","2",1);
insert into enrollment values("2","2",3);

select cid from enrollment where empid="1";

select empid from enrollment where cid="2" order by comp DESC;

select count(empid) from enrollment where cid="2" group by cid;

select enrollment.cid as 'Course', enrollment.comp/courses.clen*100 as 'Progress' from courses,enrollment where enrollment.cid=courses.cid and enrollment.empid="1";



