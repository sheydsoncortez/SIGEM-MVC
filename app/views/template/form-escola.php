<!-- ================================================================================================= -->

<!-- FORMULARIO DE ESCOLA-->

<section class="forms offset-sm-1">
    <div class="container-fluid">

        <header>
            <h1 class="h3 display">Cadastro de Escolas</h1>
        </header>

        <div class="col-lg-12" >
            <div class="card ">

                <div class="col-sm-12">
                    <div class="card-header d-flex align-items-center">

                        <p id='cabecalho_blocos_form'><?php echo "{$titulo}" ?></p>

                        <span class="topright" >
                  <ul class="pagination pagination-sm" id="navegacao">

                    <?php echo "<li id='p1' class='page-item {$disabled[0]}'>";
                    echo "<a class='page-link' href='{$voltar}'>Voltar</a></li>"; ?>

                      <?php echo "<li id='p1' class='page-item {$active[0]} {$disabled[1]}'>";?>
                      <a class="page-link" href="1/">1</a></li>
                      <?php echo "<li id='p2' class='page-item {$active[1]} {$disabled[2]}'>";?>
                      <a class="page-link" href="2/">2</a></li>


                      <?php echo "<li id='p3' class='page-item {$disabled[5]}'>";
                      echo "<a class='page-link' href='javascript:formescola.submit()' >Próximo</a></li>"; ?>

                  </ul>
                </span>
                    </div>
                </div>
                <div class="card-body">

                    <!-- INÍCIO DO FORM -->

                    <form class='form-horizontal' name='formescola' id='formescola' method='POST'
                          action="<?php echo URL_BASE . "escola/salvar/".$page;?>" >


                        <?php include($paginator); //echo URL_BASE . $paginator;?>


                        <div class="line"></div>
                        <div class="form-group row">
                            <div class="col-sm-5 offset-sm-1">
                                <button type="cancel" class="btn btn-secondary">Cancel&nbsp&nbsp</button>
                                <button type='submit' class='btn btn-primary'>Próximo</button>

                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
</section>