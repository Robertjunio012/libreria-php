<?php
require_once 'conexion.php';
include 'header.php';

$stmt = $pdo->prepare("SELECT id_autor, nombre, apellido, telefono, ciudad, estado, pais FROM autores");
$stmt->execute();
$autores = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Listado de Autores</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Completo</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>País</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($autores) > 0): ?>
            <?php foreach ($autores as $autor): ?>
                <tr>
                    <td><?php echo htmlspecialchars($autor['id_autor']); ?></td>
                    <td><?php echo htmlspecialchars(trim($autor['nombre']) . ' ' . trim($autor['apellido'])); ?></td>
                    <td><?php echo htmlspecialchars($autor['telefono']); ?></td>
                    <td><?php echo htmlspecialchars($autor['ciudad']); ?></td>
                    <td><?php echo htmlspecialchars($autor['estado']); ?></td>
                    <td><?php echo htmlspecialchars($autor['pais']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No hay autores registrados.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</div>
</body>
</html>