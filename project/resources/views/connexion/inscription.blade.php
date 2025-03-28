<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Combiné</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-switch {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2 class="text-center" id="form-title">Inscription</h2>
            <form id="authForm">
                <div id="register-fields">
                    <div class="form-group">
                        <label for="register-name">Nom</label>
                        <input type="text" class="form-control" id="register-name" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="register-email">Email</label>
                        <input type="email" class="form-control" id="register-email" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="register-password">Mot de passe</label>
                        <input type="password" class="form-control" id="register-password" placeholder="Entrez votre mot de passe">
                    </div>
                </div>
                <div id="login-fields" style="display: none;">
                    <div class="form-group">
                        <label for="login-email">Email</label>
                        <input type="email" class="form-control" id="login-email" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="login-password">Mot de passe</label>
                        <input type="password" class="form-control" id="login-password" placeholder="Entrez votre mot de passe">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" id="submit-button">S'inscrire</button>
            </form>
            <div class="form-switch">
                <p id="switch-text">Déjà inscrit? <a href="#" id="switch-link">Connexion</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
         var registerFields = document.getElementById('register-fields');
            var loginFields = document.getElementById('login-fields');
            var formTitle = document.getElementById('form-title');
            var submitButton = document.getElementById('submit-button');
            var switchText = document.getElementById('switch-text');

            switchText.onclick=function(){
                if(registerFields.style.display==='none'){
                    registerFields.style.display='block';
                    loginFields.style.display='none';
                    formTitle.textContent="inscription";
                    submitButton.textContent="S'inscrire";
                     switchText.innerHTML = 'Déjà inscrit? <a href="" id="switch-link">Connexion</a>'
                    

                }
                else{
                    registerFields.style.display="none"  ; 
                    loginFields.style.display='block';    
                    formTitle.textContent="connexion";
                    submitButton.textContent="Connecter";
                switchText.innerHTML = "Pas encore inscrit? <a href='' id='switch-link'>Inscription</a>";

                         }

            }
        

        document.getElementById('authForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var formTitle = document.getElementById('form-title').textContent;
            if (formTitle === 'Inscription') {
                // Handle registration form submission
                var name = document.getElementById('register-name').value;
                var email = document.getElementById('register-email').value;
                var password = document.getElementById('register-password').value;

                if (!name || !email || !password) {
                    alert('Veuillez remplir tous les champs.');
                    return;
                }

                alert('Inscription réussie!');
            } else {
                // Handle login form submission
                var email = document.getElementById('login-email').value;
                var password = document.getElementById('login-password').value;

                if (!email || !password) {
                    alert('Veuillez remplir tous les champs.');
                    return;
                }

                alert('Connexion réussie!');
            }
        });
    </script>
</body>
</html>