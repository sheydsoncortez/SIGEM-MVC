<?php if (isset($_SESSION['funcionario'])){
    $f = $_SESSION['funcionario'];
}?>
<div class="form-group row">
  <div class="col-sm-12">
    <div class="row">
      <label class="col-sm-2 form-control-label"></label>
      <div class="col-sm-8">
      <input type="text" placeholder="Nome" id="nomeFun" name="nomeFun"
                  value="<?php isset($f) ? print($f->nome) : "" ?>"
                  required oninvalid="this.setCustomValidity("Preencha o campo nome")"
                  oninput="setCustomValidity("")" class="form-control"/>
      </div>
    </div>
  </div>

  <!-- DADOS DE NASCIMENTO -->
  <div class="col-sm-12">
    <div class="row">
      <label class="col-sm-2 form-control-label"></label>
      <div class="col-sm-3">
          <div class="input-group">
              <input type="text" class="form-control" id="data"
                     value="<?php isset($f) ? print($f->datanasc) : ""?>"
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
        <input type="text" placeholder="Cidade onde nasceu" class="form-control" name="cidadeNasc"
                value="<?php isset($f) ? print($f->cidadenasc) : ""?>"
                required oninvalid="this.setCustomValidity('Preencha o campo cidade de nascimento')"
                oninput="setCustomValidity('')"/>                              
      </div>
      <div class="col-sm-2">
        <select id="estadoNasc" name="estadoNasc" title="Selecione o Estado onde Nasceu" 
                required required oninvalid="this.setCustomValidity('Selecione o estado nascimento')"
                oninput="setCustomValidity('')" class="form-control select_selecionado">

          <?php if(isset($f)){
                    echo "<option selected='selected' value='{$f->estadonasc}'>{$f->estadonasc}</option>";
          } else{   echo "<option value=''  disabled selected hidden>Estado</option>";}?>
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
    </div>
  </div> 

  <!-- FILIAÇÃO -->
  <div class="col-sm-12">
    <div class="row">
      <label class="col-sm-2 form-control-label"></label>
      <div class="col-sm-4">
        <input type="text" placeholder="Nome do Pai..." class="form-control"
                value="<?php isset($f) ? print($f->nomepai) : ""?>"
                required oninvalid="this.setCustomValidity('Preencha com o nome do pai do funcionario')"
                oninput="setCustomValidity('')" name="nomePai"/>
      </div>
      <div class="col-sm-4">
        <input type="text" placeholder="Nome do Mãe..." class="form-control"
                value="<?php isset($f) ? print($f->nomemae) : ""?>"
                required oninvalid="this.setCustomValidity('Preencha com o nome da mãe do funcionario')" 
                oninput="setCustomValidity('')" name="nomeMae"/>
      </div>
    </div>
  </div>

  <!-- SEXO E ESTADO CIVIL -->
  <div class="col-sm-12">
    <div class="row">
        <label class="col-sm-2 form-control-label"></label>
        <div class="col-sm-4">
          <fieldset class="form-inline ">
            <legend id="legenda-sexo">Sexo</legend>
              <div class="form-check-inline">
                <label class="form-check-inline">
                  <input type="radio" value="M" name="sexo"
                         <?php if(strcasecmp('M', str_replace(" ","",$f->sexo)) == 0) echo 'checked'; ?>
                         required oninvalid="this.setCustomValidity('Selecione uma das opções')"
                         oninput="setCustomValidity('')"/>&nbspMasculino
                </label>
              </div> 
              &nbsp&nbsp
              <div class="form-check-inline">
                <label class="form-check-inline">
                  <input type="radio" value="F" <?php if(strcasecmp('F', str_replace(" ","",$f->sexo)) == 0) echo 'checked'; ?> name="sexo"/>&nbspFeminino
                </label>
              </div>                            
          </fieldset>
        </div>
        <div class="col-sm-3">
          <select id="estadoCivil" name="estadoCivil" class="form-control select_selecionado"
                  required oninvalid="this.setCustomValidity('Selecione o estado civil')"
                  oninput="setCustomValidity('')">
              <?php if(isset($f)){
                  echo "<option selected='selected' value='{$f->estadocivil}'>{$f->estadocivil}</option>";
              } else{   echo "<option value=''  disabled selected hidden>Estado Civil</option>";}?>
            <option value="Solteiro(a)">Solteiro(a)</option>
            <option value="Casado(a)">Casado(a)</option>
            <option value="Separado(a)">Separado(a)</option>
            <option value="Divorciado(a)">Divorciado(a)</option>
            <option value="Viúvo(a)">Viúvo(a)</option>
            <option value="Amasiado(a)">Amasiado(a)</option>                            
          </select>
        </div>
    </div>
  </div>

  <!-- DADOS DE CONTATO -->
  <div class="col-sm-12">
    <div class="row">
      <label class="col-sm-2 form-control-label"></label>
      <div class="col-sm-3">
          <input type="text" placeholder="Telefone: (00)00000-0000" 
                  class="form-control" id="telefone" name="telefone" required
                  value="<?php isset($f) ? print($f->telefone) : ""?>"
                  oninvalid="this.setCustomValidity('Informe um número para contato')"
                  oninput="setCustomValidity('')"/>
      </div>
      <div class="col-sm-4">
          <input type="email" placeholder="Email: login@provedor.com" class="form-control"
                  value="<?php isset($f) ? print($f->email) : ""?>"
                  required oninvalid="this.setCustomValidity('Insira um email válido')" 
                  oninput="setCustomValidity('')" name="email"/>
      </div> 
    </div>
  </div>
  <div id="fotoFun1"class="col-sm-12">
    <?php include("foto-funcionario.php")?>
  </div>
</div>


