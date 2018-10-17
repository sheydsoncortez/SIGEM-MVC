<!--   TÍTULO ELEITORAL  -->
<br/><p id="cabecalho_blocos_form">TÍTULO ELEITORAL</p>
    <div class="line"></div>                    
    <div class="form-group row">
        <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-3">
                <input type="text" onkeypress="return isNumberKey(event);"
                    data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                    placeholder="Número Título" id="numeroTit" name="numeroTit" class="form-control"
                    required oninvalid="this.setCustomValidity('Insira o número do título')"
                    oninput="setCustomValidity('')"/>                              
            </div> 
            <div class="col-sm-2">
                <input type="text" onkeypress="return isNumberKey(event);"
                    data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                    placeholder="Seção" id="secaoTit" name="secaoTit" class="form-control"
                    required oninvalid="this.setCustomValidity('Insira o número da seção')"
                    oninput="setCustomValidity('')"/>                              
            </div>
            <div class="col-sm-2">
                <input type="text" onkeypress="return isNumberKey(event);"
                    data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                    placeholder="Zona" id="zonaTit" name="zonaTit" class="form-control"
                    required oninvalid="this.setCustomValidity('Insira a zona eleitoral')"
                    oninput="setCustomValidity('')"/>                              
            </div>                            
        </div>
        </div>
    </div>