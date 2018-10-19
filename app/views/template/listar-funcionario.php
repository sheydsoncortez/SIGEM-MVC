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
          <h4>Funcionários</h4>
        </div>
          <div class="card-body">
            
            <div class="table-responsive col-lg-11 mx-auto">
              <div class="row justify-content-end">
                <div class="col-lg-4">           
                  <input class="form-control" id="buscarFunc" type="text" placeholder="Busque: Matrícula, Nome, Cargo, Função...">
                </div>
              </div>
              </br>
              <table id="tbfuncionarios" class="table table-hover table-striped">
                <caption><span style="color:green"><?php echo count($funcionarios);?></span> funcionário(s) encontrado(s)</caption>
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
                      <td><button type="button" class="btn btn-secondary" >Editar</button></td>
                      <td><button type="button" class="btn btn-danger" >Remover</button></td>
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
      