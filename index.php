<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $moneda = $_POST['moneda'];
    $cantidad = $_POST['cantidad'];
    if ($moneda == 'usd') {
        $resultado = $cantidad * 1.21;
        $moneda_resultado = 'dólares';
    } elseif ($moneda == 'gbp') {
        $resultado = $cantidad * 0.87;
        $moneda_resultado = 'libras';
    }
} else {
    $cantidad = 0;
    $moneda = 'eur';
    $resultado = '';
    $moneda_resultado = 'euros';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Conversor de euros</title>
        <link rel="stylesheet" type="text/css" href="./estilos.css">
    </head>

    <body>
        <header>
                <img src="./img/Logo-CEAC-78.png" alt="banner">
        </header>
        <h1>Conversor de euros</h1>
        <div>
        <form method="post">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" value="<?php echo $cantidad; ?>">
            <br><br>
            <label for="moneda">Moneda:</label>
            <select name="moneda" id="moneda">
                <option value="usd" <?php if ($moneda == 'usd') echo 'selected'; ?>>Dólares</option>
                <option value="gbp" <?php if ($moneda == 'gbp') echo 'selected'; ?>>Libras</option>
            </select>
            <br><br>
            <input type="submit" value="Convertir">
            <?php if ($resultado): ?>
            <p><?php echo $cantidad; ?> euros son <?php echo $resultado; ?> <?php echo $moneda_resultado; ?>.</p>
        <?php endif; ?>
        </form>
        

        
        </div>
        <br><br>
    </body>

    <footer>
        <p></p><p>Alumno:</p><p>FRANCO ARIEL CANAVESE </p>
        <p></p><p>- DAW 2023 -<p></p><p></p>
        <p> Profesor:</p><p>RUBEN BELLIDO BORREGA</p>
    </footer>
</html>
