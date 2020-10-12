@extends('templates.master-admin')

@section('conteudo-view')
<section class="section-principal py-3">

<div class="container"><h5 class="my-5 pb-2 border-bottom"><i class="fas fa-info-circle"></i> INFORMAÇÕES DO VOUCHER IMPRESSO  </h5><form method="post"><div class="bmenus">
    <a href="javascript:void();" onclick="return negrito()"><i class="fa fa-bold"></i></a>
    <a href="javascript:void();" onclick="return italico()"><i class="fa fa-italic"></i></a>
    <a href="javascript:void();" onclick="return underline()"><i class="fa fa-underline"></i></a>
    
    <span class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Bold,Itálico,Negrito selecione o texto antes"><i class="fas fa-life-ring"></i></span>

    </div><div id="c3" contenteditable="true" onkeyup="return getContent3()">*Descrição...</div><input type="submit" class="btn btn-success my-3" name="info_voucher" value="Atualizar"></form><div class="my-3" style="border:1px solid #c1c1c1; padding:12px 12px 12px 12px;">
    COMPRE MEU INGRESSO - Sistema de Gestão de Ingressos</div></div>  
    
</div></div></div>
</section>
@endsection