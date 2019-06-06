(function() 
{
	'use strict'

	window.addEventListener('load', function () 
	{
		//Testa os elementos que serão validados
		var forms = document.getElementsByClassName('needs-validation')

		//Cancela submissão em caso de erro nos campos
		Array.prototype.filter.call(forms, function (form) 
		{
			form.addEventListener('submit', function (event)
			{
				if (form.checkValidity() === false) 
				{
					event.preventDefault()
					event.stopPropagation()
				}
				form.classList.add('was-validated')
			}, false)
		})
	}, false)
}())
