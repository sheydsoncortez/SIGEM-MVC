<?php
        if (isset($_SESSION['aluno'])){

        	$d = $_SESSION['aluno']->documentosAluno;

    		if($_SESSION['aluno']->sexo == 'M'){
    			$required = "required";
    		}else{
    			$required = "";
    		}    		    		
    	}

		include('app/views/template/documentos/rg.php');
		
		include('app/views/template/documentos/registronascimento.php');

        include('app/views/template/documentos/tituloeleitoral.php');

        include('app/views/template/documentos/reservista.php');

        unset($d);
?>