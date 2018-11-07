<?php if (isset($_SESSION['turma'])){
    $f = $_SESSION['turma'];
    $date = new DateTime($f->datanasc); $nd = $date->format('d/m/Y');
}?>
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-1 form-control-label"></label>
            <div class="col-sm-8">
                <textarea name="comentário" rows="10" cols="32">Disciplinas Disponíveis:</textarea>
                <textarea name="comentário" rows="10" cols="32">Alunos Disponíveis:</textarea>
                <textarea name="comentário" rows="10" cols="67">Turma:</textarea>
                
            </div>
            
        </div>
    </div>
</div>