<?php
include 'controller/controllerdias.php';
?>

<html>
<head>
    <title>Mensagem Dia</tittle>
</head>
<body>
    <?php if($estrategiaDia){ ?>
        <?php $estrategiaDia->exibirMensagem(); ?>
    <?php } else { ?>
        <?php echo 'Dia da Semana inválido.'; ?>
    <?php } ?>
</body>
</html>

