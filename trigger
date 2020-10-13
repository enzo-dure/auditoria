//trigger para eliminar, tipo de evente delet//
begin
insert into bd_auditoria (usuario_id,operacion,tabla_nombre,fecha_de_operacion,ip,dato_anterior,dato_nuevo)
values(1,'eliminado','c',CURRENT_TIMESTAMP,'h',(SELECT hstore(old)),(SELECT  hstore(new)));
RETURN NEW;
end

//trigger para insertar, tipo de evente insert//
begin
insert into bd_auditoria (usuario_id,operacion,tabla_nombre,fecha_de_operacion,ip,dato_anterior,dato_nuevo)
values(1,'insertado','c',CURRENT_TIMESTAMP,'h',(SELECT hstore(old)),(SELECT  hstore(new)));
RETURN NEW;
end

//trigger para editar, tipo de evente update//
begin
insert into bd_auditoria (usuario_id,operacion,tabla_nombre,fecha_de_operacion,ip,dato_anterior,dato_nuevo)
values(1,'modificado','c',CURRENT_TIMESTAMP,'h',(SELECT hstore(old)),(SELECT  hstore(new)));
RETURN NEW;
end
