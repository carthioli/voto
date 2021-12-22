
	$('.form-voto').submit(function(e){
		e.preventDefault();

		if($('#finalizar').val() == 'Finalizar...'){
			return(false);
		}
		
		$.ajax({
			url: 'valida-form.php',
			type: 'post',
			dataType: 'html',
			data: {
				'metodo': $('#metodo').val(),
				'nome': $('#nomeeleitor').val(),
				'titulo': $('#titulo').val(),
        'candidato': $('#candidato').val()
			}

		}).success(function(data){
			
			result = window.confirm(data);
			
			if (result == true) {
					$('#cancelar').click();			
			}else{
				document.location.reload(true);
			}

			$('#metodo').val('formulario-ajax');
			$('#nomeeleitor').val('');
			$('#titulo').val('');
      $('#candidato').val('');

			console.log(data)
		});
	});
	
	$('.close').click(function(e){
		$('.close').attr('data-dismiss', 'modal')
	});
	$('#cancelar').click(function(e){
			$('#cancelar').attr('data-dismiss', 'modal')
	});
	