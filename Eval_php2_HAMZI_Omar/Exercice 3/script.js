$(function(){

	$('form').submit(function(){
		event.preventDefault();
		$.ajax({
			url:'ajax.php',
			method:'POST',
			data:{

				marque:$('#marque').val(),
				modele:$('#modele').val(),
                couleur:$('#couleur').val(),
                annee :$('#annee').val(),

			// apres avoir rentrées les valeurs , on testera via le formulaire

			}
		})
		.done(function(){
			$('#message').html('<div class="alert alert-success"><strong>Success!</strong> Vehicule enregistré.</div>');
		})
		.fail(function(){
			$('#message').html('<div class="alert alert-danger"><strong>Danger!</strong> Vehicule non ajouté.</div>');
		})

	});


})
