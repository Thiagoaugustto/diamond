<!DOCTYPE html>

<html>
    <head>
        <title>DIAMOND</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta charset="utf-8" />
        <meta name="keywords" content="keywords" />
        <meta name="description" content="descrição" />
        <meta name="robots" content="index, follow">
        <meta name="classification" content="descrição" />
        <meta name="distribution" content="Global" />
        <meta name="rating" content="General" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="7 days" />
        <meta name="author" content="" />
        <meta name="reply-to" content="" />
        <meta name="category" content="keywords" />
        <meta name="url" content=https://diamondingressos.com.br />
        <meta name="coverage" content="Worldwide" />
        <meta name="abstract" content="keywords" />
    
        <link rel="shortcut icon" type="image/x-icon" media="all" href="images/d6aab292c408f137109c640640df9458.png" />

        <!--Font Awesome-->
        <link rel="stylesheet" href="use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

        <!--Google icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- bootstrap -->
        <link rel="stylesheet" href="stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Folhas de estilo -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Ubuntu:400,700" rel="stylesheet">
        <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" media="all" type="text/css"  />
        <link rel="stylesheet" href="css/site.css" media="all" type="text/css"  />

        <!-- Tooltipster-master -->
        <link rel="stylesheet" type="text/css" href="js/tooltipster-master/css/tooltipster.bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="js/tooltipster-master/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-shadow.min.css" />
      
        <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/tooltipster-master/js/tooltipster.bundle.min.js"></script>
        <script type="text/javascript" language="javascript" src="https:/cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" charset="UTF-8" ></script>
        <script type="text/javascript" language="javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js" charset="UTF-8" ></script>
        <script type="text/javascript" language="javascript" src="node_modules/scrollreveal/dist/scrollreveal.min.js" charset="UTF-8" ></script>
        <script type="text/javascript" language="javascript" src="node_modules/owl.carousel/dist/owl.carousel.min.js" charset="UTF-8" ></script>
        <script type="text/javascript" language="javascript" src="js/js/custom.js" charset="UTF-8" ></script>
        <script src="js/jquery.kinetic.min.js" type="text/javascript"></script>
        <script src="js/jquery.mousewheel.min.js"></script>
        <script src="js/imagepanner.js"></script>
        <script src="js/mask.js"></script>
        <script src="js/jquery.mask.js"></script>
    </head>
    <body class="login-diamond">
		<div class='mx-auto my-5 text-center border py-5 px-5 login'> 
			<div class='modal-body text-center'>      
                {!! Form::open(['router' => 'user.login', 'method' => 'post']) !!}
                   	<div class="input-group my-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-user"></i></div>
                            </div>
                            {!!Form::text('username', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="input-group my-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-lock"></i>
                                </div>
                            </div>
                            {!!Form::password('password', ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Entrar', ['class' => 'btn btn-rounded btn-primary', 'style' => 'width: 100%;']) !!}
                        <div class="my-2">
                            <a href="{{ route('cadastro.store') }}" class="btn btn-sm btn-rounded btn-secondary mr-2 scroll-effect" style="width: 100%;">Cadastra-se</a>
                        </div>        
                    {!! Form::close() !!}
                    <div class='my-3'>
                        <a class="toggle-menu scroll-effect forget-password" data-toggle="collapse"  role="button" href="#forget-password" aria-expanded="false" aria-controls="forget-password"><i class="fa fa-lock"></i> Esqueci minha senha</a>
                    </div>
                    <div class="collapse resen" id="forget-password">
                        <form method='post'>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                </div>  
                                <input type='email' class='form-control' placeholder='*email' name='email_cli' required='required'>
                            </div>
                            <input type='submit' class='btn btn-success btn-rounded' style="width: 100%;" name='recuperar_senha' value='Recuperar'>
                        </form>
                    </div>
                </div>
			</div>
		<div class="m-5 text-center" style="">
			<div>
                <a href="home" class="login-footer">© DIAMOND 2020</a></div>
		</div>
	</body>
</html>

