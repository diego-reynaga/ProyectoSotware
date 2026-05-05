CREATE DATABASE IF NOT EXISTS gestionestudiante;
USE gestionestudiante;



CREATE TABLE roles(
id_rol INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombres_rol    VARCHAR(255) NOT NULL UNIQUE KEY,

fyh_creacion DATETIME NULL,
fyh_actualizacion DATETIME NULL,
estado      VARCHAR(11)
)ENGINE=InnoDB;

insert into roles(nombres_rol, fyh_creacion, estado) values ('Administrador', NOW(), 'activo');
insert into roles(nombres_rol, fyh_creacion, estado) values ('Director Academico', NOW(), 'activo');
insert into roles(nombres_rol, fyh_creacion, estado) values ('Secretaria', NOW(), 'activo');

CREATE TABLE usuarios(
id_usuario INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombres     VARCHAR(255) NOT NULL,
rol_id       INT (11) NOT NULL,
email       VARCHAR(255) NOT NULL UNIQUE KEY,
password    TEXT NOT NULL,
fyh_creacion DATETIME NULL,
fyh_actualizacion DATETIME NULL,
estado      VARCHAR(11),
FOREIGN KEY (rol_id) REFERENCES roles(id_rol) ON DELETE NO ACTION ON UPDATE CASCADE
)ENGINE=InnoDB;

INSERT INTO usuarios(nombres,rol_id,email,password, fyh_creacion, estado) 
VALUES ('John Doe', '1', 'admin@admin.com', 'hashed_password', NOW(), 'activo');


