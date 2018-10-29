<?php
        if (isset($_SESSION['funcionario'])){

        	$d = $_SESSION['funcionario']->documentos;

        	$d->cpf = $_SESSION['funcionario']->cpf;
            $d->pispasep = $_SESSION['funcionario']->pispasep;

    		if($_SESSION['funcionario']->sexo == 'M'){
    			$required = "required";
    		}else{
    			$required = "";
    		}    		    		
    	}

        //echo"<pre>";
        //print_r($d);

        include('app/views/template/documentos/ctps.php');

        include('app/views/template/documentos/rg.php');

        include('app/views/template/documentos/tituloeleitoral.php');

        include('app/views/template/documentos/reservista.php');

        unset($d);
?>