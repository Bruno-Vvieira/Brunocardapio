<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    
</style>
<body>
    <section>
        <p1 style="font-size: 30px; font-family:courier,arial,helvetica; margin-top: 1.5%;"> <b>Cardápio Semanal</b></p>
        <p style=" font-size: 20px; margin-left: 20% ;"><b>29/01 a 02/02</b></p>
    </section>

    <main class="org1">
        <?php
            $semana = array('Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta');
            $acom = 'Arroz e Feijão';
            $esc = array('Acompanhamento:', 'Prato Principal:', 'Salada:', 'Sobremesa:');
            $prato = array('Frango ao molho', 'Carne ao Molho Madeira', 'Lasanha', 'Carne moida', 'Strogonoff de Frango');
            $salada = array('Salada de fruta', 'Tomada e Pepino', 'Alface', 'Salada de Beterraba', 'Alface e Tomate');
            $sobremesa = array('Pudim de chocolate', 'Tiramisu', 'Creme Brulée', 'Gelatina Colorida', 'Brigadeiro');
        ?>

        <?php for ($dia = 0; $dia < count($semana); $dia++) : ?>
            <div class="cx">
                <p><b  style=" margin-left: 20%; font-size:20px ; ">
            <div style="    margin-left: 10%; "><?php  echo $semana[$dia] ?></b></p>
                <div  class="pratos<?= $dia  ?>"></div>
                    <?php for ($i = 0; $i < count($esc); $i++) : ?>
                        <div style='margin-top: 5%; margin-left: -7%'>
                            <p2 class="cmd"><b><?= $esc[$i] ?></b></p2>
                            <p2 class="cmd"><?= $i == 0 ? $acom : ($i == 1 ? $prato[$dia] : ($i == 2 ? $salada[$dia] : $sobremesa[$dia])); ?></p2>
                        </div>   
                    <?php endfor; ?>
                </div>
            </div>   
            
        <?php endfor; ?>
    </main>
    <footer>
        <?php
        $empresa = "nutriNilMar";
        echo $empresa
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
