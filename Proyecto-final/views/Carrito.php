<h1>Carrito de Compras</h1>

<div class="carrito">
    <?php if (!empty($carrito)): ?>
        <?php foreach ($carrito as $item): ?>
            <div class="carrito-item">
                <p>Producto ID: <?= $item['id'] ?></p>
                <p>Cantidad: <?= $item['cantidad'] ?></p>
            </div>
        <?php endforeach; ?>
        <form action="index.php?p=carrito&accion=vaciar" method="POST">
            <button type="submit">Vaciar Carrito</button>
        </form>
    <?php else: ?>
        <p>El carrito está vacío.</p>
        <a href="index.php?p=inicio">Volver a la tienda</a>
    <?php endif; ?>
</div>
