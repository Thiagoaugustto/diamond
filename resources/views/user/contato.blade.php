@extends('templates.master')

@section('conteudo-view')
            <section class="section-principal py-3">
                <div class="container">
                    <div class='heading-title'>
                        <h2>Atendimento <span>vip</span></h2>
                    </div>
                </div>
                <div class="conteudo-todo">
                    <div id="container-main" class="container" style="margin-top: 60px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="well well-sm well-smooted margin-top-10">
                                    <h1 class="header-box">
                                        <i class="glyphicon glyphicon-envelope"></i> Contato 
                                        <span style="text-transform: lowercase"> - vendas@diamond.com.br</span>
                                    </h1>
                                    <p style="border-bottom: 3px #6f7374 solid; padding: 10px;">
                                        Para dúvidas relacionadas a uma compra específica, por favor coloque na mensagem o número do pedido.</p>
                                    <hr>
                                    <form novalidate="novalidate" id="ajax-form" class="form " method="POST" action="email.php">
                                        <div class="row">
                                            <div class="col-md-6" style="padding-left:10px;">
                                                <div class="form-group">
                                                    <div class="form-error"></div>
                                                    <label for="nome" class="required">Nome completo:</label>
                                                    <input type="text" id="inputNome" name="nome" required="" placeholder="Seu nome completo" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="padding-left:10px;">
                                                <div class="form-group">
                                                    <div class="form-error"></div>
                                                    <label for="celular" class="required">Celular:</label>
                                                    <input type="number" id="inputCelular" name="agp_frontbundle_chamadatype[celular]" required="" placeholder="Celular" class="celular form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" style="padding-left:10px;">
                                                <div class="form-group">
                                                    <div class="form-error"></div>
                                                    <label for="email" class="required">Email:</label>
                                                    <input type="email" id="inputEmail" name="email" required="" placeholder="Seu email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="padding-left:10px;">
                                                <div class="form-group">
                                                    <div class="form-error"></div>
                                                <label for="evento" class="required">Qual evento?</label>
                                                <input type="text" id="inputEvento" name="evento" required="" placeholder="Descrição do evento" class="form-control">
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="row">
                                            <div class="col-md-12" style="padding-left:10px; padding-right:10px;">
                                                <div class="form-group">
                                                    <div class="form-error"></div>
                                                <label for="conteudo" class="required">Conteúdo:</label><textarea id="textConteudo" name="conteudo" required="" class="form-control mceEditor" rows="10"> </textarea>
                                            </div> 
                                        </div>
                                    </div>
                                    <input hidden="" id="inputLocal" name="local" value="fale-conosco">      
                                    <div id="alert-form" class="alert-danger invisible text-center" style="margin-bottom: 10px;padding: 5px"></div>
                                    <input type="hidden" id="agp_frontbundle_chamadatype__token" name="agp_frontbundle_chamadatype[_token]" value="ObHhg4A1fZHEyvl7VcQVIa0k238BJlvKxHQPkf683HQ">
                                    <div class="center">
                                        <input id="btnEnviar" type="submit" class="btn btn-primary" value="Enviar">
                                        <a href="atendimento.html" class="btn pull-right btn-default"><i class="icon-off"></i>Voltar</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well well-sm well-smooted margin-top-10">
                                <h1 class="header-box"><i class="fa fa-phone"></i> Central de atendimento</h1>
                                <h2 style="border-bottom:1px dashed #ccc;margin-top: 20px">Telefone</h2>
                                <h4></h4>
                                <h2 style="border-bottom:1px dashed #ccc;margin-top: 20px">Email</h2>
                                <h4>vendas@diamond.com.br</h4>
                                <h2 style="border-bottom:1px dashed #ccc;margin-top: 20px">Mais informações sobre esta solução</h2>
                            <p>Para mais infomações sobre esta solução, acesse: <a style="color:#007bff" target="_blank" href="gestao-eventos.html">Gestão de Eventos</a></p>
                            </div>
                            <div class="well well-sm well-smooted">
                                <h1 class="header-box"><i class="icon-home"></i> Comercial</h1>
                                <h2 style="border-bottom:1px dashed #ccc;margin-top: 20px">Email</h2>
                                <h4>vendas@diamond.com.br</h4>
                            </div>
                            <div class="well well-sm well-smooted">
                                <h1 class="header-box"><i class="icon-wrench"></i> Suporte técnico</h1>
                                <h2 style="border-bottom:1px dashed #ccc;margin-top: 20px">Email</h2>
                                <h4>suporte@diamond.com.br</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection