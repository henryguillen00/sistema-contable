    <label for="Nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}" id=""> <br><br>
    <label for="Precio de compra">Precio de compra:</label>
    <input type="number" name="precio_compra" value="{{ $producto->precio_compra }}" id=""> <br><br>
    <label for="Precio de venta">Precio de venta:</label>
    <input type="number" name="precio_venta" value="{{ $producto->precio_venta }}" id=""> <br><br>
    <label for="Cantidad">Cantidad:</label>
    <input type="number" name="cantidad" value="{{ $producto->cantidad }}" id=""> <br><br>
    <label for="Foto">Foto:</label>
    <input type="file" name="foto" value="{{ $producto->foto }}" id=""><br><br>
    <input type="submit" value="Guardar datos">