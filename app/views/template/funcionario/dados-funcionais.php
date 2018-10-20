<!--   DADOS FUNCIONAIS  -->              
<div class="form-group row">
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-3">
                <input type="text" data-placement="bottom" placeholder="Matrícula Funcionário" 
                        id="matriculafun" name="matriculaFun" class="form-control"
                        data-toggle="tooltip" title="Digite apenas números no formato 0.000.000/0"
                        required oninvalid="this.setCustomValidity('Insira a matricula do funcionário')"
                        oninput="setCustomValidity('')" dir=""/>
            </div>                    
            <div class="col-sm-3">
                <div class="input-group date">
                    <input type="text" class="form-control datetimepicker-input" id="data" 
                            data-toggle="datetimepicker" data-target="#data"
                            placeholder="Data de Admissão"               
                            name="dataAdmissaoFun" required/>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                </div>
            </div>
            <div class="col-sm-3">
                    <select id="escolaridadeFunc" name="escolaridadeFun" class="form-control select_selecionado"
                    required oninvalid="this.setCustomValidity('Selecione aescolaridade do funcionário')"
                    oninput="setCustomValidity('')">
                        <option value=""  disabled selected hidden>Escolaridade</option>
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
                    class="form-control" name="formacaoAcademicaFun" id="inputFormacao" disabled/>                              
            </div>                       
            <div class="col-sm-3">
                <div class="input-group date">
                    <input type="text" class="form-control datetimepicker-input" id="ano" 
                            data-toggle="datetimepicker" data-target="#ano"
                            placeholder="Ano de conclusão"               
                            name="anoConclusaoFun"/>
                        <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                </div>
            </div>
            <div class="col-sm-3">
                <select id="cargoFun" name="cargoFun" class="form-control select_selecionado"
                required oninvalid="this.setCustomValidity('Selecione o cargo ocupado')"
                oninput="setCustomValidity('')">
                    <option value=""  disabled selected hidden>Cargo</option>
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
                    class="form-control" name="funcaoFun"/>                              
            </div>
        </div>                                               
    </div>           
</div>                    