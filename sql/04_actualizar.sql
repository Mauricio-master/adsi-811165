
# Modificar un campo de una tabla
update nombretabla
set nombrecampo = 'valor'
where nombrecampounico = valorunico;

# Modicar mas de un campo
update nombretabla
set nombrecampo1 = 'valor1', nombrecampo2 = 'valor2' 
where nombrecampounico = valorunico;

update clientes
set direccion = 'Av Siempre Viva'
where id > 1
and id < 6;