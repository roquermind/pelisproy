$(document).ready(function() {

    $(function() {

		$('#datetimepicker').datetimepicker();

	    $('.glyphicon-menu-hamburger').on('click', function() {
			if($('.menu').css('display') == 'none') {
	    		$('.menu').css('display', 'block');
	            $('fieldset div:nth-child(3)').css('z-index', '-1');
	    	} else {
	    		$('.menu').css('display', 'none');
	            $('fieldset div:nth-child(3)').css('z-index', '1');
	    	}
	    });

		$('#registro').bootstrapValidator({
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				nombre: {
					validators: {
						notEmpty: {
							message: 'El nombre es requerido.'
						},
						stringLength: {
							min: 3,
							message: 'El nombre debe contener al menos 3 caracteres.'
						},
						regexp: {
							regexp: /[a-zA-Z]/,
							message: 'El nombre solo puede contener letras.'
						}
					}
				},
				ape: {
					validators: {
						notEmpty: {
							message: 'Los apellidos son requeridos.'
						},
						stringLength: {
							min: 3,
							message: 'Los apellidos deben contener al menos 3 caracteres.'
						},
						regexp: {
							regexp: /[a-zA-Z]/,
							message: 'Los apellidos solo pueden contener letras.'
						}
					}
				},
				nick: {
					validators: {
						notEmpty: {
							message: 'El nick es requerido.'
						},
						stringLength: {
							min: 3,
							message: 'El nick debe contener al menos 3 caracteres.'
						}
					}
				},
				pass: {
					validators: {
						notEmpty: {
							message: 'El password es requerido y no puede ser vacío.'
						},
						stringLength: {
							min: 8,
							message: 'El password debe contener al menos 8 caracteres.'
						},
						identical: {
							field: 'pass2',
							message: 'El password no coincide.'
						}
					}
				},
				pass2: {
					validators: {
						notEmpty: {
							message: 'El password es requerido y no puede ser vacío.'
						},
						stringLength: {
							min: 8,
							message: 'El password debe contener al menos 8 caracteres.'
						},
						identical: {
							field: 'pass',
							message: 'El password no coincide.'
						}
					}
				},
				mail: {
					validators: {
						notEmpty: {
							message: 'El correo es requerido y no puede ser vacío.'
						},
						emailAddress: {
						 	message: 'El correo electrónico no es válido.'
						}
					}
				},
				datetimepicker: {
					validators: {
						notEmpty: {
							message: 'La fecha de nacimiento es requerida y no puede ser vacía.'
						},
						date: {
							format: 'YYYY-MM-DD',
							message: 'La fecha de nacimiento no es válida.'
						}
					}
				},
			}
		});

	});

});

function condicionesUso() {

	if(!document.querySelector('input[type="checkbox"]').checked) {
		$('.alert').css('display', 'block');
	} else {
		document.registro.reset();
		$('.alert').css('display', 'none');
	}

}

