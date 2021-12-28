	$('#confirma').click(function(){
		
		var eleitor = $('#nomeeleitor').val()
		var titulo = $('#titulo').val()
		var candidato = $('#candidato').val()

		$("#mostraeleitor").html("Eleitor: " + eleitor);
		$("#mostratitulo").html("Titulo: " + titulo);
		$("#mostracandidato").html("Candidato: " + candidato);
	});
	$('#finalizar').click(function(){
		
		if($('#finalizar').val() == 'Finalizar...'){
			return(false);
		}
		$.ajax({
			url: 'computavoto.php',
			type: 'post',
			dataType: 'json',
			data: {
				'metodo' : $('#metodo').val(),
			      'nome' : $('#nomeeleitor').val(),
				'titulo' : $('#titulo').val(),
			 'candidato' : $('#candidato').val()
			}
		}).success(function(data){
			if(data.status == false){
				$('#mostrar').attr('class', 'd-flex justify-content-center text-success')
			}else{
				$('#mostrar').attr('class', 'd-flex justify-content-center text-danger')
			}
			$("#mostrar").html(data.message);
							
		});
		$('#close').click()
		$('#finalizar').attr('data-dismiss', 'modal')
	})
	$('#close').click(function(){
		$('#metodo').val('formulario-ajax');
		$('#nomeeleitor').val('');
		$('#titulo').val('');
     	$('#candidato').val('');
		$('#close').attr('data-dismiss', 'modal')
	});

	$('#cancelar').click(function(){

		$('#metodo').val('formulario-ajax');
		$('#nomeeleitor').val('');
		$('#titulo').val('');
     	$('#candidato').val('');
		$('#cancelar').attr('data-dismiss', 'modal')

	});
	$('#verificar').click(function(){
		$.ajax({
			url: 'BuscaApuracao.php',
			type: 'post',
			dataType: 'json',
			data: {
				'busca' : 'aa'
			}
		}).success(function(data){
			$('#total').html(data.busca)
			$('#nomeMaisVotado').html(data.ultimoMaisVotado['nome'])
			$('#qtdVotosMaisVotado').html(data.ultimoMaisVotado['id_candidato'])

			var arr = data.candidatos		

			let tbody = $('#tbody').get(0)

        	tbody.innerText = ""

			for (let i = 0; i < 5; i++) {
				arr.id = (i + 1);
  				id = arr[i]['id']
				nome = arr[i]['nome']  
				totalVotos = arr[i]['totalVotos']
				
				  let tr = tbody.insertRow()

				  let td_id = tr.insertCell()
				  let td_candidato = tr.insertCell()
				  let td_totalVotos = tr.insertCell()
	
				  td_id.innerText = id
				  td_candidato.innerText = nome
				  td_totalVotos.innerText = totalVotos
				  
			}

			$('#verificar').html('ATUALIZAR');
			
		});
	});  

	function enviar( id_candidato ){
		$('#candidato').val(id_candidato)
	}