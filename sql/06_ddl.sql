
# Crear una tabla
create table nombretabla (
	campo1 tipo(longitud) restriccion,
	campo2 tipo restriccion,
	#nombre varchar(32) not null
)

# Restricciones (NOT NULL)
create table nombretabla (
	nombre varchar(32) not null
);

# Restricciones (UNIQUE)
create table nombretabla (
	correo varchar(32) unique
);

# Alterar tabla (unique)
alter table nombretabla add unique(campo);

# Restricciones (PRIMARY KEY)
create table nombretabla (
	id int auto_increment,
	primary key(id)
);

# Alterar la tabla (llave primaria)
alter table nombretabla add primary key(id);

# Alterar la tabla (Eliminar llave primaria)
alter table nombretabla drop primary key;

# Restricciones (FOREIGN KEY)
create table nombretabla (
	tablaensingular_id int,
	foreign key(tablaensingular_id) 
	references tabla.campollaveprimaria
);

# Alterar la tabla (llave foranea)
alter table nombretabla 
add foreign key(tablaensingular_id) 
references tabla.campollaveprimaria;

# Alterar la tabla (Eliminar llave foranea)
alter table nombretabla drop foreign key(tablaensingular_id);


# Restricciones (CHECK)
create table nombretabla (
    edad int,
    check (edad>=18)
);

# Alterar la tabla (check)
alter table nombretabla add check (edad>=18);

# Restricciones (DEFAULT)
create table nombretabla (
	ciudad varchar(32) default 'Manizales'
);

# Alterar la tabla (default)
alter table nombretabla 
alter ciudad set default 'Manizales';

# Crear un Indice
create index nombreindice on nombretabla(campo); 

# Eliminar un Indice
drop index nombretabla.nombreindice;


# Eliminar Base de Datos
drop database nombrebasedatos;

# Eliminar Tabla
drop table nombretabla;

# Vaciar todos los datos de una tabla
truncate table nombretabla;

# Alterar un tabla (campo(columna))
alter table nombretabla add nombrecolumna tipodato after otracolumna;

# Eliminar una columna de la tabla
alter table nombretabla drop column nombrecolumna;

# Cambiar de Nombre una Columna
alter table nombretabla rename nombrenuevo;


# Auto Incremento
create table nombretabla (
	id int auto_increment
);

# Definir donde inicia el incremento
alter table nombretabla auto_increment = 1000;


# Crear una vista
create view clientescompra
as select c.id, c.nombres as cliente, a.nombre as articulo,
a.precio
from clientes as c
join compras as cm
on cm.cliente_id = c.id
join articulos as a
on cm.articulo_id = a.id;

# Consultar una vista
select * from nombrevista;

# Eliminar la vista
drop view nombrevista;



# Consulta agresiva

select c.nombres as cliente,
count(a.id) as totalarticulos, 
sum(a.precio) as totalcompra
from clientes as c
join compras as cm
on cm.cliente_id = c.id
join articulos as a
on cm.articulo_id = a.id
and c.id = 2;





