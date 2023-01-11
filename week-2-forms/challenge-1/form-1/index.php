<form action="./form1results.php" method="GET">
                <div>
                    <input required id="first" type="text" placeholder="Voornaam" class="box" name="voornaam">
                    <input type="text" placeholder="Tussenvoegsel" class="box" name="tussenvoegsel">
                    <input required type="text" placeholder="Achternaam" class="box" name="achternaam">
                </div>

                <div>
                    <input required type="text" placeholder="Leeftijd" class="box" name="leeftijd">
                </div>

                <select id="second" type="checked" placeholder="Kleur" class="box" name="color">
               
                <option  value="blue">Blauw</option>
                <option  value="green">Groen</option>
                <option  value="yellow">Geel</option>
                <option  value="red">Rood</option>
                <option  value="orange">Oranje</option>
                <option  value="purple">Paars</option>

                </select>
                <input type="submit" value="Submit" name="submit">
            </form>