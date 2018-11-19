<?php if (isset($_SESSION[$entidade])){
    $e = $_SESSION[$entidade]->endereco;
}?>
<!-- CAMPOS DO ENDEREÇO -->

        <div class="form-group row has-success has-danger">                      
            <div class="col-sm-12">
            <div class="row">
                <label class="form-control-label col-sm-2"></label>
                <div class="col-sm-3">
                <input type="text" id="cep" name="cep" placeholder="CEP: 00000-000" 
                        class="form-control"
                        value="<?php isset($e) ? print($e->cep) : "" ?>"
                        required oninvalid="this.setCustomValidity('Insira um CEP')"
                        onkeyup="setCustomValidity('')"/>                                    
                        <div class="invalid-feedback inner-addon left-addon">CEP não encontrado.</div>
                        
                </div>                            
                <div class="col-sm-5">
                <input type="text" id="cidade" name= "cidade" placeholder="Cidade" class="form-control"
                        value="<?php isset($e) ? print($e->cidade) : "" ?>"
                        required oninvalid="this.setCustomValidity('Insira o nome da cidade')"
                        onkeyup="setCustomValidity('')"/>
                </div>                                                                           
            </div>
            <div class="row">
                <label class="form-control-label col-sm-2"></label>
                <div class="col-sm-6">
                <input type="text" id="logradouro" name="logradouro" placeholder="Logradouro: Rua, Avenida..."
                        value="<?php isset($e) ? print($e->logradouro) : "" ?>"
                        required oninvalid="this.setCustomValidity('Preencha o campo logradouro')"
                        onkeyup="setCustomValidity('')" class="form-control"/>
                </div>                        
                <div class="col-sm-2">
                <input type="text" id="numero" name="numero" placeholder="Número"
                        value="<?php isset($e) ? print($e->numero) : "" ?>"
                        required oninvalid="this.setCustomValidity('Insira o número')" 
                        onkeyup="setCustomValidity('')" class="form-control"/>
                </div>                          
            </div>                          
            <div class="row">
            <label class="form-control-label col-sm-2"></label>
                <div class="col-sm-5">
                <input type="text" id="bairro" name="bairro" placeholder="Bairro"
                        value="<?php isset($e) ? print($e->bairro) : "" ?>"
                        required oninvalid="this.setCustomValidity('Insira o nome do bairro')" 
                        onkeyup="setCustomValidity('')" class="form-control"/>
                </div>                                                     
                <div class="col-sm-3">
                <select id="ufEndereco" name="estado"
                        required oninvalid="this.setCustomValidity('Selecione o estado')" 
                        onkeyup="setCustomValidity('')" class="form-control select_selecionado">
                    <?php if(isset($f)){
                        echo "<option selected='selected' value='{$e->estado}'>{$e->estado}</option>";
                    } else{   echo "<option value=''  disabled selected hidden>Estado</option>";}?>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                </div>                          
            </div>
            </div>
        </div>
        <!-- FIM DOS CAMPOS ENDEREÇO -->
<?php unset($e) ?>