
/**
 * Created by PhpStorm.
 * User: Michael Angelo
 * Date: 12/11/2018
 * Time: 19:10
 */



<form action="" method="post">
    <section>
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <!-- <h1 class="h3 display">Lista de Escolas </h1> -->
            </header>
            <!-- <div class="row">          -->
            <div class="col-lg-12">
                <div class="card mx-auto">
                    <div class="card-header">
                        <h4>Escolas</td></h4>
                        <span id="tbcabecalho" hidden>Escola</span>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive col-lg-12 mx-auto">

                            </br>
                            <table id="tbdedados" class="table table-striped table-sm" style="width:100%">
                                <caption><span id="totalRegistros" style="color:green"><?php echo count($escolas);?></span> Escola(s) encontrado(s)</caption>
                                <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Teledone</th>
                                    <th>Email</th>

                                    <th id="editard">Visualizar</th>
                                    <th id="removerd">Remover</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($escolas as $index=>$escolas) { ?>
                                    <tr>
                                        <th scope="row"><?php echo ($index + 1); ?></th>
                                        <td><?php echo $escolas->codigo ?></td>
                                        <td><?php echo $escolas->nome ?></td>
                                        <td><?php echo $escolas->telefone ?></td>
                                        <td><?php echo $escolas->email ?></td>

                                        <td><a href="<?php echo "editar/". base64_encode($escolas->codigo) ;?>">
                                                <button id="editarEscola" type="button" class="btn btn-secondary" >
                                                    <i class="fa fa-pencil-alt"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td><a href="<?php echo "remover/". base64_encode($escolas->codigo) ;?>">
                                                <button id="removerEscola" type="button" class="btn btn-danger" >
                                                    <i class="fa fa-trash-alt"></i>
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
