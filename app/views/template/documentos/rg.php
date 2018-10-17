<!-- CAMPOS DOCUMENTOS -->
<br/><p id="cabecalho_blocos_form">RG</p>
<div class="line"></div>                    
<div class="form-group row">                     
    <div class="col-sm-12">
    <div class="row">
        <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-3">
            <input type="text" onkeypress="return isNumberKey(event);"
                    data-toggle="tooltip" data-placement="bottom" title="Digite apenas números"                                       
                    placeholder="Número RG" id="numeroRg" name="numeroRg" class="form-control"
                    required oninvalid="this.setCustomValidity('Insira o número do RG')"
                    oninput="setCustomValidity('')"/>                              
            </div>
            <div class="col-sm-4">
            <select name="orgaoExpRg" class="form-control select_selecionado"
                data-toggle="tooltip" data-placement="bottom" title="SSP, ITEP"
                required oninvalid="this.setCustomValidity('Selecione o orgão de expedição')"
                oninput="setCustomValidity('')">
                <option value=""  disabled selected hidden>Orgão Expedidor.</option>
                <option value="SSP">SSP - Secretaria de Segurança Pública</option>
                <option value="ITEP">ITEP - Instituto Técnico-Científico de Perícia</option>
                <option value="ABNC">ABNC – Academia Brasileira de Neurocirurgia</option>
                <option value="CGPI/DUREX/DP">CGPI/DUREX/DPF – Coordenação Geral de Polícia de Imigração da Polícia Federal</option>
                <option value="CGPI">CGPI – Coordenação-Geral de Privilégios e Imunidades</option>
                <option value="CGPMAF">CGPMAF – Coordenadoria Geral de Polícia Marítima, Aeronáutica e de Fronteiras</option>
                <option value="CNIG">CNIG – Conselho Nacional de Imigração</option>
                <option value="CNT">CNT - Carteira Nacional de Habilitação</option>
                <option value="COREN">COREN – Conselho Regional de Enfermagem</option>
                <option value="CRA">CRA – Conselho Regional de Administração</option>
                <option value="CRAS">CRAS – Conselho Regional de Assistentes Sociais</option>
                <option value="CRB">CRB – Conselho Regional de Biblioteconomia</option>
                <option value="CRC">CRC – Conselho Regional de Contabilidade</option>
                <option value="CRE">CRE – Conselho Regional de Estatística</option>
                <option value="CREA">CREA – Conselho Regional de Engenharia Arquitetura e Agronomia</option>
                <option value="CRECI">CRECI – Conselho Regional de Corretores de Imóveis</option>
                <option value="CREFIT">CREFIT – Conselho Regional de Fisioterapia e Terapia Ocupacional</option>
                <option value="CRF">CRF – Conselho Regional de Farmácia</option>
                <option value="CRM">CRM – Conselho Regional de Medicina</option>
                <option value="CRN">CRN – Conselho Regional de Nutrição</option>
                <option value="CRO">CRO – Conselho Regional de Odontologia</option>
                <option value="CRP">CRP – Conselho Regional de Psicologia</option>
                <option value="CRPRE">CRPRE – Conselho Regional de Profissionais de Relações Públicas</option>
                <option value="CRQ">CRQ – Conselho Regional de Química</option>
                <option value="CRRC">CRRC – Conselho Regional de Representantes Comerciais</option>
                <option value="CRMV">CRMV – Conselho Regional de Medicina Veterinária</option>
                <option value="CDC">CSC - Carteira Sede Carpina de Pernambuco</option>
                <option value="CTPS">CTPS – Carteira de Trabalho e Previdência Social</option>
                <option value="DIC">DIC - Diretoria de Identificação Civil</option>
                <option value="DIREX">DIREX – Diretoria-Executiva</option>
                <option value="DPMAF">DPMAF – Divisão de Polícia Marítima, Área e de Fronteiras</option>
                <option value="DPT">DPT – Departamento de Polícia Técnica Geral</option>
                <option value="DST">DST – Programa Municipal DST/Aids</option>
                <option value="FGTS">FGTS - Fundo de Garantia do Tempo de Serviço</option>
                <option value="FIPE">FIPE – Fundação Instituto de Pesquisas Econômicas</option>
                <option value="FLS">FLS - Fundação Lyndolpho Silva</option>
                <option value="GOVGO">GOVGO - Governo do Estado de Goiás</option>
                <option value="CLA">I CLA – Carteira de Identidade Classista</option>
                <option value="IFP">IFP - Instituto Félix Pacheco</option>
                <option value="IGP">IGP – Instituto Geral de Perícias</option>
                <option value="IICCECF/RO">IICCECF/RO - Instituto de Identificação Civil e Criminal Engrácia da Costa Francisco de Rondônia</option>
                <option value="IIMG">IIMG - Inter-institutional Monitoring Group</option>
                <option value="IML">IML – Instituto Médico-Legal</option>
                <option value="IPC">IPC - Índice de Preços ao Consumidor</option>
                <option value="IPF">IPF - Instituto Pereira Faustino</option>
                <option value="MAE">MAE - Ministério da Aeronáutica</option>
                <option value="MEX">MEX - Ministério do Exército</option>
                <option value="MMA">MMA - Ministério da Marinha</option>
                <option value="OAB">OAB – Ordem dos Advogados do Brasil</option>
                <option value="OMB">OMB – Ordens dos Músicos do Brasil</option>
                <option value="PCMG">PCMG - Policia Civil do Estado de Minas Gerais</option>
                <option value="PMMG">PMMG – Polícia Militar do Estado de Minas Gerais</option>
                <option value="DPF">POF ou DPF - Polícia Federal</option>
                <option value="POM">POM - Polícia Militar</option>
                <option value="SDS">SDS – Secretaria de Defesa Social (Pernambuco)</option>
                <option value="SNJ">SNJ – Secretaria Nacional de Justiça / Departamento de Estrangeiros</option>
                <option value="SECC">SECC – Secretaria de Estado da Casa Civil</option>
                <option value="SEJUSP">SEJUSP - Secretaria de Estado de Justiça e Segurança Pública – Mato Grosso</option>
                <option value="EST">SES ou EST - Carteira de Estrangeiro</option>
                <option value="SESP">SESP – Secretaria de Estado da Segurança Pública do Paraná</option>
                <option value="SJS">SJS – Secretaria da Justiça e Segurança</option>
                <option value="SJTC">SJTC – Secretaria da Justiça do Trabalho e Cidadania</option>
                <option value="SJTS">SJTS – Secretaria da Justiça do Trabalho e Segurança</option>
                <option value="SPTC">SPTC - Secretaria de Polícia Técnico-Científica</option>                                 
            </select>                              
            </div>                                                   
    </div>
    <div class="row">
        <label class="col-sm-2 form-control-label"></label>
        <div class="col-sm-3">
        <div class="input-group date">
            <input type="text" class="form-control datetimepicker-input" id="data" 
              data-toggle="datetimepicker" data-target="#data"
              placeholder="Data de Expedição"               
              name="dataExpRg" required oninvalid="this.setCustomValidity('Insira a data de expedição')"
              oninput="setCustomValidity('')"/>    
            <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
            </div>
        </div>
        </div>
        <div class="col-sm-4">
            <select name="ufExpRg" class="form-control select_selecionado"
            required oninvalid="this.setCustomValidity('Selecione o extado expedidor')"
            oninput="setCustomValidity('')">
            <option value=""  disabled selected hidden>Estado</option>
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