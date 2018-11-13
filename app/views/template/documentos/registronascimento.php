<!-- Registro de Nascimento -->
<br/><p id="cabecalho_blocos_form">REGISTRO DE NASCIMENTO</p>
<div class = "line"></div>
<div class = "form-group row">
    <div class = "col-sm-12">
        <div class = "row">
            <label class="col-sm-2 form-control-label"></label>
            <div class = "col-sm-8">
                <input type="text" placeholder="Nome do Cartório" id="nomeCartorio" name="nomeCartorio"
                        value="<?php isset($d) ? print($d->registronascimento->cartorio) : '' ?>"
                        required oninvalid="this.setCustomValidity('Preencha o campo nome do Cartorio.')"
                        oninput="this.setCustomValidity('')" class="form-control"/>
            </div>
        </div>
        <div class = "row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-4">
                <input type="text" onkeypress="return isNumberKey(event);"
                    data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                    placeholder="Número do Registro" id="numeroReg" name="numeroReg" class="form-control"
                    value="<?php isset($d) ? print($d->registronascimento->numeroregistro) : "" ?>"
                    required oninvalid="this.setCustomValidity('Insira o número do Registro de Nascimento.')"
                    oninput="setCustomValidity('')"/>                              
            </div>
            <div class="col-sm-2">
            <input type="text" onkeypress="return isNumberKey(event);"
                    data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"
                    placeholder="Livro" id="livroReg" name="livroReg" class="form-control"
                    value="<?php isset($d) ? print($d->registronascimento->livro) : "" ?>"
                    required oninvalid="this.setCustomValidity('Insira o número do Livro do Registro')"
                    oninput="setCustomValidity('')"/>
            </div>
            <div class="col-sm-2">
            <input type="text" onkeypress="return isNumberKey(event);"
                    data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"
                    placeholder="Folha" id="folhaReg" name="folhaReg" class="form-control"
                    value="<?php isset($d) ? print($d->registronascimento->folha) : "" ?>"
                    required oninvalid="this.setCustomValidity('Insira o número da Folha do Registro')"
                    oninput="setCustomValidity('')"/>
            </div>
        </div>
        <div class = "row">
            <label class="col-sm-2 form-control-label"></label>
            <div class = "col-sm-3">
                <input type="text" placeholder="Cidade do Cartorio" id="cidadeReg" name="cidadeReg"
                    value="<?php isset($d) ? print($d->registronascimento->cidade) : '' ?>"
                    required oninvalid="this.setCustomValidity('Preencha o campo cidade do Cartorio.')"
                    oninput="this.setCustomValidity('')" class="form-control"/>
            </div>
            <div class="col-sm-2">
                <select id="ufReg" name="ufReg" class="form-control select_selecionado"
                required oninvalid="this.setCustomValidity('Selecione o estado do Cartorio.')"
                oninput="setCustomValidity('')">
                <?php if(isset($d)){
                    echo "<option selected='selected' value='{$d->registronascimento->uf}'>{$d->registronascimento->uf}</option>";
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
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="data1"
                    placeholder="Data do Registro"
                    value="<?php isset($d) ? print($d->registronascimento->data) : "" ?>"
                    name="dataReg" required oninvalid="this.setCustomValidity('Insira a data do registro.')"
                    oninput="setCustomValidity('')"/>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>