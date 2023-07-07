$(document).ready(function() {
  $('#submit').submit(function(e) {
    e.preventDefault(); // Empêche la soumission du formulaire

    var fullName = $('#fullName').val();
    var email = $('#email').val();
    var role = $('#role').val();
    var state = $('#state').val();

    $.ajax({
      type: 'POST',
      url: 'http://localhost/challenge_atalou/controllers/insertUser.php', // Fichier PHP qui traitera la demande
      data: {
        fullName: fullName,
        email: email,
        role: role,
        state: state
      },
      success: function(response) {
        if (response === 'success') {
          alert('Inserted successfully');
          
        } else {
          // Afficher une erreur de connexion
          alert('Sorry the user is already in the database');
          $("#submitLog")[0].reset();
        }
      }
    });
  });
});