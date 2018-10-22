
<!--   CPF / PIS-PASEP  -->
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
        <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-3">
                <input type="text" onkeypress="return isNumberKey(event);"
                        data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                        placeholder="Número CPF" id="numerocpf" name="cpf"
                        value="<?php isset($d) ? print($d->cpf) : "" ?>"
                        required oninvalid="this.setCustomValidity('Insira o número do CPF')" 
                        oninput="setCustomValidity('')" class="form-control"/>                              
            </div> 
            <div class="col-sm-3">
                <input type="text" onkeypress="return isNumberKey(event);"
                        data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                        placeholder="Número PIS/PASEP" id="pisPasep" name="pisPasep"
                        value="<?php isset($d) ? print($d->pispasep) : "" ?>"
                        required oninvalid="this.setCustomValidity('Insira o número do PIS/PASEP')" 
                        oninput="setCustomValidity('')" class="form-control" maxlength="14"/>
            </div>                           
            </div>
    </div>
</div>

<!--   CARTEIRA PROFICIONAL  -->
<br/><p id="cabecalho_blocos_form">CARTEIRA PROFICIONAL</p>
<div class="line"></div>                    
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-3">
                <input type="text" onkeypress="return isNumberKey(event);"
                    data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                    placeholder="Número Cart. Pro." id="cpnumero" name="numeroCtps"
                    value="<?php isset($d) ? print($d->ctps->numero) : "" ?>"
                    required oninvalid="this.setCustomValidity('Insira o número da CTPS')" 
                    oninput="setCustomValidity('')" class="form-control"/>                              
            </div> 
            <div class="col-sm-3">
                <input type="text" onkeypress="return isNumberKey(event);"
                    data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                    placeholder="Série" id="cpserie" name="serieCtps"
                    value="<?php isset($d) ? print($d->ctps->serie) : "" ?>"
                    required oninvalid="this.setCustomValidity('Insira a série da CTPS')" 
                    oninput="setCustomValidity('')" class="form-control"/>                              
            </div>                           
        </div>
    </div>
</div>

