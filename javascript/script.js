
	$('#form-voto').submit(function(e){
		e.preventDefault();
		
		if($('#finalizar').val() == 'Finalizar...'){
			return(false);
		}
		
		$('#finalizar').val('Finalizar...');
		
		$.ajax({
			url: 'valida-form.php',
			type: 'post',
			dataType: 'html',
			data: {
				'metodo': $('#metodo').val(),
				'nome': $('#nomeeleitor').val(),
        'candidato': $('#candidato').val()
			}
		}).done(function(data){
			
			alert(data);
			
			$('#Finalizar').val('Finalizar');
			$('#metodo').val('formulario-ajax');
			$('#nomeeleitor').val('');
      $('#candidato').val('');
			console.log(data)
		});
		
	});