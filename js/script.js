
var chemin = window.location.pathname


if(chemin === "/Confinement/" || chemin === "/Confinement/index.php")
{
	ajax_annonces()
}


function ajax_annonces(){

	$.ajax({
			type:"POST",
			url:"functions/function_annonces.php",

			success:function(data)
			{
				
				$(".annonces").remove()
				var nbr=0;
				for(i=0; i<Object.keys(data).length;i++)
				{
					if(data[i] =="{")
					    {
					        nbr++;
					    }
				}
				for(i=0; i < nbr; i++)
			    {	
			    	$(".liste_annonces").append("<div id='annonces"+i+"' class='annonces'</div>")
			    	$("#annonces"+i).append("<div id='utilisateur"+i+"' class='utilisateur'</div>")
			    	$("#utilisateur"+i).append("<img id='image_profil"+i+"' class='image_profil' src='img/utilisateur.png' width='125px'>")

					var result = JSON.parse(data)[i];     	
					for(j=0;j < Object.keys(result).length; j++ )
					{
						var champ = Object.keys(result)[j]
						
						if(j==1)
						{
							var nom = Object.keys(result)[j]
							var prenom = Object.keys(result)[j+1]
							var arrondissement = Object.keys(result)[j+2]
							$("#image_profil"+i).after("<p>"+result[nom]+result[prenom]+"("+result[arrondissement]+")</p>")
						}
						if(j==4)
						{
							var description = Object.keys(result)[j]
							$("#utilisateur"+i).after("<textarea disabled id='texte_description"+i+"' class='texte_description'>"+result[description]+"</textarea>")
							$("#texte_description"+i).after("<button class='envoyer' type=button name='envoyer'>envoyer</button>")
						}
					}
			    }

			}
		});
}



function ajax(){

	$.ajax({
			type:"POST",
			url: url,
			data : data,


			success:function(data)
			{
				switch (data) {
				case "Les caractères spéciaux ne sont pas acceptés":
					
					$("#erreur").append("*Les caractères spéciaux ne sont pas acceptés")
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

	$("body").on("click","#help",function(){

		if(document.querySelector('input[name=type_aide]:checked') && $("#description").val() != "")
		{
			type_aide		= document.querySelector('input[name=type_aide]:checked').value
			description		= $("#description").val();

			url="../functions/function_aide.php"
			data={type_aide: type_aide, description: description}
			ajax()
			document.location.href="../"
		}
		else
		{
			$(".form_aide form textarea").css({"border": "1px solid red"})
		}	
	});
});