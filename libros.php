<?php
require_once 'conexion.php';
include 'header.php';

$query = "SELECT t.id_titulo, t.titulo, t.tipo, t.precio, p.nombre_pub 
          FROM titulos t 
          LEFT JOIN publicadores p ON t.id_pub = p.id_pub";
$stmt = $pdo->prepare($query);
$stmt->execute();
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Libros Disponibles</h2>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Género</th>
            <th>Editorial</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($libros) > 0): ?>
            <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?php echo htmlspecialchars($libro['id_titulo']); ?></td>
                    <td><?php echo htmlspecialchars($libro['titulo']); ?></td>
                    <td><?php echo htmlspecialchars($libro['tipo']); ?></td>
                    <td><?php echo htmlspecialchars($libro['nombre_pub'] ?? 'N/A'); ?></td>
                    <td><?php echo $libro['precio'] ? '$' . number_format($libro['precio'], 2) : 'No disponible'; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No hay libros registrados.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

</div>
</body>
</html>