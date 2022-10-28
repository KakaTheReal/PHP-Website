<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-with, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <title>Kaïs Difallah</title>
    <link rel="stylesheet" href="css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head> 
<body>
    <div class="container-fluid">
        <div class="carte" data-tilt>
            <p>Veuillez entrer vos informations</p>
            <br>
            <form method="post" action="confirm.php">
                <div class="input-group">
                    <span class="input-group-text">Prénom | Nom</span>
                    <input type="text" class="form-control" name="prenom" required>
                    <input type="text" class="form-control" name="nom" required>
                </div>
                <br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping inputGroupPrepend2">@</span>
                    <input type="email" class="form-control" placeholder="E-MAIL" name="email" required>
                </div>
                <br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Tel</span>
                    <input type="text" class="form-control" placeholder="Téléphone" aria-label="Username" name="tel" required>
                </div>
                <button style="border:none" class="bouton">Envoyer</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js\vanilla-tilt.js"></script>
</body>
</html>
