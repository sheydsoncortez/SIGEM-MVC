<?php

require 'app/core/Core.php';
require 'vendor/autoload.php';
require 'config/config.php';

$core = new Core();
$core->run();

/*
echo "Contoller: " .$core->getController();
echo "<br>Método : " .$core->getMetodo();
$parametros = $core->getParametros();
foreach ($parametros as $param)
    echo "<br>Parâmetro : " .$param;*/