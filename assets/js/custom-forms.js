var URL_BASE_JQ = "http://localhost/SIGEM-MVC/";
// ================= Placeholder campos DATA.=================
$(document).ready(function () {
    jQuery.datetimepicker.setLocale('pt-BR');
    $('#data').datetimepicker({
        timepicker:false,
        format:'d/m/Y'
    });
});

$(document).ready(function () {
    jQuery.datetimepicker.setLocale('pt-BR');
    $('#ano').datetimepicker({
            timepicker:false,
            disabledWeekDays:[],
            format:'Y'
    });
});

$('form-control').click(function(){
    if($('#data').val() == ""){
        $('#data').attr('required', true);
    }
});

$(document).ready(function(){
    $('#data').mask('00/00/0000');
});
$(document).ready(function(){
    $('#telefone').mask('(00)00000-0000');
});
$(document).ready(function(){
    $('#cep').mask('00000-000');
});
$(document).ready(function(){
    $('#numerocpf').mask('000.000.000-00');
});

$(document).ready(function(){
    $('#pisPasep').mask('000.00000.00.0');
});


      // ===========================================================
      
      // ===================== Tooltips INPUTS.=====================


function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
}
      
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});      
      // ===========================================================

      // =================== TEXTO PARA MAIÚSCULAS.=================

function upperCase(a){
    setTimeout(function(){
    a.value = a.value.toUpperCase();
}, 1);
}

      // ===========================================================

      // ===================== VIA CEP API =========================
$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#logradouro").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#ufEndereco").val("");
        $("#ibge").val("");
    }

//Quando o campo cep perde o foco.      
    $("#cep").on('keyup change keydown',function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {              

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados) && (cep.length >= 8)) {
                        //Atualiza os campos com os valores da consulta.
                        $('#cep').css('box-shadow', '0 0 3px 3px #54cc78');
                        $("#logradouro").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#ufEndereco").val(dados.uf).change();
                        $("#ibge").val(dados.ibge);  
                        
                    } //end if.
                    else if(cep.length >= 8){
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();                          
                        $('#cep').css('box-shadow', '0 0 3px 3px rgb(245, 90, 90)');                          
                    }
                });
            } //end if.
            else if(cep.length >= 8) {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    
    });      
});
// ===========================================================

//ABRE O MODAL SE PROFESSOR SELECIONADO (FORM DADOS FUNCIONAIS)
$('#cargoFun').change(function(){

    var title = $(this).val();
    
    if(title == "Professor(a)"){       
        $('.modal-title').html("Professor(a) - Dados da Turma");
        $('.modal').modal('show');
    }
  });

// ===========================================================

//ABRE O MODAL DO UPDATE FUNCIONÁRIO
$(document).ready(function(){
    var back = $('#updateFuncionario').html();

    $("#corrigirDadosPessoais").click(function(){
        $('#pills-dadospessoais-tab').addClass('active');
        $('#pills-dadospessoais').addClass('show active');
        $('#pills-endereco-tab').hide();
        $('#pills-documentos-tab').hide();
        $('#pills-dadosfuncionais-tab').hide();
        $(".modal").modal();

    });

    $("#corrigirEndereco").click(function(){
        $('#pills-dadospessoais-tab').hide();
        $('#pills-endereco-tab').addClass('active');
        $('#pills-endereco').addClass('show active');
        $('#pills-documentos-tab').hide();
        $('#pills-dadosfuncionais-tab').hide();
        $(".modal").modal();

    }); 
    $("#corrigirDocumentos").click(function(){
        $('#pills-dadospessoais-tab').hide();
        $('#pills-endereco-tab').hide();
        $('#pills-documentos-tab').addClass('active');
        $('#pills-documentos').addClass('show active');
        $('#pills-dadosfuncionais-tab').hide();
        $(".modal").modal();
    });
    $("#corrigirDadosFuncionais").click(function(){
        $('#pills-dadospessoais-tab').hide();
        $('#pills-endereco-tab').hide();
        $('#pills-documentos-tab').hide();
        $('#pills-dadosfuncionais-tab').addClass('active');
        $('#pills-dadosfuncionais').addClass('show active');
        $(".modal").modal();
    });

    $('#updateFuncionario').on('hidden.bs.modal', function(){
        $('#updateFuncionario').html(back);
    });
});

/*$(document).ready(function () {
    var disc = $('#updateDisciplina').html();
    
    $('#corrigirDadosDisciplina').click(function () {
        $('#pills-dadosdisciplina-tab').addClass('active');
        $('#pills-dadosdisciplina').addClass('show active');
        $('.modal form').attr('action', "disciplina/setDadosDisciplina");
        $(".modal").modal();
    });

    $('#updateDisciplina').on('hidden.bs.modal', function(){
        $('#updateDisciplina').html(disc);
    });
});*/
// ===========================================================

// HABILITA FORMAÇÃO CASO SUPERIO SELECIONADO (FORM DADOS FUNCIONAIS)
$('#escolaridadeFunc').change(function(){

    var escolaridade = $(this).val();
    
    if(escolaridade == "Ensino superior"){
        $('#inputFormacao').removeAttr('disabled');
        $('#inputFormacao').css('box-shadow', '0 0 3px 3px #54cc78');       
    }else{
        $('#inputFormacao').attr('disabled', true);
        $('#inputFormacao').css('box-shadow', '0 0 0 0 #ffff');
        $('#inputFormacao').val('');
    }

    $('#escolaridadeFunc').css('font-weight', 'bold');
  });
// ===========================================================

// HABILITA FORMAÇÃO CASO SUPERIO SELECIONADO (FORM DADOS FUNCIONAIS)
$(document).ready(function(){
    $("input[name='pcd']").click(function(){

        var deficiencia = $("input[name='pcd']:checked").val();
        
        if(deficiencia == "Sim"){
            $('#pcdAluno').removeAttr('disabled');
            $('#pcdAluno').css('box-shadow', '0 0 3px 3px #54cc78');  
        }else if(deficiencia == "Nao"){
            $('#pcdAluno').attr('disabled', true);
            $('#pcdAluno').css('box-shadow', '0 0 0 0 #ffff');
        }
    
        $('#pcd').css('font-weight', 'bold');
      });
});
//=============================================================
  // DEFINE FONTE NEGRITO SELECT (FORM)
  $('#cargoFun').change(function(){
    $('#cargoFun').css('font-weight', 'bold');
  });
  $('#ufEndereco').change(function(){
    $('#ufEndereco').css('font-weight', 'bold');
  });
  $('#estadoCivil').change(function(){
    $('#estadoCivil').css('font-weight', 'bold');
  });
  $('#estadoNasc').change(function(){
    $('#estadoNasc').css('font-weight', 'bold');
  });
  $('#ufExpRg').change(function(){
    $('#ufExpRg').css('font-weight', 'bold');
  });
  $('#orgaoExpRg').change(function(){
    $('#orgaoExpRg').css('font-weight', 'bold');
  });  
  $('#legenda-cor').change(function(){
    $('#legenda-cor').css('font-weight', 'bold');
  });
$('#statusfuncionario').change(function(){
    $('#statusfuncionario').css('font-weight', 'bold');
});
  // ===========================================================

  // REMOVE SOMBRA DO INPUT (FORM DADOS FUNCIONAIS)
  $('#inputFormacao').on('keyup change keydown', function(){
    $('#inputFormacao').css('box-shadow', '0 0 0 0 #ffff');
  });
// ===========================================================

// HABILITA NUMEROS DE PAGINAÇÃO (FORM FUNCIONÁRIO)
$(document).ready(function(){

    var page = $("#cabecalho_blocos_form").html();
    
    if(page == "ENDEREÇO"){
        $("#p2").removeClass("disabled");

    }else if(page == "DOCUMENTOS"){
        $("#p2").removeClass("disabled");
        $("#p3").removeClass("disabled");

    }else if(page == "DADOS FUNCIONAIS"){
        $("#p2").removeClass("disabled");
        $("#p3").removeClass("disabled");
        $("#p4").removeClass("disabled");
    
    }else if(page == "CONFIRMAR DADOS"){
        $("#p2").removeClass("disabled");
        $("#p3").removeClass("disabled");
        $("#p4").removeClass("disabled");
        $("#p5").removeClass("disabled");
    }
});

// OPÇÕES PARA TABELAS
$(document).ready(function() {
    var h4TbDados = $('#tbcabecalho').html();

    $('#tbdedados').DataTable( {
        select: true,
        select: {
            style: 'single',
            items: 'row'
        },
        "bInfo" : false,
        "paging":   true,
        "pagingType": "first_last_numbers",
        "ordering": true,
        "searchable": false, "targets": [0, 5, 6],
        "lengthMenu": [ [10, 20, 30, 40, 50, -1], [10, 20, 30, 40, 50, "Todos"] ],
        "decimal": ",",
        "language": {
            paginate: {
                first:    '<<',
                previous: '<',
                next:     '>',
                last:     '>>'
            },
            "search": "Buscar:",
            searchPlaceholder: "Informações do "+ h4TbDados + "...",
            "lengthMenu": "Mostrar _MENU_ ",
            "emptyTable":     "Nenhum "+ h4TbDados + " cadastrado",
            "info":           "",
            "infoEmpty":      "",
            "zeroRecords": "Nenhum resultado"
        }
    } );

    $('input[type=search]').keyup(function(){

        var rowCount = $('#tbdedados >tbody >tr').length;

        if($('#tbdedados >tbody >tr >td').html() != "Nenhum resultado" ){

            $('#totalRegistros').html(rowCount);

        }else{

            $('#totalRegistros').html("0");
        }

    });
});

//
$(document).ready(function(){
    $('#add-professor').on('click',function() {
        var v = [];
        for(var i = 0; i < $("#sel1").val(); i++ ){
            t = t + $("#sel1").val();
        }
        alert(t);
    });
});


