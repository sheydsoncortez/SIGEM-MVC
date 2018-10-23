    <!--   RESERVISTA  -->
    <br/><p id="cabecalho_blocos_form">CERTIDÃO DE RESERVISTA</p>
        <div class="line"></div>                    
        <div class="form-group row">
            <div class="col-sm-12">
            <div class="row">
                <label class="col-sm-2 form-control-label"></label>
                <div class="col-sm-3">
                    <input type="text" onkeypress="return isNumberKey(event);"
                        data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                        placeholder="Número Reservista" id="numeroRes" name="numeroRes" class="form-control"
                        value="<?php isset($d) ? print($d->reservista->numero) : "" ?>"
                        <?php print($required) ?> oninvalid="this.setCustomValidity('Insira o número da reservista')"
                        oninput="setCustomValidity('')"/>                              
                </div> 
                <div class="col-sm-2">
                    <input type="text" data-placement="bottom" title="Digite apenas números"                                       
                        placeholder="Categoria" id="categoriaRes" name="categoriaRes" class="form-control"
                        value="<?php isset($d) ? print($d->reservista->categoria) : "" ?>"
                        <?php print($required) ?> oninvalid="this.setCustomValidity('Insira a categoria da reservista')" oninput="setCustomValidity('')"/>                              
                </div>
                <div class="col-sm-2">
                    <input type="text" data-placement="bottom" title="Digite apenas números"                                       
                        placeholder="Série" id="serieRes" name="serieRes" class="form-control"
                        value="<?php isset($d) ? print($d->reservista->serie) : "" ?>"
                        <?php print($required) ?> oninvalid="this.setCustomValidity('Insira a série da reservista')"
                        oninput="setCustomValidity('')" maxlength="2"/>                              
                </div>                            
            </div>
            </div>
        </div>