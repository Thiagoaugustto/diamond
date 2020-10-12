$(document).ready(function(){

	var vTo = $('.valorTotal').val();

	$('.valorCompra').html('R$ '+vTo);

	$('.pagto-zoop').click(function(){

		var holder_name = $('.holder_name').val();

		var card_number = $('.card_number').val();

		var expiration = $('.expiration').val();

		var security_code = $('.security_code').val();

		var valorTotal = $('.valorTotal').val();

		$('.valorCompra').html('');

		var pagtozoop = "pagtozoop";

		if(holder_name == "" || card_number == "" || expiration == "" || security_code == ""){

			alert("Preencha os campos obrigatórios");

		}else{

			$('.credit_card').modal('hide');

			$('.enviando_pagto').modal();

			//alert("Enviando requisição de pagto");

				$.post('ajax.php', {

					pagtozoop:pagtozoop, 

					valorTotal:valorTotal, 

					holder_name:holder_name,

					card_number:card_number,

					expiration:expiration,

					security_code:security_code

		},function(e){

				$('.enviando_pagto').modal('hide');

				alert(""+e);

				window.location.href='';

			});
		}
	});

	$('.valor').mask('00000.00');

	$('credit_card').mask("0000 0000 0000 0000");

	$(".numero").mask("0000000000000000000000000000000000000000");

	$(".cep").mask("00000-000");

	$(".cpf").mask("000.000.000-00");

	$("#valor").mask("0.000,00");

	$("#cnpj").mask("00.000.000/0000-00");

	$("#tel").mask("0000-0000");

	$(".celular").mask("(00) 0.0000-0000");

	$(".telefone").mask("(00) 0000-0000");

	$("#telefone2").mask("(00) 0000-0000");

	$(".rg").mask("00.000.000-0");

	$("#cel").mask("(00) 00000-0000");
	
	$(".birth").mask("0000-00-00");

	$(".age").mask("00");

	$(".data").mask("0000-00-00");

	$(".card_data").mask("00/00");

	$("#data2").mask("00/00/0000");

	$("#hour").mask("00:00");

	$(".hour").mask("00:00");

	$("#valor_i").mask("0000.00");

	$("#taxa_i").mask("0000.00");

	$("#valor_m").mask("0000.00");

	$("#taxa_m").mask("0000.00");

	$("#valor_masc").mask("0000.00");

	$("#taxa_masc").mask("0000.00");

	$("#valor_femini").mask("0000.00");

	$("#taxa_femini").mask("0000.00");

	$("#senhascaner").mask("000000");

	$("#senhascaner2").mask("000000");

	$("#qtd").mask("000000");

	$('.string').mask("SSSSSSSSSSSSSSSSSSSSSSSSS");

	$('.tip').tooltipster({theme: 'tooltipster-shadow'});

	$('.ver-senha').click(function(){

		$('.pass').attr('type','text');

	});

	$(".cep").blur(function(){

		var cep = $(this).val();

	//alert('');      

	    $.ajax({

	        url:"consultar_cep.php",

	        type:"post",

	        data:{cep:cep},

	        dataType:"json", success:function(b){

	            if(b.sucesso==1){

	            $(".endereco").val(b.rua);

	            $(".bairro").val(b.bairro);

	            $(".cidade").val(b.cidade);

	            $(".estado").val(b.estado);

	            $(".numero").focus()

	            }

	        }

	    });

	});

	$('.email_cli').blur(function(){

		var email_cli = $(this).val();

		var vermail = "vermail";

		if(email_cli == ""){}else{

			$.post('ajax.php',{vermail:vermail, email_cli:email_cli}, function(e){

					$('.email_error').html(e);
			});
		}
	});

	$('.cpf').blur(function(){

		var cpf = $(this).val();
		var vercpf = "vercpf";

		if(cpf == ""){}else{

			$.post('ajax.php',{vercpf:vercpf, cpf:cpf}, function(e){

				$('.cpf_error').html(e);
			});
		}
	});
});