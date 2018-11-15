<br/><p id="cabecalho_blocos_foto">FOTO DO FUNCIOÁRIO</p>
    <div class="line"></div>
    <div class="col-sm-12">
        <div class="row">
            <label class="col-sm-2 form-control-label"></label>
            <div class="col-sm-7">

                <div class="">
                    <!-- image-preview-filename input [CUT FROM HERE]-->
                    <div class="input-group image-preview">
                        <input type="text" class="form-control image-preview-filename" disabled="disabled" placeholder="Selecione uma imagem" /> <!-- don't give a name === doesn't send on POST/GET -->
                        <span class="input-group-btn">
                            <!-- image-preview-clear button -->
                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                <span class="fa fa-trash-alt"></span> Limpar
                            </button>
                            <!-- image-preview-input -->
                            <div class="btn btn-default image-preview-input ">
                                <span class="fa fa-folder-open"></span>
                                <span class="image-preview-input-title">Procurar...</span>
                                <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->                                
                            </div>
                        </span>
                    </div><!-- /input-group image-preview [TO HERE]-->
                </div>
                <div id="preview-img-fun">
                    <img    id="imagem-hex-img" src="" class="img-fluid rounded-bottom rounded-top" 
                            height="200" width="200" >
                </div>
                <input type="text" id="imagem-hex" name="fotoFun" hidden/> <!-- rename it -->
            </div>
        </div>
    </div>