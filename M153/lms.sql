drop database if exists lms;
create database lms;

use lms;

create table person (
id_person int unsigned auto_increment not null,
name varchar(45),
vorname varchar(45),
adressse varchar(90),
geburtstage date,
email varchar(60),
telefon varchar(35),
geschlecht enum("m","w"),
PRIMARY KEY (id_person)
);

create table klasse (
id_klasse int unsigned auto_increment not null,
name varchar(35),
primary key (id_klasse)
);

create table schueler (
id_schueler int unsigned not null,
id_klasse int unsigned not null ,
primary key (id_schueler),
foreign key (id_schueler) references person(id_person),
foreign key (id_klasse) references klasse(id_klasse)
);

create table angestellter (
id_angestellter int unsigned not null,
lohn int,
id_chef int unsigned not null,
primary key (id_angestellter),
foreign key (id_angestellter) references person(id_person),
foreign key (id_chef) references angestellter(id_angestellter)
);

create table modul (
id_modul int unsigned auto_increment not null,
modulnummer varchar(20),
beschreibung text,
primary key (id_modul)
);

create table dozent (
id_dozent int unsigned not null,
stundensatz int,
primary key (id_dozent),
foreign key (id_dozent) references person(id_person)
);

create table modulbelegung (
id_belegung int unsigned auto_increment not null,
id_klasse int unsigned not null,
id_dozent int unsigned not null,
id_schueler int unsigned not null,
primary key (id_belegung),
foreign key (id_klasse) references klasse(id_klasse),
foreign key (id_dozent) references dozent(id_dozent),
foreign key (id_schueler) references schueler(id_schueler)
);

