<!-- ================================================================================================= -->

<!-- FORMULARIO DE CADASTRO DE FUNCIONÁRIOS -->
<section class="forms offset-sm-1">
  <div class="container-fluid">

      <header> 
        <h1 class="h3 display">Cadastro de Funcionários</h1>
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
                      <?php echo "<li id='p3' class='page-item {$active[2]} {$disabled[3]}'>";?>
                      <a class="page-link" href="3/">3</a></li>
                      <?php echo "<li id='p4' class='page-item {$active[3]} {$disabled[4]}'>";?>
                      <a class="page-link" href="4/">4</a></li>

                      <?php echo "<li id='p6' class='page-item {$disabled[5]}'>";
                      echo "<a class='page-link' href='javascript:formfuncionario.submit()' >Próximo</a></li>"; ?>

                  </ul>  
                </span>                     
            </div> 
          </div>                     
          <div class="card-body">

          <!-- INÍCIO DO FORM -->

            <form class='form-horizontal' name='formfuncionario' id='formfuncionario' method='POST'
              action="<?php echo URL_BASE . "funcionario/salvar/".$page;?>" >

              <?php include($paginator); ?>

              <div class="line"></div>
                  <div class="form-group row">
                      <div class="col-sm-5 offset-sm-1">
                          <button type="reset" class="btn btn-secondary">Cancel&nbsp&nbsp</button>
                          <button type='submit' class='btn btn-primary'>Próximo</button>
                          
                      </div>
                  </div>
              </div>
            </form>
      </div>
    </div>
</section>