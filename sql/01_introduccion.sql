
#Iniciar linea de comandos de MySQL
cd /Applications/MAMP/Library/bin

./mysql -u root -p


# Ver la version de Mysql
select version();

# Ver las bases de datos
show databases;

# Crear base de datos
create database nombrebasededatos;

# Usar una base de datos
use nombrebasededatos;

# Conectarme a una base de datos
connect nombrebasededatos;

# Ver las tablas
show tables;

# Crear tabla
create table nombretabla (
    -> id int auto_increment,
    -> documento bigint not null,
    -> nombres varchar(32) not null,
    -> telefono bigint null,
    -> direccion varchar(32) null,
    -> primary key(id));

# Mostrar estructura de la tabla
describe nombretabla;


# Insertar datos en la tabla
insert into nombretabla values (
    -> default, 75000001, 'Jeremias Springfield',
    -> 8800011, 'Calle 100 con 23');


# Seleccionar todos los registro de una tabla
select * from nombretabla;


