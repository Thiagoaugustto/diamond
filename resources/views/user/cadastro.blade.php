@extends('templates.master')

@section('conteudo-view')
        
            @if(session('success'))
                <div class="success">
                    <span>{{ session('success')['messages'] }}</span>
                </div>    
            @endif

            <section class="section-principal py-3">
                <div class="container">
                    @if ($errors->any())
                        <div class="errors">
                            <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                        </div>  
                    @endif
                    <div class="eventos-lista py-3">
                        {!! Form::open(['route' => 'cadastro.store', 'method' => 'post']) !!} 
                            <div class='alert alert-info my-3 text-center'> Cadastro de novo cliente 
                            </div>
                            <div class='row'>
                                <div class='col-md-5 border-left'>
                                    <div class='input-group my-2'>
                                        <div class='input-group-prepend'>
                                            <div class='input-group-text'>
                                                <i class='fas fa-user'></i>
                                            </div>
                                        </div>
                                        {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome Completo']) !!}
    		                        </div>
                                    <span class='email_error'></span>
                                    <div class='input-group my-2'>
                                        <div class='input-group-prepend'>
                                            <div class='input-group-text'>@
                                            </div>
                                        </div>
                                        {!!Form::text('email', null, ['class' => 'form-control email_cli', 'placeholder' => 'E-mail']) !!}
                                    </div>
                                    <div class='input-group my-2'>
                                        <div class='input-group-prepend'>
                                            <div class='input-group-text'>
                                                <i class='fa fa-lock'></i>
                                            </div>
                                        </div>
                                        {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha']) !!}
                                    </div>
                                    <div class='input-group my-2'>
                                        <div class='input-group-prepend'>
                                            <div class='input-group-text'>
                                                <i class="fas fa-mobile"></i>
                                            </div>
                                        </div>
                                        {!!Form::text('phone', null, ['class' => 'form-control celular', 'placeholder' => 'Celular']) !!}
                                    </div>
                                    <div class='input-group my-2'>
                                        <div class='input-group-prepend'>
                                            <div class='input-group-text'>
                                                <i class='fa fa-phone'></i>
                                            </div>
                                        </div>
                                        {!!Form::text('telephone', null, ['class' => 'form-control telefone', 'placeholder' => 'Telefone Fixo']) !!}
                                    </div>
                                    <span class='cpf_error'></span>
                                    <div class='input-group my-2'>
                                        <div class='input-group-prepend'>
                                            <div class='input-group-text'>
                                                <i class="fas fa-id-card"></i>
                                            </div>
                                        </div>
                                        {!!Form::text('cpf', null, ['class' => 'form-control cpf', 'placeholder' => 'CPF']) !!}
                                    </div>
                                    <div class='input-group my-2'>
                                        <div class='input-group-prepend'>
                                            <div class='input-group-text'>
                                                <i class="fa fa-id-card"></i>
                                            </div>
                                        </div>
                                        {!!Form::text('rg', null, ['class' => 'form-control rg', 'placeholder' => 'RG']) !!}
                                    </div>
                                    <div class='input-group my-2'>
                                        <div class='input-group-prepend'>
                                            <div class='input-group-text'>
                                                <i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        {!!Form::text('birth', null, ['class' => 'form-control birth', 'placeholder' => 'Data de Nascimento']) !!}
                                    </div>
                                </div>
                                <div class='col-md-5 border-right'>
                                    {!!Form::text('country', null, ['class' => 'form-control my-2', 'placeholder' => 'País']) !!}
                                    {!!Form::text('cep', null, ['class' => 'form-control my-2 cep', 'placeholder' => 'CEP']) !!}
                                    {!!Form::text('address', null, ['class' => 'form-control my-2', 'placeholder' => 'Endereço']) !!}
                                    {!!Form::text('number', null, ['class' => 'form-control my-2', 'placeholder' => 'Número']) !!}
                                    {!!Form::text('complement', null, ['class' => 'form-control my-2', 'placeholder' => 'Complemento']) !!}
                                    {!!Form::text('neighborhood', null, ['class' => 'form-control my-2', 'placeholder' => 'Bairro']) !!}
                                    {!!Form::text('city', null, ['class' => 'form-control my-2', 'placeholder' => 'Cidade']) !!}
                                    {!!Form::text('state', null, ['class' => 'form-control my-2', 'placeholder' => 'Estado']) !!}
                                    <br />
                                    {!! Form::submit('Criar Conta', ['class' => 'btn btn-outline-success btn-rounded', 'style' => 'width: 100%;']) !!}
                                    <br /><br />
                                </div>
                            </div>
                        {!! Form::close() !!}       
                    </div>
                </div>
            </section>
@endsection