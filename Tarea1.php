<html>
<head>
    <title>Tarea1</title>
</head>
<body>
    <h1>Calculadora de sueldo neto de un vendedor</h1>
    <form method="post">
        Importe total vendido del mes: <input type="number" name="importe" required><br><br>
        Cantidad de hijos en edad escolar: <input type="number" name="hijos" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $venta_total = $_POST["importe"];
        $hijos = $_POST["hijos"];
        $sueldo_basico = 600;

        $bonificacion = $hijos * 50;
        $comision =  $venta_total * 0.075 + $bonificacion;
        $sueldo_bruto = $sueldo_basico + $comision;
        $descuento = $sueldo_bruto * 0.11;
        $sueldo_neto = $sueldo_bruto - $descuento;

        echo "INFORMACION: ". "<br> <br/>";
        echo "Comisión: S/. " . number_format($comision, 2) . "<br>";
        echo "Bonificación: S/. " . number_format($bonificacion, 2) . "<br>";
        echo "Sueldo bruto: S/. " . number_format($sueldo_bruto, 2) . "<br>";
        echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
        echo "Sueldo neto: S/. " . number_format($sueldo_neto, 2) . "<br>";
    }
    ?>
</body>
</html>