<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 1 - Formularios</title>
    <link rel="stylesheet" href="BarraNav.css" />
    <link rel="stylesheet" href="Cuerpo.css" />
    <link rel="stylesheet" href="EstPractica2.1.css">
</head>
<body>
    <div align="center">
        <nav>
            <a href="practica2.1.html" id="a4">Formulario</a>
            <span></span>
        </nav>
    </div>
    <?php
        echo "Datos Personales <br>";
        echo "Nombre: {$_POST['Nombre']} {$_POST['ApePa']} {$_POST['ApeMa']}<br>";

        echo "Nombre de usuario: {$_POST['NomUsu']}<br>";

        echo "Fecha de Nacimiento: {$_POST['FeNa']}<br>";

        echo "<br>Datos de facturación<br>";

        echo "País: {$_POST['Pais']}<br>Ciudad: {$_POST['Cd']}<br>";

        echo "Calle : {$_POST['Calle']}<br>Num. Ext: {$_POST['NumCasa']}<br>";

        echo "Colonia: {$_POST['Col']}<br> C.P: {$_POST['CP']}<br>";

        echo "RFC: {$_POST['RFC']}<br>E-Mail: {$_POST['Ema']}<br>";
    ?>
</body>