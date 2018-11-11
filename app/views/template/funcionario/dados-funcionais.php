<?php if (isset($_SESSION['funcionario'])){
    $df = $_SESSION['funcionario']->dadosfuncionais;
}?>
<!--   DADOS FUNCIONAIS  -->
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-3">
                <input type="text" data-placement="bottom" placeholder="Matrícula Funcionário"
                        value="<?php isset($df) ? print($df->matricula) : ""?>"
                        id="matriculafun" name="matriculaFun" class="form-control"
                        data-toggle="tooltip" title="Digite apenas números no formato 0.000.000/0"
                        required oninvalid="this.setCustomValidity('Insira a matricula do funcionário')"
                        oninput="setCustomValidity('')" dir=""/>
            </div>                    
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="data"
                            placeholder="Data de Admissão" data-target="#data"
                            value="<?php isset($df) ? print($df->dataadmissao) : ""?>"
                            name="dataAdmissaoFun" required/>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                    <select id="escolaridadeFunc" name="escolaridadeFun" class="form-control select_selecionado"
                    required oninvalid="this.setCustomValidity('Selecione aescolaridade do funcionário')"
                    oninput="setCustomValidity('')">
                        <?php if(isset($df)){
                            echo "<option selected='selected' value='{$df->escolaridade}'>{$df->escolaridade}</option>";
                        } else{   echo "<option value=''  disabled selected hidden>Escolaridade</option>";}?>
                        <option value="Ensino fundamental">Ensino fundamental</option>
                        <option value="Ensino fundamental incompleto">Ensino fundamental incompleto</option>
                        <option value="Ensino médio">Ensino médio</option>
                        <option value="Ensino médio incompleto">Ensino médio incompleto</option>
                        <option value="Ensino superior">Ensino superior</option>
                        <option value="Ensino superior incompleto">Ensino superior incompleto</option>                                                        
                    </select>                      
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="row">                            
            <label class="col-sm-2 form-control-label"></label> 
            <div class="col-sm-3">
                <input type="text" data-placement="bottom" placeholder="Formação Acadêmica" 
                       class="form-control" name="formacaoAcademicaFun"
                       value="<?php isset($df) ? print($df->formacaoacademica) : ""?>"
                       id="inputFormacao" disabled/>
            </div>                       
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="ano"
                            placeholder="Ano de conclusão"
                            value="<?php isset($df) ? print($df->anoconclusao) : ""?>"
                            name="anoConclusaoFun"/>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <select id="cargoFun" name="cargoFun" class="form-control select_selecionado"
                required oninvalid="this.setCustomValidity('Selecione o cargo ocupado')"
                oninput="setCustomValidity('')">
                    <?php if(isset($df)){
                        echo "<option selected='selected' value='{$df->cargo}'>{$df->cargo}</option>";
                    } else{   echo "<option value=''  disabled selected hidden>Cargo</option>";}?>
                    <option value="Assistente administrativo">Assistente administrativo</option>
                    <option value="Auxiliar Administrativo">Auxiliar Administrativo</option>
                    <option value="Auxiliar de Serviços Gerais">Auxiliar de Serviços Gerais</option>
                    <option value="Merendeira">Merendeira</option>
                    <option value="Professor(a)">Professor(a)</option>                                                        
                </select>                              
            </div>                             
        </div>  
    </div>  
    <div class="col-sm-12">
        <div class="row">  
            <label class="col-sm-2 form-control-label"></label>                          
            <div class="col-sm-3">
                <input type="text" data-placement="bottom" placeholder="Função" 
                    value="<?php isset($df) ? print($df->funcao) : ""?>"
                    class="form-control" name="funcaoFun"/>                              
            </div>
        </div>                                               
    </div>           
</div>

<?php unset($df) ?>