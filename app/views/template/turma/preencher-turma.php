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
                    <legend id="legenda-pd">Professores/Disciplina</legend>
                    <select multiple class="form-control" id="sel1">
                        <option>Professor 1</option>
                        <option>Professor 2</option>
                        <option>Professor 3</option>
                        <option>Professor 4</option>
                        <option>Professor 5</option>
                        <option>Professor 6</option>
                    </select>
                </div>
            <input type="button" class='btn btn-primary' id="add-professor" value="Adicionar" />
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