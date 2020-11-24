//trigger para eliminar, tipo de evente delet//
begin
if (TG_OP = 'INSERT') then insert into auditoria (usuario_id,operacion,tabla_nombre,fecha_de_operacion,dato_nuevo,ip)
values(new.usuario_id,'insertado',TG_TABLE_NAME,CURRENT_TIMESTAMP,(SELECT  hstore(new)),NEW.ip);
elsif (TG_OP = 'UPDATE') AND NEW.deleted_at IS NULL then insert into auditoria (usuario_id,operacion,tabla_nombre,fecha_de_operacion,dato_anterior,dato_nuevo,ip)
values(new.usuario_id,'modificado',TG_TABLE_NAME,CURRENT_TIMESTAMP,(SELECT hstore(old)),(SELECT  hstore(new)),new.ip);
elsif (TG_OP = 'UPDATE')then insert into auditoria (usuario_id,operacion,tabla_nombre,fecha_de_operacion,dato_anterior,dato_nuevo,ip)
values(new.usuario_id,'borrado',TG_TABLE_NAME,CURRENT_TIMESTAMP,(SELECT hstore(old)),(SELECT  hstore(new)),NEW.ip);end if;
RETURN NEW;
end
