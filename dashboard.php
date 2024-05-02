<h1>-Dashboard-</h1>
<h2>Ajouter un film :</h2>

<form action="nouveau_film.php" method="POST">
    <label for="titre">Titre:</label><br>
    <input type="text" name="titre" id="titre">
</form>
<form action="nouveau_film.php" method="POST">
    <label for="description">Description:</label><br>
    <textarea name="message" rows="8" cols="45">
    </textarea>
</form>
<form action="nouveau_film.php" method="POST">
    <label for="duree">Durée (en mn):</label><br>
    <input type="text" name="duree" id="duree">
</form>
<form action="nouveau_film.php" method="POST">
    <label for="date">Date de sortie:</label><br>
    <input type="text" name="date" id="date">
</form>

<form action="">
<label>Genre :</label><br>
        <select name="genre">
            <option value="choix1">Choix 1</option>
            <option value="choix2">Choix 2</option>
            <option value="choix3">Choix 3</option>
            <option value="choix4">Choix 4</option>
        </select>
</form>

<label>réalisateur :</label><br>
        <select name="realisateur">
            <option value="choix1">Choix 1</option>
            <option value="choix2">Choix 2</option>
            <option value="choix3">Choix 3</option>
            <option value="choix4">Choix 4</option>
        </select>
</form>


<form action="nouveau_film.php" method="POST">
    <input type="submit" value="Ajouter" />
</form>