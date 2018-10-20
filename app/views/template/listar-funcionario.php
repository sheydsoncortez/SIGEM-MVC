<form action="to_something.php" method="post">
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
                <h4>Funcionários</td></h4>
                <span id="tbcabecalho" hidden>Funcionário</span>
            </div>
              <div class="card-body">

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
                        <th id="editarf">Editar</th>
                        <th id="removerf">Remover</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($funcionarios as $index=>$funcionario) { ?>
                        <tr>
                          <th scope="row"><?php echo ($index + 1); ?></th>
                          <td><?php echo $funcionario->matricula_fun; ?></td>
                          <td><?php echo $funcionario->nome_fun; ?></td>
                          <td><?php echo $funcionario->cargo_fun; ?></td>
                          <td><?php echo $funcionario->funcao_fun; ?></td>
                          <td><a href="<?php echo "editar/". $funcionario->cpf_fun ;?>">
                                  <button id="editarFuncionario" type="button" class="btn btn-secondary" >Editar</button>
                              </a>
                          </td>
                          <td><button type="button" class="btn btn-danger form-control" >Remover</button></td>
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
