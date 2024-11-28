<h1>Bienvenido a nuestra tienda online</h1>

<div class="productos">
    <?php if (!empty($productos)): ?>
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <h3><?= htmlspecialchars($producto['nombre']) ?></h3>
                <p>Precio: <?= number_format($producto['precio'], 2) ?> USD</p>
                <p><?= htmlspecialchars($producto['descripcion']) ?></p>
                <form action="index.php?p=carrito&accion=agregar" method="POST">
                    <input type="hidden" name="id_producto" value="<?= $producto['id'] ?>">
                    <button type="submit">Agregar al Carrito</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay productos disponibles.</p>
    <?php endif; ?>
</div>
