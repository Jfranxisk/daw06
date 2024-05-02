<?php

/**
 * Archivo Eliminar.php para gestionar el purgado de prodcutos que se desean eliminar de la base de datos.
 * 
 * @author jfranxisk
 * @version 1.0
 */

require_once('Connexio.php');

/**
 * Class Eliminar, elimina un producto de 
 * la base de datos.
 * 
 * @params none
 * @return void
 */

class Eliminar {
    /**
    * Método para eliminar un producto de la base de datos
    * 
    * @params $id
    * @return void
    */
    public function eliminar($id) {
        // Verifica si el ID del producto es válido
        if (!isset($id) || !is_numeric($id)) {
            echo '<p>ID de producto no válido.</p>';
            return;
        }

        // Conexión con DB
        $conexionObj = new Connexio();
        $conexion = $conexionObj->obtenirConnexio();

        // Escapa el ID para prevenir SQL injection
        $id = $conexion->real_escape_string($id);

        // Comando de consulta DELETE para la DB
        $consulta = "DELETE FROM productes WHERE id = '$id'";

        // Ejecuta la consulta y redirige a la página principal si tiene éxito
        if ($conexion->query($consulta) === TRUE) {
            header('Location: Principal.php');
            exit();
        } else {
            // Muestra un mensaje de error si la consulta falla
            echo '<p>Error al eliminar el producto: ' . $conexion->error . '</p>';
        }

        // Desconexión con DB
        $conexion->close();
    }
}

// Obtiene el ID del producto de la variable GET
$idProducto = isset($_GET['id']) ? $_GET['id'] : null;

// Instancia de la clase Eliminar y llama al método eliminar
$eliminarProducto = new Eliminar();
$eliminarProducto->eliminar($idProducto);

?>