document.getElementById('formulaire').addEventListener('submit', function(e) {
    e.preventDefault();

    const nom = document.getElementById('nom').value;
    const postNom = document.getElementById('postNom').value;
    const prenom = document.getElementById('prenom').value;
    const nombreColis = document.getElementById('nombreColis').value;
    const numeroTelephone = document.getElementById('numeroTelephone').value;

    const tableauBody = document.querySelector('#tableau tbody');
    const nouvelleLigne = document.createElement('tr');

    nouvelleLigne.innerHTML = `
        <td>${nom}</td>
        <td>${postNom}</td>
        <td>${prenom}</td>
        <td>${nombreColis}</td>
        <td>${numeroTelephone}</td>
        <td>
            <button class="modifier">Modifier</button>
            <button class="supprimer">Supprimer</button>
        </td>
    `;

    tableauBody.appendChild(nouvelleLigne);

    document.getElementById('formulaire').reset();

    ajouterEvenements(nouvelleLigne);
});

function ajouterEvenements(ligne) {
    const boutonModifier = ligne.querySelector('.modifier');
    const boutonSupprimer = ligne.querySelector('.supprimer');

    boutonModifier.addEventListener('click', function() {
        const cellules = ligne.querySelectorAll('td');
        document.getElementById('nom').value = cellules[0].textContent;
        document.getElementById('postNom').value = cellules[1].textContent;
        document.getElementById('prenom').value = cellules[2].textContent;
        document.getElementById('nombreColis').value = cellules[3].textContent;
        document.getElementById('numeroTelephone').value = cellules[4].textContent;

        ligne.remove();
    });

    boutonSupprimer.addEventListener('click', function() {
        ligne.remove();
    });
}
