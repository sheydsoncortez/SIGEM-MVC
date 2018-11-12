<form action="" method="post">
    <section>
    <div class="container-fluid">
      <!-- Page Header-->
      <header>
        <!-- <h1 class="h3 display">Lista de Funcionários </h1> -->
      </header>
      <!-- <div class="row">          -->
        <div class="col-lg-12">
          <div class="card mx-auto">
            <div class="card-header">
                <h4>Funcionários <?php if($ativo == 1) {echo " ativos";}else{echo " inativos";} ?></td></h4>
                <span id="tbcabecalho" hidden>Funcionário</span>
            </div>
              <div class="card-body">

                  <div class="col-sm-12">
                      <div class="row">
                          <label class="col-sm-10 form-control-label"></label>
                          <div class="col-sm-2">
                          <select id="statusfuncionario" name="statusfuncionario" class="form-control select_selecionado">
                              <option value="1">Ativos</option>
                              <option value="0">Inativos</option>
                          </select>
                          </div>
                      </div>
                  </div>
                <div class="table-responsive col-lg-12 mx-auto">

                  </br>
                  <table id="tbdedados" class="table table-striped table-sm" style="width:100%">
                    <caption><span id="totalRegistros" style="color:green"><?php echo count($funcionarios);?></span> funcionário(s) encontrado(s)</caption>
                    <thead class="thead-dark">
                      <tr>
                        <th>#</th>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Função</th>
                        <th id="editarf">Visualizar</th>
                        <th id="removerf">Remover</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($funcionarios as $index=>$funcionario) { ?>
                        <tr>
                          <th scope="row"><?php echo ($index + 1); ?></th>
                          <td><?php echo $funcionario->matricula ?></td>
                          <td><?php echo $funcionario->nome ?></td>
                          <td><?php echo $funcionario->cargo ?></td>
                          <td><?php echo $funcionario->funcao ?></td>
                          <td><a href="<?php echo URL_BASE . "funcionario/editar/". base64_encode($funcionario->cpf) ;?>">
                                  <button id="editarFuncionario" type="button" class="btn btn-secondary" >
                                      <i class="fa fa-user-edit"></i>
                                  </button>
                              </a>
                          </td>
                          <td><a href="<?php echo URL_BASE . "funcionario/remover/". base64_encode($funcionario->cpf) ;?>">
                                  <button id="removerFuncionario" type="button" class="btn btn-danger" >
                                      <i class="fa fa-user-times"></i>
                                  </button>
                              </a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</form>
