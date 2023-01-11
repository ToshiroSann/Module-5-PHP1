<form action="./thank-you.php" onsubmit="return proceedcheckout(this)">
                <div class="name-flex">
                    <input required id="first" type="text" placeholder="Voornaam" class="box" name="voornaam">
                    <input type="text" placeholder="Tussenvoegsel" class="box" name="Tussenvoegsel">
                    <input required type="text" placeholder="Achternaam" class="box" name="achternaam">
                </div>

                <div class="name-flex">
                    <input required type="text" placeholder="leeftijd" class="box">
                </div>

                <select id="second" type="checked" placeholder="Kleur" class="box">
               
                <option value="1">Blauw</option>
                <option value="2">Groen</option>
                <option value="3">Geel</option>
                <option value="4">Rood</option>
                <option value="5">Oranje</option>
                <option value="6">Paars</option>

                </select>
                <input type="submit" class="order-button" value="Submit" name="submit">
            </form>