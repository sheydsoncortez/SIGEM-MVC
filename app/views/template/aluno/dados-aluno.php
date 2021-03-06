<?php if (isset($_SESSION['aluno'])){
    $a = $_SESSION['aluno'];
    }
?>

<!-- Inicio do Formulario -->
<div class = 'form-group row'>
    <label class="col-sm-2 form-control-label"></label>
    <div class = 'col-sm-8'>
        <input type="text" placeholder="Nome do Aluno" id="nomeAluno" name="nomeAluno"
                value="<?php isset($a) ? print($a->nomealuno) : '' ?>"
                required oninvalid="this.setCustomValidity('Preencha o campo nome')"
                oninput="this.setCustomValidity('')" class="form-control"/>
    </div>
</div>
<div class = 'form-group row'>
    <label class="col-sm-2 form-control-label"></label>
    <div class = 'col-sm-3'>
        <div class="input-group">
            <input type="text" class="form-control" id="data"
                    value="<?php echo($a->datanascaluno != null) ? $a->datanascaluno : "" ?>"
                    placeholder="Data de Nascimento"
                    name="dataNascAluno"
                    oninvalid="this.setCustomValidity('Preencha o campo data de nascimento')"
                    oninput="setCustomValidity('')"/>
            <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <input type="text" placeholder="Cidade onde nasceu..." id="cidadeNascAluno" name="cidadeNascAluno"
            value="<?php isset($a) ? print($a->cidadenascaluno) : '' ?>"
            required oninvalid="this.setCustomValidity('Preencha o campo da cidade de nascimento.')"
            oninput="this.setCustomValidity('')" class="form-control"/>                              
    </div>
    <div class="col-sm-2">
        <select id="estadoNasc" name="estadoNasc" class="form-control select_selecionado"
        required oninvalid="this.setCustomValidity('Selecione o estado do de nascimento.')"
        oninput="setCustomValidity('')">
        <?php if(isset($a)){
            echo "<option selected='selected' value='{$a->estadonascaluno}'>{$a->estadonascaluno}</option>";
        } else{   echo "<option value=''  disabled selected hidden>Estado</option>";}?>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="DF">DF</option>
        <option value="ES">ES</option>
        <option value="GO">GO</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
        </select>
    </div>
    <label class="col-sm-2 form-control-label"></label>
</div>
<div class = 'form-group row'>
    <label class="col-sm-2 form-control-label"></label>
    <div class="col-sm-4">
        <select id="corAluno" name="corAluno" class="form-control select_selecionado"
        required oninvalid="this.setCustomValidity('Selecione o estado do Cartorio.')"
        oninput="setCustomValidity('')">
        <?php if(isset($a)){
            echo "<option selected='selected' value='{$a->coraluno}'>{$a->coraluno}</option>";
        } else{   echo "<option value=''  disabled selected hidden>Cor/Raça do Aluno</option>";}?>
        <option value="Indigena">Indigena</option>
        <option value="Branca">Branca</option>
        <option value="Preta">Preta</option>
        <option value="Parda">Parda</option>
        <option value="Amarela">Amarela</option>
        </select>
    </div>
    <div class="col-sm-4">
    <select id="sexoAluno" name="sexoAluno" class="form-control select_selecionado"
        required oninvalid="this.setCustomValidity('Selecione o sexo do aluno.')"
        oninput="setCustomValidity('')">
        <?php if(isset($a)){
                if(strcasecmp('M', str_replace(" ", "",$a->sexoaluno)) == 0){
                    echo "<option selected='selected' value='M'>Masculino</option>";
                }else{
                    echo "<option selected='selected' value='F'>Feminino</option>";
                }
        } else{   echo "<option value=''  disabled selected hidden>Sexo do Aluno</option>";}?>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
        </select>
    </div>
</div>
<div class = 'row'>
    <label class="col-sm-2 form-control-label"></label>
    <div class="col-sm-4">
        <fieldset class="form-inline ">
        <legend id="legenda-sexo">O aluno possui deficiencia?</legend>
            <div class="form-check-inline">
            <label class="form-check-inline">
                <input type="radio" value="Sim"  id="pcdAlunoSim" name="pcdAluno"
                        <?php if(strcmp($a->pcdaluno,"Sim") == 2) echo 'checked'; ?>
                        required oninvalid="this.setCustomValidity('Selecione uma das opções')"
                        oninput="setCustomValidity('')"/>&nbspSim
            </label>
            </div> 
            <div class="form-check-inline">
            <label class="form-check-inline">
                <input type="radio" value="Não" <?php if(strcmp($a->pcdaluno,"Nao") == 2) echo 'checked'; ?> name="pcdAluno"/>
                &nbspNão
            </label>
            </div>                            
        </fieldset>
    </div>
    <div class="col-sm-4">
        <input type="text" placeholder="Especifique" class="form-control"
                required oninvalid="this.setCustomValidity('Preencha com a especificação da deficiencia do aluno.')" 
                oninput="setCustomValidity('')" name="pcdAlunoInput" id="pcdAlunoInput" disabled/>
    </div>
</div>