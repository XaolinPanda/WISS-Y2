drop database if exists person151;
create database person151;

use person151;

create table person (
id_person INT UNSIGNED NOT NULL,
name varchar(30) NOT NULL,
vorname varchar(30) NOT NULL,
PRIMARY KEY (id_person)
);

create table schueler (
id_schueler int unsigned not null,
vormund varchar(50) not null,
primary key (id_schueler),
foreign key (id_schueler) references person(id_person)
);

insert into person values (11, "Motzer", "Jac");
insert into schueler values (11, "Cedric Wieser");

insert into person values (12, "Egger", "Kevin");
insert into schueler values (12, "Cedric Wieser");

insert into person values (13, "von Fluee", "Patrick");
insert into schueler values (13, "Cedric Wieser");

insert into person values (14, "Marazza", "Mario");
insert into schueler values (14, "Cedric Wieser");

insert into person values (15, "Stamm", "Rafael");
insert into schueler values (15, "Cedric Wieser");

insert into person values (16, "Sijlevic", "Robert");
insert into schueler values (16, "Cedric Wieser");

insert into person values (17, "Gasmi", "Houssem");
insert into schueler values (17, "Cedric Wieser");

create view v_schueler as
select id_person, name, vorname, vormund from person join schueler on person.id_person = schueler.id_schueler;

select * from v_schueler;