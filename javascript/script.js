$('#finalizar').click(function(){
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
$('#verificar').click(function(){
	enviarPost()
});
$('#confirma').click(function(){
	
	var eleitor = $('#nomeeleitor').val()
	var titulo = $('#titulo').val()
	var candidato = $('#candidato').val()
	mostraValorConfirma(eleitor, titulo, candidato)
});
$('#cancelar').click(function(){
	limparCampos('#cancelar')
	
})
$('#close').click(function(){
	limparCampos('#close')
})
function enviar( id_candidato ){
	$('#candidato').val(id_candidato)
}
function enviarPost(){
	$.ajax({
		url: 'BuscaApuracao.php',
		type: 'post',
		dataType: 'json',
		data: {
			'busca' : true
		}
	}).success(function(data){
		mostraSuccess(data)
	});
}
function criaDivMostra(){
	var criaDiv = $('#mostraResult')
	criaDiv.append("<div id='mostra' class='h-100 '>")
}
function mostraSuccess(data){
	$('#mostra').remove()
	mostraResultWin(data)
	mostraDivMostra(data)
}
function mostraResultWin(data){
	$('#total').html(data.busca)
	$('#nomeMaisVotado').html(data.ultimoMaisVotado['nome'])
	$('#qtdVotosMaisVotado').html(data.ultimoMaisVotado['id_candidato'])
}
function mostraDivMostra(data){
	criaDivMostra()
	montaDivMostra(data)
}
function mostraValorConfirma(eleitor, titulo, candidato){
	$("#mostraeleitor").html("Eleitor: " + eleitor);
	$("#mostratitulo").html("Titulo: " + titulo);
	$("#mostracandidato").html("Candidato: " + candidato);
}
function montaDivMostra(data){
	var arr = data.candidatos		
	insereResultCampos(data, arr)
}
function montaCamposMostra(divPai){
	var divPai = $('#mostra')
	divPai.append("<label class='float-left ml-5 mr-5'>ID:</label><p id='idCand'></p>")
	divPai.append("<label class='float-left'>CANDIDATO:</label><p id='nomeCand' class='text-uppercase'></p>")
	divPai.append("<label class='float-left'>TOTAL VOTO:</label><p id='qtdVoto' class='border-bottom'></p>") 
}
function insereResultCampos(data, arr){
	for (let i = 0; i < data.candidatos.length; i++) {

		montaCamposMostra()

		arr.id = (i + 1);
		arr.nome = (i + 1);
		arr.qtd = (i + 1);

		id = arr[i]['id']
		nome = arr[i]['nome']  
		totalVotos = arr[i]['totalVotos']

		$('#idCand').attr('id', 'idCand' + arr.id++)
		$('#nomeCand').attr('id', 'nomeCand' + arr.nome++)
		$('#qtdVoto').attr('id', 'qtdVoto' + arr.qtd++)

		arr.id = (i + 1);
		arr.nome = (i + 1);
		arr.qtd = (i + 1);		

		$('#idCand' + arr.id++).html(id)
		$('#nomeCand' + arr.nome++).html(nome)
		$('#qtdVoto' + arr.qtd++).html(totalVotos)
	}
}
function limparCampos(id){
	$('#metodo').val('formulario-ajax');
	$('#nomeeleitor').val('');
	$('#titulo').val('');
	$('#candidato').val('');
	$(id).attr('data-dismiss', 'modal')
}
