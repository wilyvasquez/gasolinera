CREATE TABLE usuario
(
    id_usuario int not null AUTO_INCREMENT,
    nombre varchar(100),
    apellidos varchar(100),
    telefono varchar(100),
    usuario varchar(100),
    password varchar(100),
    permisos varchar(100),
    alta_usuario datetime,
    PRIMARY KEY (id_usuario)
);

CREATE TABLE cliente
(
    id_cliente int not null AUTO_INCREMENT,
    nombre varchar(100),
    apellidos varchar(100),
    telefono varchar(100),
    direccion text,
    rfc varchar(100),
    alta_cliente datetime,
    PRIMARY KEY (id_cliente)
);

CREATE TABLE abono_cliente
(
    id_abono int not null AUTO_INCREMENT,
    tipo varchar(100),
    costo double,
    ref_cliente int,
    alta_abono datetime,
    PRIMARY KEY (id_abono)
);

CREATE TABLE bomba
(
    id_bomba int not null AUTO_INCREMENT,
    dispensores varchar(100),
    tipo_gasolina varchar(100),
    alta_bomba datetime,
    PRIMARY KEY (id_bomba)
);

CREATE TABLE dispensador
(
    id_dispensador int not null AUTO_INCREMENT,
    dispensores varchar(50),
    tipo_gasolina varchar(100),
    lectura_inical varchar(100),
    lectura_final varchar(100),
    alta_dispensador datetime,
    ref_bomba int,
    PRIMARY KEY (id_dispensador)
);

CREATE TABLE turno
(
    id_turno int not null AUTO_INCREMENT,
    turno varchar(60),
    inicio varchar(100),
    final varchar(100),
    alta_turno datetime,
    PRIMARY KEY (id_turno)
);

CREATE TABLE gasolina
(
    id_gasolina int not null AUTO_INCREMENT,
    gasolina varchar(80),
    precio double,
    alta_gasolina datetime,
    PRIMARY KEY (id_gasolina)
);

CREATE TABLE personal
(
    id_personal int not null AUTO_INCREMENT,
    nombre varchar(100),
    apellidos varchar(100),
    telefono varchar(100),
    alta_personal datetime,
    PRIMARY KEY (id_personal)
);

CREATE TABLE proveedor
(
    id_proveedor int not null AUTO_INCREMENT,
    nombre varchar(100),
    telefono varchar(100),
    direccion text,
    colonia varchar(100),
    poblacion varchar(100),
    alta_proveedor datetime,
    rfc varchar(100),
    curp varchar(100),
    PRIMARY KEY (id_proveedor)
);

CREATE TABLE inventario
(
    id_inventario int not null AUTO_INCREMENT,
    articulo varchar(200),
    cantidad int,
    descripcion text,
    costo double,
    PRIMARY KEY (id_inventario)
);