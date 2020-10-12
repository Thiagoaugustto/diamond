function checks(e){
    var ch = document.getElementById('check_'+e);
    
    if(ch.checked){
        document.querySelector('.btn_deall').style='display:block;';
    }else{
        document.querySelector('.btn_deall').style='display:none;';
    }
}

function carrinhoRemoverEvento( idpedido, idevento, item) {
    $('#form-remover-evento input[name="pedido_id"]').val(idpedido);
    $('#form-remover-evento input[name="evento_id"]').val(idevento);
    $('#form-remover-evento input[name="item"]').val(item);
    $('#form-remover-evento').submit();
}

function carrinhoAdicionarEvento( idevento ) {
    $('#form-adicionar-evento input[name="id"]').val(idevento);
    $('#form-adicionar-evento').submit();
}