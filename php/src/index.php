<?php 
    require $_SERVER["DOCUMENT_ROOT"] . '/../vendor/autoload.php';
    
    use MML\Models\Cotxe;
    use Monolog\Handler\RotatingFileHandler;
    use Monolog\Logger;

    $cotxe = new Cotxe('Renault', 'clio');

    $log = new Monolog\Logger('MiLogger');
    $log->pushHandler( new RotatingFileHandler($_SERVER['DOCUMENT_ROOT'] . '/../logs/milog.log',0, Logger::DEBUG));

    // $log->debug("TEST DEBUG");
    // $log->info("TEST INFO");
    // $log->warning("TEST WARNING");
    $log->error("TEST ERROR");
    // $log->critical("TEST CRITICAL");
    // $log->alert("TEST ALERT");
    // $log->emergency("TEST EMERGENCY");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $cotxe->mostraInformacio();
        echo $cotxe->setModel('clio2');
        echo $cotxe->mostraInformacio();
    ?>
</body>
</html>