	$('#confirma').click(function(){
		
		var eleitor = $('#nomeeleitor').val()
		var titulo = $('#titulo').val()
		var candidato = $('#candidato').val()

		document.getElementById("mostraeleitor").innerHTML = "Eleitor: " + eleitor;
		document.getElementById("mostratitulo").innerHTML = "Titulo: " + titulo;
		document.getElementById("mostracandidato").innerHTML = "Candidato: " + candidato;
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
			console.log(data);
			document.getElementById("mostrar").innerHTML = data.message;
							
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
			
			console.log(data);
			document.getElementById('total').innerHTML = data.busca
			document.getElementById('nomeMaisVotado').innerHTML = data.ultimoMaisVotado['nome']
			document.getElementById('qtdVotosMaisVotado').innerHTML = data.ultimoMaisVotado['id_candidato']

			var arr = { 'nome' : data.candidatos['nome'], 'totalVotos' : data.candidatos['totalVotos']}					 
		
			document.getElementById('nomeCandidatoVoto').innerHTML = data['nome'][i].total;
			document.getElementById('resultadoVoto').innerHTML = item.PageName;		
			

			document.getElementById('verificar').innerHTML = "ATUALIZAR"
			
		});
	});  

	function enviar( id_candidato ){
		$('#candidato').val(id_candidato)
	}