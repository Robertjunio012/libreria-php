<?php
require_once 'conexion.php';
include 'header.php';

$mensaje = '';
$tipo_mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $asunto = trim($_POST['asunto']);
    $comentario = trim($_POST['comentario']);

    if (!empty($nombre) && !empty($correo) && !empty($asunto) && !empty($comentario)) {
        try {
            $sql = "INSERT INTO contacto (fecha, nombre, correo, asunto, comentario) 
                    VALUES (NOW(), :nombre, :correo, :asunto, :comentario)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nombre' => $nombre,
                ':correo' => $correo,
                ':asunto' => $asunto,
                ':comentario' => $comentario
            ]);
            $mensaje = "Su mensaje ha sido enviado y guardado correctamente.";
            $tipo_mensaje = "success";
        } catch (PDOException $e) {
            $mensaje = "Error al guardar el mensaje: " . $e->getMessage();
            $tipo_mensaje = "danger";
        }
    } else {
        $mensaje = "Por favor complete todos los campos obligatorios.";
        $tipo_mensaje = "danger";
    }
}
?>

<h2>Formulario de Contacto</h2>

<?php if (!empty($mensaje)): ?>
    <div class="alert alert-<?php echo $tipo_mensaje; ?>">
        <?php echo $mensaje; ?>
    </div>
<?php endif; ?>

<form action="contacto.php" method="POST" style="background: #fff; padding: 20px; border-radius: 6px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); max-width: 600px;">
    <div class="form-group">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>

    <div class="form-group">
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>
    </div>

    <div class="form-group">
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required>
    </div>

    <div class="form-group">
        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn-submit">Enviar Mensaje</button>
</form>

</div>
</body>
</html>