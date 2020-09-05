drop database if exists gshdb;
create database gshdb;
use gshdb;

create table account (
    uid integer auto_increment primary key,
    fullname varchar(100),
    email varchar(100),
    pass varchar(100), 
    points integer
);

insert into account (fullname, email, pass, points) values ('root', 'root@gmail.com', 'root', '0');

create table points (
    category varchar(100),
    opt varchar(100),
    points integer,
    primary key (category, opt)
);

insert into points (category, opt, points) values ("Investment", 'A', 4);
insert into points (category, opt, points) values ("Investment", 'B', 3);
insert into points (category, opt, points) values ("Investment", 'C', 2);
insert into points (category, opt, points) values ("Investment", 'D', 1);

insert into points (category, opt, points) values ("Achievement", 'A', 1);
insert into points (category, opt, points) values ("Achievement", 'B', 2);
insert into points (category, opt, points) values ("Achievement", 'C', 3);
insert into points (category, opt, points) values ("Achievement", 'D', 4);

insert into points (category, opt, points) values ("Capital", 'A', 1);
insert into points (category, opt, points) values ("Capital", 'B', 2);
insert into points (category, opt, points) values ("Capital", 'C', 3);
insert into points (category, opt, points) values ("Capital", 'D', 4);