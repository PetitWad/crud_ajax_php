  $(document).ready(function() {
    $('#submitLog').submit(function(e) {
      e.preventDefault(); // Empêche la soumission du formulaire

      var fullName = $('#fullName').val();
      var email = $('#email').val();

      $.ajax({
        type: 'POST',
        url: 'http://localhost/challenge_atalou/controllers/logController.php', // Fichier PHP qui traitera la demande
        data: {
          fullName: fullName,
          email: email
        },
        success: function(response) {
          if (response === 'success') {
            alert('Connexion réussie');
            // Redirection ou autre traitement après la connexion réussie
            window.location.href ="http://localhost/challenge_atalou/views/userView.php";
            
          } else {
            // Afficher une erreur de connexion
            alert('Nom d\'utilisateur ou mot de passe incorrect');
            $("#submitLog")[0].reset();
          }
        }
      });
    });
  });