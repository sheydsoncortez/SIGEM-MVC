<!-- MODAL PROFESSOR -->
        <div class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">                    
                    <div class="modal-header">
                        <span><h4 id="cabecalho_blocos_form" class="modal-title">Modal title</h4></span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                    </div>
                    <div class="modal-body">
                        <form class='form-horizontal' id='formprofessor' method='POST' action=''>
                            <div class="col-sm-12">
                            <div class="row">
                                <label class="col-sm-2 form-control-label"></label>                        
                                <div class="col-sm-4">
                                    <select id="disciplinaProf" name="disciplinaProf" class="form-control select_selecionado"
                                    required oninvalid="this.setCustomValidity('Selecione uma disciplina')"
                                    oninput="setCustomValidity('')">
                                        <option value=""  disabled selected hidden>Disciplina</option>                                                                                        
                                    </select>                              
                                </div> 
                                <div class="col-sm-4">
                                    <select id="turmaProf" name="turmaProf" class="form-control select_selecionado"
                                    required oninvalid="this.setCustomValidity('Selecione uma turma')"
                                    oninput="setCustomValidity('')">
                                        <option value=""  disabled selected hidden>Turma</option>                                                                                        
                                    </select>                              
                                </div>                                
                                <div class="col-sm-12">
                                    <div class="row">
                                    <label class="col-sm-2 form-control-label"></label>
                                        <div class="col-sm-10"><br/>
                                            <input id="disableDiscTurma" type="checkbox" value="">
                                            <label for="disableDiscTurma">Este professor(a) não execerá função em sala</label>
                                        </div>                                                                
                                </div>
                            </div>  
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>