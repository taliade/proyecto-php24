<h1>Registro de Cliente</h1>

<form action="index.php?p=cliente" method="POST">
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" required>
    </div>
    <button type="submit">Registrar</button>
</form>
