<html>
<head>
    <title>Tarea2</title>
</head>
<body>
    <h1>Rebaja de Gaseosas</h1>
    <form method="post">
        Precio actual de la gaseosa de 3 litros: S/. <input type="number" name="precio" required><br><br>
        Cantidad de gaseosas adquiridas: <input type="number" name="cantidad" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];

        $nuevo_precio = $precio * 0.95;
        $importe_compra = $nuevo_precio * $cantidad;
        $descuento = $importe_compra * 0.07;
        $importe_pagar = $importe_compra - $descuento;
        $obsequio = $cantidad * 2;

        echo "INFORMACION: ". "<br> <br/>";
        echo "Nuevo precio de la gaseosa de 3 litros: S/. " . number_format($nuevo_precio, 2) . "<br>";
        echo "Importe de la compra: S/. " . number_format($importe_compra, 2) . "<br>";
        echo "Importe del descuento: S/. " . number_format($descuento, 2) . "<br>";
        echo "Importe a pagar: S/. " . number_format($importe_pagar, 2) . "<br>";
        echo "Obsequio: " . $obsequio . " caramelos<br>";
    }
    ?>
</body>
</html>