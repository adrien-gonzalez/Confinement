

getMessages();

function getMessages(){

  // 1. Elle doit créer une requête AJAX pour se connecter au serveur, et notamment au fichier handler.php
  const requeteAjax = new XMLHttpRequest();
  requeteAjax.open("GET", "../functions/messagerie.php");

  // 2. Quand elle reçoit les données, il faut qu'elle les traite (en exploitant le JSON) et il faut qu'elle affiche ces données au format HTML
  requeteAjax.onload = function(){
    const resultat = JSON.parse(requeteAjax.responseText);
    const html = resultat.reverse().map(function(message){
      return `
        <div class="message">
          <span class="date">${message.created_at.substring(11, 16)}</span>
          <span class="author">${message.author}</span> : 
          <span class="content">${message.content}</span>
        </div>
      `
    }).join('');

    const messages = document.querySelector('.messages');
    messages.innerHTML = html;
    messages.scrollTop = messages.scrollHeight;
}

  // 3. On envoie la requête
  requeteAjax.send();
}


function ajax_envoie(){


  $.ajax({
      type:"POST",
      url: url,
      data : data,

      success:function(data)
      {

        console.log(data)
      }



  });
}

$(document).ready(function(){
  $("body").on("click","#messages_send",function(){
  
  var author = $("#author").val()
  var content = $("#content").val()

  if($("#content").val()!= ""){

    data={author: author, content: content}
    url="../functions/messagerie.php"
    ajax_envoie()
    $("#content").val("")
    getMessages()
  }
  
  });
});

