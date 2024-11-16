<?php
require_once('conexion.php');
class paquetesModel {

    public function guardarReserva($nombre, $apellido, $telefono, $correo, $curp, $pasajeros, $precio, $id_paquete, $estatus, $id_servicios, $id_tipo_servicio) {
        include_once('conexion.php');
        $cnn = new Conexion();
    
        try {
            // Inicia una transacción
            $cnn->beginTransaction();
    
            // Inserta en cliente
            $consultaCliente = "INSERT INTO cliente (nombre, apellido, telefono, correo, curp) 
                                VALUES (:nombre, :apellido, :telefono, :correo, :curp)";
            $stmtCliente = $cnn->prepare($consultaCliente);
            $stmtCliente->bindParam(':nombre', $nombre);
            $stmtCliente->bindParam(':apellido', $apellido);
            $stmtCliente->bindParam(':telefono', $telefono);
            $stmtCliente->bindParam(':correo', $correo);
            $stmtCliente->bindParam(':curp', $curp);
            $stmtCliente->execute();
    
            // Inserta en reserva
            $consultaReserva = "INSERT INTO reserva (fecha, pasajeros, precio, id_paquete, estatus, id_servicios, id_tipo_servicio) 
                                VALUES (NOW(), :pasajeros, :precio, :id_paquete, :estatus, :id_servicios, :id_tipo_servicio)";
            $stmtReserva = $cnn->prepare($consultaReserva);
            $stmtReserva->bindParam(':pasajeros', $pasajeros);
            $stmtReserva->bindParam(':precio', $precio);
            $stmtReserva->bindParam(':id_paquete', $id_paquete);
            $stmtReserva->bindParam(':estatus', $estatus);
            $stmtReserva->bindParam(':id_servicios', $id_servicios);
            $stmtReserva->bindParam(':id_tipo_servicio', $id_tipo_servicio);
            $stmtReserva->execute();
    
            // Confirma la transacción
            $cnn->commit();
    
            return true;
        } catch (PDOException $e) {
            // Revertir transacción en caso de error
            $cnn->rollBack();
            error_log("Error al guardar la reserva: " . $e->getMessage());
            return false;
        }
    }
    

    
   
}
?>
