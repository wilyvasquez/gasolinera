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

CREATE TABLE bomba
(
    id_bomba int not null AUTO_INCREMENT,
    dispensores varchar(100),
    tipo_gasolina varchar(100),
    alta_bomba datetime,
    PRIMARY KEY (id_bomba)
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