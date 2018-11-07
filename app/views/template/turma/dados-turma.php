<?php if (isset($_SESSION['turma'])){
    $f = $_SESSION['turma'];
    $date = new DateTime($f->datanasc); $nd = $date->format('d/m/Y');
}?>


<div class="form-group row">
    <div class="col-sm-3">
        <select id="serieTurma" name="serieTurma" class="form-control select_selecionado"
            required oninvalid="this.setCustomValidity('Selecione a Série.')"
            oninput="setCustomValidity('')">
        <?php if(isset($f)){
                echo "<option selected='selected' value='{$f->serieturma}'>{$f->serieturma}</option>";
            } else{   echo "<option value=''  disabled selected hidden>Serie</option>";}?>
        <option value="3º Ano">3º Ano</option>
        <option value="4º Ano">4º Ano</option>
        <option value="5º Ano">5º Ano</option>
        <option value="6º Ano">6º Ano</option>
        <option value="7º Ano">7º Ano</option>
        <option value="8º Ano">8º Ano</option>
        <option value="9º Ano">9º Ano</option>
        </select>
    </div>

    <div class="col-sm-3">
        <select id="classeTurma" name="classeTurma" class="form-control select_selecionado"
            required oninvalid="this.setCustomValidity('Selecione a Classe.')"
            oninput="setCustomValidity('')">
        <?php if(isset($f)){
                echo "<option selected='selected' value='{$f->classeTurma}'>{$f->classeTurma}</option>";
        } else{   echo "<option value=''  disabled selected hidden>Classe</option>";}?>
        <option value="'1'">''1''</option>
        <option value="'2'">''2''</option>
        <option value="'3'">''3''</option>
        <option value="'4'">''4''</option>
        <option value="'5'">''5''</option>
        </select>
    </div>
</div>



