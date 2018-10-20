<!-- ================================================================================================= -->

<!-- FORMULARIO DE CADASTRO DE FUNCIONÁRIOS -->
<section class="forms offset-sm-1">
    <div class="container-fluid">

        <header>
            <h1 class="h3 display">HOME</h1>
        </header>

        <div class="col-lg-12" >
            <div class="card ">
                <div class="col-sm-12">
                    <div class="card-header d-flex align-items-center">

                       <span class="topleft" >
                           <img src="<?php echo URL_BASE . "assets/img/entidades/24032239.png"; ?>"
                                alt="person" class="img-fluid rounded-circle" height="100" width="100">
                       </span>
                       <p id='cabecalho_blocos_form'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                         <?php echo strtoupper("E.M. Professor Mateus Viana") ?></p>

                    </div>
                </div>
                <div class="card-body">

            <!-- INÍCIO DO FORM -->

                    <form class='form-horizontal' id='formfuncionario' method='POST'
                          action="<?php echo URL_BASE . "funcionario/salvar/".$page;?>" >

                        <br/><p id="cabecalho_blocos_form"></p>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <?php isset($msn) ? print("<p>" . $msn . "</p>") : "";?>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>