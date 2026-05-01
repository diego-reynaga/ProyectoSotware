CREATE TABLE usuarios(
id_usuario INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombres     VARCHAR(255) NOT NULL,
cargo       VARCHAR(255) NOT NULL,
email       VARCHAR(255) NOT NULL UNIQUE KEY,
password    TEXT NOT NULL,
fyh_creacion DATETIME NULL,
fyh_actualizacion DATETIME NULL,
estado      VARCHAR(11)
)ENGINE=InnoDB;

INSERT INTO usuarios(nombres,cargo,email,password, fyh_creacion, estado) 
VALUES ('John Doe', 'admin', 'admin@admin.com', 'hashed_password', NOW(), 'activo');


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