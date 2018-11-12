<?php if (isset($_SESSION['turma'])){
    $f = $_SESSION['turma'];
    $date = new DateTime($f->datanasc); $nd = $date->format('d/m/Y');
}?>
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-1 form-control-label"></label>
            <div class="col-sm-8">
                <div class="form-group">
                    <legend id="legenda-pd">Alunos</legend>
                    <select multiple class="form-control" id="sel1">
                        <option>Aluno 1</option>
                        <option>Aluno 2</option>
                        <option>Aluno 3</option>
                        <option>Aluno 4</option>
                        <option>Aluno 5</option>
                        <option>Aluno 6</option>
                    </select>
                </div>
            <input type="button" class='btn btn-primary' id="add-aluno" value="Adicionar" />
            </div>

            
        </div>
        <div class="row">
            <label class="col-sm-1 form-control-label"></label>
            <div class="col-sm-8">
                <div class="form-group">
                    <legend id="legenda-pd">Turma</legend>
                    <select multiple class="form-control" id="sel2">

                    </select>
                </div>
                
            </div>
        </div>
    </div>
</div>