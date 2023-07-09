DROP DATABASE IF EXISTS ACSS;
CREATE DATABASE ACSS;
USE ACSS;

CREATE TABLE Habilitado(
ID_habilitado bigint(12) not null primary key,
Nombre varchar(10) not null);
 

CREATE TABLE Perfil (
ID_perfil bigint(12) NOT NULL AUTO_INCREMENT,
Cargo varchar(15) NOT NULL,
PRIMARY KEY (ID_perfil));



CREATE TABLE Usuario (
ID_usuario bigint(12) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
Nombres varchar(30) NOT NULL,
Apellidos varchar(30) NOT NULL,
Telefono bigint(15) NOT NULL,
Tipoidentificacion varchar(15) NOT NULL,
Email varchar(30) NOT NULL,
Contrasena varchar(32) NOT NULL,
fk_ID_habilitado bigint(12) NOT NULL,
fk_ID_perfil bigint(12) NOT NULL,
foreign key (fk_ID_habilitado) references Habilitado (ID_habilitado),
foreign key (fk_ID_perfil) references Perfil (ID_perfil));




CREATE TABLE Cita(
ID_cita bigint (12) not null primary key auto_increment,
Ciudad varchar(12) not null,
Direccion varchar (25) not null,
FechaVisita datetime(6) null,
HoraVisita time(6) null,
fk_ID_perfil bigint (12),
fk_ID_usuario bigint (12),
fk_ID_habilitado bigint(12),
foreign key(fk_ID_perfil) references Perfil (ID_perfil),
foreign key(fk_ID_usuario) references Usuario (ID_usuario),
foreign key(fk_ID_habilitado) references Habilitado (ID_habilitado));





CREATE TABLE Servicio(
ID_servicio bigint(12) not null primary key,
Descripcion text null,
Tipo varchar(30) not null,
Estado varchar(10) not null,
fk_ID_perfil bigint(12),
fk_ID_cita bigint(12),
fk_ID_habilitado bigint(12),
Foreign key(fk_ID_perfil) references perfil (ID_perfil),
Foreign key(fk_ID_cita) references cita (ID_cita),
foreign key(fk_ID_habilitado) references Habilitado (ID_habilitado));


CREATE TABLE Elemento(
COD_elemento bigint (12) not null primary key auto_increment,
Nombre varchar (12),
Cantidad int(4),
Precio Float(12) not null,
fk_ID_perfil bigint(10),
fk_ID_habilitado bigint(12),
foreign key (fk_ID_perfil) references Perfil (ID_perfil),
foreign key (fk_ID_habilitado) references Habilitado (ID_habilitado));

CREATE TABLE Inventario(
ID_inventario bigint (12) not null primary key,
Movimiento varchar (12) not null,
CantidadExistente int (4) not null,d varchar(20) not null,
CantidadSalida int (4) not null,
CantidadEntrada int (4) not null,
Saldo Float (12) not null,
ValorEntrada float(12) not null,
ValorSalida float(12),
fk_ID_perfil bigint(10),
fk_COD_elemento bigint (12) not null,
fk_ID_habilitado bigint(12),
foreign key (fk_ID_perfil) references Perfil (ID_perfil),
foreign key (fk_COD_elemento) references Elemento (COD_elemento),
foreign key (fk_ID_habilitado) references Habilitado (ID_habilitado));


CREATE TABLE Categoria(
ID_Categoria bigint(12) not null primary key, 
NombreCategoria varchar(15) not null, 
fk_ID_perfil bigint(12) , 
fk_COD_elemento bigint(12) ,
fk_ID_habilitado bigint(12),
foreign key(fk_ID_perfil) references Perfil (ID_perfil), 
foreign key(fk_COD_elemento) references Elemento (COD_elemento),
foreign key(fk_ID_habilitado) references Habilitado (ID_habilitado));


CREATE TABLE Entrada(
ID_Entrada bigint(12) not null primary key, 
FechaEntrada datetime(6) null, 
fk_ID_perfil bigint(10) not null, 
fk_COD_elemento bigint(10) not null, 
foreign key(fk_ID_perfil) references Perfil (ID_perfil), 
foreign key(fk_COD_elemento) references Elemento (COD_elemento));


CREATE TABLE Salida(
ID_Salida bigint(12) not null primary key, 
FechaSalida datetime(6) null, 
fk_ID_perfil bigint(10) not null, 
fk_COD_elemento bigint(10) not null,
foreign key(fk_ID_perfil) references Perfil (ID_perfil), 
foreign key(fk_COD_elemento) references Elemento (COD_elemento));
