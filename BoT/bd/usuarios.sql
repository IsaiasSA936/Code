create table bot.usuario(id_usuario int auto_increment not null, 
nombre varchar(55) not null, apellido_p varchar(55) not null, apellido_m varchar(55) not null, 
f_nacimiento date not null, nickname varchar(55) not null, correo varchar(55) not null, 
contrasena varchar(255) not null, imguser varchar(255) not null, telefono varchar(55) not null, 
online int not null, id_tusuario int not null, primary key (id_usuario)) ENGINE = innoDB;