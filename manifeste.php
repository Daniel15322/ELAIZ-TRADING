<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manifeste.css">
    <title>Tableau de Gestion</title>
</head>
<body>
<section class="manifeste">
    <h1><span>M</span>anifeste  de l'<span>A</span>gence</h1>
    <header>
<ul class="menu">
    <a href="index.html">ACCUEIL</a>
    <a href="Facultés.html">NOS AGENCES</a>
    <a href="c.html">SERVICES</a>
    <a href="Temoignage.html">EVALUATIONS</a>
    <a href="contact.php">SECRETARIAT</a>
</ul>
</header>
    <table id="tableau">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Post-nom</th>
                <th>Prénom</th>
                <th>Nombre de Colis</th>
                <th>Numéro de Téléphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <form id="formulaire">
        <input type="text" id="nom" placeholder="Nom du client" required>
        <input type="text" id="postNom" placeholder="Post-nom" required>
        <input type="text" id="prenom" placeholder="Prénom" required>
        <input type="number" id="nombreColis" placeholder="Nombre de Colis" required>
        <input type="text" id="numeroTelephone" placeholder="Numéro de Téléphone" required>
        <button type="submit">Ajouter</button>
    </form>
    </section>
    <script src="manifeste.js"></script>
    <div class="copyright">
        <p> © copyright 2024 <a href="#">Elaiz</a> Tout droit reservé</p>
    </div>
</body>
</html>
