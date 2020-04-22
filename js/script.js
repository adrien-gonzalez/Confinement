// INSCRIPTION

function ajax(){

	$.ajax({
			type:"POST",
			url: url,
			data : data,


			success:function(data)
			{
				console.log(data)
				switch (data) {
				case "Les caractères spéciaux ne sont pas acceptés":

					document.getElementById("login").placeholder = '*Les caractères spéciaux ne sont pas acceptés'
					break

				case "utilisateur existant":

					$("#login").val("");
					document.getElementById("login").placeholder = '*Un compte avec ce login existe déjà'
					$('#login').css({"border":"1px solid #C0392B"})
					document.getElementById("login").className="erreur"	
					break

				case "Login trop court":

					$("#login").val("");
					document.getElementById("login").placeholder = '*Login trop court'
					$('#login').css({"border":"1px solid #C0392B"})
					document.getElementById("login").className="erreur"
					break

				case "Cet email est déjà utilisé":

					$("#email").val("");
					document.getElementById("email").placeholder = '*Cet email est déjà utilisé'
					$('#email').css({"border":"1px solid #C0392B"})
					document.getElementById("email").className="erreur"
					break

				case "Mot de passe trop court":

					$("#password").val("");
					document.getElementById("password").placeholder = '*Mot de passe trop court'
					$('#password').css({"border":"1px solid #C0392B"})
					document.getElementById("password").className="erreur"
					break

				case "Mots de passe différents":

					$("#password2").val("");
					document.getElementById("password2").placeholder = '*Les mots de passe ne correspondent pas'
					$('#password2').css({"border":"1px solid #C0392B"})
					document.getElementById("password2").className="erreur"
					break

				case "Inscrit":

					// REDIRECTION
					break
				}
			}
		});
}

// CLIQUE SUR LE BOUTON INSCRIPTION
$(document).ready(function(){
	$("body").on("click","#register",function(){

		if($("#nom").val() !="" && $("#prenom").val() !="" && $("#login").val() !="" && $("#email").val() !="" && $("#password").val() !="" && $("#password2").val() !="" && $("#adresse").val() !="" )
		{
			nom        = $("#nom").val();
			prenom     = $("#prenom").val();
			login  	   = $("#login").val();
			email      = $("#email").val();
			arrondissement	   = $("#arrondissement").val();
			password   = $("#password").val();
			password2  = $("#password2").val();
				
			url="../functions/function_register.php"
			data={nom: nom, prenom: prenom, login: login, email: email, arrondissement: arrondissement, password: password, password2: password2}
			ajax()
		}
	});
});