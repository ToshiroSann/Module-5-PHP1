<form action="./form1results.php" method="GET">
    <div>
        <input required id="first" type="text" placeholder="Voornaam" name="voornaam">
        <input type="text" placeholder="Tussenvoegsel" name="tussenvoegsel">
        <input required type="text" placeholder="Achternaam" name="achternaam">
    </div>

    <div>
        <input required type="text" placeholder="Leeftijd" name="leeftijd">
    </div>

    <select id="second" type="checked" placeholder="Kleur" name="color">

        <option selected disabled value="">Kleur</option>
        <option value="blue">Blauw</option>
        <option value="green">Groen</option>
        <option value="yellow">Geel</option>
        <option value="red">Rood</option>
        <option value="orange">Oranje</option>
        <option value="purple">Paars</option>

    </select>
    <input type="submit" value="Submit" name="submit">
</form>