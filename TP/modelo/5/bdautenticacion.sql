CREATE DATABASE bdautenticacion;
USE bdautenticacion;
CREATE TABLE usuarios(
    id bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usnombre varchar(50) NOT NULL,
    uspass varchar(255) NOT NULL,
    usmail varchar(50) NOT NULL,
    usdeshabilitado timestamp NULL
);
CREATE TABLE roles(
    id bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    rodescripcion varchar(50) NOT NULL
);
CREATE TABLE usuariorol(
    id bigint(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idusuario bigint(20) NOT NULL,
    idrol bigint(20) NOT NULL,
    FOREIGN KEY (idusuario) REFERENCES usuarios (id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (idrol) REFERENCES roles (id) ON UPDATE CASCADE ON DELETE RESTRICT
);