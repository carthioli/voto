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


		var divPai = $('#mostra')
		
		for (let i = 0; i < data.candidatos.length; i++) {
			arr.id = (i + 1);
			arr.nome = (i + 1);
			arr.qtd = (i + 1);

			divPai.append("<label>ID:</label>")
			divPai.append("<p id='idCand'></p>")
	
			divPai.append("<label>CANDIDATO:</label>")
			divPai.append("<p id='nomeCand'></p>")
	
			divPai.append("<label>TOTAL VOTO:</label>") 
			divPai.append("<p id='qtdVoto'></p>")

			$('#idCand').attr('id', 'idCand' + arr.id++)
			$('#nomeCand').attr('id', 'nomeCand' + arr.nome++)
			$('#qtdVoto').attr('id', 'qtdVoto' + arr.qtd++)
		}

		for (let i = 0; i < data.candidatos.length; i++) {
			arr.id = (i + 1);
			arr.nome = (i + 1);
			arr.qtd = (i + 1);

			  id = arr[i]['id']
			nome = arr[i]['nome']  
			totalVotos = arr[i]['totalVotos']

			$('#idCand' + arr.id++).html(id)
			$('#nomeCand' + arr.nome++).html(nome)
			$('#qtdVoto' + arr.qtd++).html(totalVotos)
		}
		$('#verificar').attr('class', 'd-none')

		var divBtn = $("#button")

		divBtn.append("<button type='button' id='atualizar' class='btn btn-success text-body'>ATUALIZAR</button>")


		$('#atualizar').click(function(){
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
		
				for (let i = 0; i < data.candidatos.length; i++) {
					arr.id = (i + 1);
					arr.nome = (i + 1);
					arr.qtd = (i + 1);
		
					  id = arr[i]['id']
					nome = arr[i]['nome']  
					totalVotos = arr[i]['totalVotos']
		
					$('#idCand' + arr.id++).html(id)
					$('#nomeCand' + arr.nome++).html(nome)
					$('#qtdVoto' + arr.qtd++).html(totalVotos)
				}
				
			});
		});  


	});
});  


function enviar( id_candidato ){
	$('#candidato').val(id_candidato)
}
