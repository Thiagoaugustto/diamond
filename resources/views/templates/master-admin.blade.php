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

  <link rel="shortcut icon" type="image/x-icon" media="all" href="../images/d6aab292c408f137109c640640df9458.png" />

  <!--Font Awesome-->
  <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

  <!--Google icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- bootstrap -->
  <link rel="stylesheet" href="../stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Folhas de estilo -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Ubuntu:400,700" rel="stylesheet">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css" media="all" type="text/css"  />
  <link rel="stylesheet" href="../css/site.css" media="all" type="text/css"  />

  <!-- Tooltipster-master -->
  <link rel="stylesheet" type="text/css" href="../js/tooltipster-master/css/tooltipster.bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="../js/tooltipster-master/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-shadow.min.css" />

  <style type="text/css">

      button:hover > .material-icons, 
      a:hover > .material-icons, 
      a:hover > .fa, 
      a:hover > .fas, 
      a:hover > .fab,
      a:hover > .far,
      button:hover > .fa, 
      button:hover > .fas, 
      button:hover > .fab,
      button:hover > .far
      {
      -webkit-transform:rotateZ(360deg);
      transition: 0.5s;
      }

      .card:hover{ border:1px solid #585858; }

      .card-columns { column-count: 4; }
      
  </style>

  <style type="text/css">
    /*
    * utilizando unicode no blade;
    */
    input.icon{
        font-family: "FontAwesome";
    }
  </style>

  @yield('css-view')

  <script src="../code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/tooltipster-master/js/tooltipster.bundle.min.js"></script>
  <script type="text/javascript" language="javascript" src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" charset="UTF-8" ></script>
  <script src="../stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" language="javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js" charset="UTF-8" ></script>
  <script type="text/javascript" language="javascript" src="../node_modules/scrollreveal/dist/scrollreveal.min.js" charset="UTF-8" ></script>
  <script type="text/javascript" language="javascript" src="../node_modules/owl.carousel/dist/owl.carousel.min.js" charset="UTF-8" ></script>
  <script type="text/javascript" language="javascript" src="../js/js/custom.js" charset="UTF-8" ></script>
  <script src="../js/jquery.kinetic.min.js" type="text/javascript"></script>
  <script src="../js/jquery.mousewheel.min.js"></script>
  <script src="../js/imagepanner.js"></script>
  <script src="../js/mask.js"></script>
  <script src="../js/jquery.mask.js"></script>

  <script type="text/javascript">
  function g(idc,idg){ 
      if(document.getElementById(''+idg).checked){
          //alert('IDC: '+idc+' IDG: '+idg);
          var g1 = "g1";
          $.post('ajax.html',{ g1:g1, idg:idg, idc:idc });
        }else{
          //alert('IDC: '+idc+'IDG: '+idg);
          var g2 = "g2";
          $.post('ajax.html',{ g2:g2, idg:idg, idc:idc });

      }  
  }   
  </script>
  @yield('js-view')
</head>

<body>
    @include('templates.header-admin')
    @yield('conteudo-view')
    @include('templates.footer-admin')