<?php
        if (isset($_SESSION['funcionario']))
        $d = $_SESSION['funcionario']->documentos;


        include('app/views/template/documentos/ctps.php');

        include('app/views/template/documentos/rg.php');

        include('app/views/template/documentos/tituloeleitoral.php');

        include('app/views/template/documentos/reservista.php');

        unset($d);
?>