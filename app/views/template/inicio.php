<!-- ================================================================================================= -->

<!-- FORMULARIO DE CADASTRO DE FUNCIONÁRIOS -->
<section class="forms offset-sm-1">
    <div class="container-fluid">

        <header>

        </header>


        <div class="col-lg-12" >
            <div class="card ">

                <div class="col-sm-12">
                    <div class="card-header d-flex align-items-center">

                       <span class="topleft" >
                           <img src="<?php echo URL_BASE . "assets/img/entidades/24032239.png"; ?>"
                                alt="person" class="img-fluid rounded-circle" height="150" width="150">
                       </span>
                       <h1 id='cabecalho_blocos_form'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                         <?php echo strtoupper("E.M. Professor Mateus Viana") ?></h1>

                    </div>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($status) && ($status == true)){
                        if (isset($msn)){

                            $alerta = "<div class='pull-alert'>
                                                <div class='alert alert-success pull-right' >
                                                    <button type='button' class='btn btn-default btn-circle btn-xl-alert btn-lateral btn-float-alert'><i class='fa fa-check-circle'></i></button>
                                                    <hr class='hr-alert'>
                                                    <strong>{$msn}</strong>
                                                </div>
                                              </div>";

                            echo $alerta;
                            unset($msn);
                            unset($status);
                        }
                    }else if(isset($status) && ($status == false)){
                        $alerta = "<div class='pull-alert'>
                                                <div class='alert alert-error pull-right' >
                                                    <button type='button' class='btn btn-default btn-circle btn-xl-alert btn-lateral btn-float-alert'><i class='fa fa-times-circle'></i></button>
                                                    <hr class='hr-alert'>
                                                    <strong>{$msn}</strong>
                                                </div>
                                              </div>";

                        echo $alerta;
                        unset($msn);
                        unset($status);
                    }
                    ;?>
            <!-- INÍCIO DO FORM -->

                    <form class='form-horizontal' id='formfuncionario' method='POST'
                          action="<?php echo URL_BASE . "funcionario/salvar/".$page;?>" >

                        <br/><p id="cabecalho_blocos_form"></p>
                        <div class="form-group row">
                            <div class="col-sm-12">

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

