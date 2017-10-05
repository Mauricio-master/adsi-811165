
# Insertar forma corta
insert into clientes 
values( default, 75000006,
'Bob Patiño',  8800066, 'Cra 32-33');


# Insertar forma larga
insert into clientes 
(id, documento, nombres, telefono, direccion) 
values 
(default, 75000008, 'Apu Nahasa', 8800088, 'Calle 120-80');

# Backup (Insertar una tabla en nueva tabla)

insert into copia_tabla
select * from tabla;


# Backup (Insertar una tabla en nueva tabla en otra base de datos)

insert into copia_basedatos.copia_tabla
select * from basedatos.tabla;