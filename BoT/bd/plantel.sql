create table bot.plantel(id_plantel int auto_increment not null, 
nombrep varchar(55) not null, emailp varchar(255) not null, 
telefonop varchar(255) not null, id_municipio int not null, 
calle varchar(55) not null, numero varchar(55) not null, 
cp varchar(55) not null, longitud varchar (255) not null, 
latitud varchar(255) not null, primary key (id_plantel)) ENGINE = innoDB;