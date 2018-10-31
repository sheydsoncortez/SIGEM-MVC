<?php if (isset($_SESSION['aluno'])){
    $a = $_SESSION['aluno'];
    //$date = new DateTime($f->datanasc); $nd = $date->format('d/m/Y');
    //echo(strcmp($f->sexo,"F"));
    }
?>

<!-- Inicio do Formulario -->
<form>
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
                     value="<?php echo($a->dataNascAluno != null) ? $a->dataNascAluno : "" ?>"
                     placeholder="Data de Nascimeto"
                     name="dataNasc"
                     oninvalid="this.setCustomValidity('Preencha o campo data de nascimento')"
                     oninput="setCustomValidity('')"/>
              <div class="input-group-append">
                  <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
              </div>
            </div>
        </div>
        <div class="col-sm-3">
            <input type="text" placeholder="Cidade onde nasceu" class="form-control" name="cidadeNascAluno"
            required oninvalid="this.setCustomValidity('Preencha o campo cidade de nascimento')"
            oninput="setCustomValidity('')"/>                              
        </div>
        <div class="col-sm-2">
            <select id="estadoNasc" name="estadoNascAluno" title="Selecione o estado onde nasceu" 
            required required oninvalid="this.setCustomValidity('Selecione o estado nascimento')"
            oninput="setCustomValidity('')" class="form-control select_selecionado">
            <option value=""  disabled selected hidden>Estado</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AM">AM</option>
            <option value="AP">AP</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MG">MG</option>
            <option value="MS">MS</option>
            <option value="MT">MT</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="PR">PR</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SE">SE</option>
            <option value="SP">SP</option>
            <option value="TO">TO</option>
            </select>
        </div>
        <label class="col-sm-2 form-control-label"></label>
    </div>
    <div class = 'form-group row'>
        <label class="col-sm-2 form-control-label"></label>
        <div class="col-sm-4">
            <select id="sexoAluno" name="sexoAluno" title="Selecione o sexo do aluno" 
            required required oninvalid="this.setCustomValidity('Selecione o sexo do aluno')"
            oninput="setCustomValidity('')" class="form-control select_selecionado">
            <option value=""  disabled selected hidden>Cor/Raça do Aluno</option>
            <option value="Indigena">Masculino</option>
            <option value="Branca">Branca</option>
            <option value="Preta">Preta</option>
            <option value="Parda">Parda</option>
            <option value="Amarela">Amarela</option>
            </select>
        </div>
        <div class="col-sm-4">
            <select id="sexoAluno" name="sexoAluno" title="Selecione o sexo do aluno" 
            required required oninvalid="this.setCustomValidity('Selecione o sexo do aluno')"
            oninput="setCustomValidity('')" class="form-control select_selecionado">
            <option value=""  disabled selected hidden>Sexo do Aluno</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
            </select>
        </div>
    </div>
    <div class = 'row'>
        <label class="col-sm-2 form-control-label"></label>
        <div class="col-sm-4">
            <fieldset class="form-inline">
                <legend id="legenda-sexo">O aluno possui deficiencia?</legend>
                <div class="form-check">                            
                    <input type="radio" value="Sim" name="pcd" id="pcd"
                            required oninvalid="this.setCustomValidity('Selecione uma das opções')"
                            oninput="setCustomValidity('')"/>
                            &nbspSim 
                </div>                                                                                  
                <div class="form-check">                       
                    <input type="radio" value="Nao" name="pcd"/>
                    &nbspNão 
                </div>                           
            </fieldset>       
        </div>
        <div class="col-sm-4">
          <input type="text" placeholder="Especifique" class="form-control"
                  required oninvalid="this.setCustomValidity('Preencha com a especificação da deficiencia do aluno.')" 
                  oninput="setCustomValidity('')" name="pcdAluno" id="pcdAluno" disabled/>
        </div>
    </div>
</form>