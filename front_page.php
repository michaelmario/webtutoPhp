<div class="w3-container">
    <div id="intro">
        <div class="w3-panel w3-red">
            <h3>Exigence de base!</h3>
            <p>Avant d'approfondir le php, vous devez avoir une connaissance de base de HTML, CSS et
                JAVASCRIPT </p>
        </div>
        <div class="w3-panel">
            <ul class="w3-ul">
                <li>PHP est l'acronyme de "PHP : Hypertext Preprocessor"</li>
                <li>PHP est un langage de script open source largement utilisé</li>
                <li>Les scripts PHP sont exécutés sur le serveur</li>
                <li>PHP est gratuit à télécharger et à utiliser</li>
            </ul>
        </div>
    </div>
    <div id="baliseScript">
        <div class="w3-panel w3-card w3-light-grey">
            <h4>PHP Script Tags</h4>
            <p>Il existe plusieurs façons d'appliquer des blocs de code PHP aux documents.
                L'utilisation de la balise standard est l'approche recommandée car elle fonctionne
                dans tous les environnements PHP, quels que soient les paramètres du serveur.</p>
            <div class="w3-code htmlHigh notranslate">
                <span class="phpcolor" style="color:black">
                    <span class="phptagcolor" style="color:red">&lt;?php</span><br>
                </span>
                <span class="phptagcolor" style="color:red">?&gt;</span>
            </div>
        </div>
        <div class="w3-panel w3-card w3-light-gray">
            <h4>Règles concernant le nommage des variables</h4>
            <div class="w3-code htmlHigh notranslate">
                <span class="phpcolor" style="color:black">
                    <span class="phptagcolor" style="color:red">&lt;?php</span><br>
                </span>
                <p> $var1 = "value"; // OK</p>
                <br>
                <p>$user_1 = "value"; // OK </p>
                <br>
                <p>$1var = "value"; // Error </p>
                <br>
                <p>$|*% = "value"; // Error</p>
                <br>
                <span class="phptagcolor" style="color:red">?&gt;</span>
            </div>
            <p>PHP ignore les espaces blancs</p>
            <p>Le point-virgule termine les lignes et les instructions</p>

            <p>Le point-virgule indique au compilateur que l'instruction se termine à ce stade.
                Si vous oubliez le point-virgule,<br>
                PHP traitera tout votre code comme une instruction ou
                une expression continue jusqu'à ce qu'il rencontre un point-virgule ou la fin du
                script,
                <br>ce qui pourrait empêcher l'exécution du script.
            </p>
        </div>
        <div class="w3-panel w3-card w3-light-gray">
            <h4>Concaténation de chaînes en PHP</h4>
            <p>Nous utilisons le point (.) pour concaténer (rejoindre des chaînes ou ajouter des
                données
                variables dans des chaînes) en PHP.
                Si vous êtes familier avec JavaScript,
                il effectue la même opération d'ajout que le signe plus (+) dans JavaScript
                concernant la concaténation de chaînes.</p>
            <div class="w3-code htmlHigh notranslate">
                <span class="phpcolor" style="color:black">
                    <span class="phptagcolor" style="color:red">&lt;?php</span><br>
                </span>
                $animal_1 = "dog";<br>
                $animal_2 = "cat";<br>
                echo "A ".$animal_1." enjoys chasing a ".$animal_2;<br>
                echo 'A '.$animal_1.' enjoys chasing a '.$animal_2;<br>
                <br>
                <span class="phptagcolor" style="color:red">?&gt;</span>
            </div>
        </div>
        <div class="w3-panel w3-card w3-light-gray">
            <h4>@ Error Suppression Character</h4>
            <p>Vous pouvez trouver des scripts qui ont un symbole "@" avant certaines expressions,
                utilisé pour supprimer les messages d'erreur que l'expression peut générer.</p>
            <div class="w3-code htmlHigh notranslate">
                <span class="phpcolor" style="color:black">
                    <span class="phptagcolor" style="color:red">&lt;?php</span><br>
                </span>
                function rewriteMessage(){<br>
                return "Sample Data";
                }<br>
                $data = @rewriteMessage();
                <br>
                <span class="phptagcolor" style="color:red">?&gt;</span>
            </div>
        </div>
        <div class="w3-panel w3-card w3-light-gray">
            <h4>Code Comments in PHP</h4>
            <p>Les commentaires de code sont généralement utilisés pour vous rappeler à
                vous-même et aux autres ce que fait un script et où il le fait.</p>
            <div class="w3-code htmlHigh notranslate">
                <span class="phpcolor" style="color:black">
                    <span class="phptagcolor" style="color:red">&lt;?php</span><br>
                </span>
                // Commentaire sur une seule ligne<br>

                # Commentaire de style shell sur une seule ligne<br>
                /*<br>
                Multiligne<br>
                Commenter
                <br><br>
                */
                <br>
                <span class="phptagcolor" style="color:red">?&gt;</span>
            </div>
        </div>
    </div>
    <div id="dataType">
        <div class="w3-panel w3-card w3-light-grey">
            <h4>Data Types</h4>
            <p>Les types de données PHP sont :
                booléen(boolean), entier(integer), flottant(float), chaîne(string), tableau(array),
                objet(object), ressource, null</p>
            <p>PHP identifiera automatiquement le type de données si le développeur
                choisit de ne pas déclarer le type de données lors de
                la création d'une variable.</p>
            <div class="w3-code htmlHigh notranslate">
                <p>booléen - représente true(1) ou false(0, null)</p>
                <span class="phpcolor" style="color:black">
                    <span class="phptagcolor" style="color:red">&lt;?php</span><br>
                </span>
                $vivant = true; // laisser php décider
                $vivant = (boolean) true ; // déclaration explicite du type de données
                $vivant = (boolean) "1" ; // type cast une chaîne en booléen<br>
                $vivant = (boolean) 1 ; // type cast un entier en booléen<br>
                <span class="phptagcolor" style="color:red">?&gt;</span>
            </div>
        </div>

        <div class="w3-panel w3-card w3-light-grey">
            <h4>integer - positive/negative whole number</h4>
            <div class="w3-code htmlHigh notranslate">
                <p> $n = 3; // laisser php décider</p>
                <p> $n = (integer) 3; // explicit data type declaration</p>
                <p> $n = (integer) "3"; // type cast a string to an integer </p>
            </div>
        </div>
    </div>
    <div id="dynamiquePage">
        <div class="w3-panel w3-card w3-light-grey">
            <div class="w3-bar w3-border w3-indigo">
                <?php
                $rows = array("JavaScript", "PHP");
                $rowslength = count($rows);
                for ($x = 0; $x < $rowslength; $x++) {
                    echo ' <button type="button" class="w3-bar-item w3-button btnPage" onclick="shiftpage(this)" id='. $rows[$x] .'>' . $rows[$x] . '</button>';  }
                
               ?>
              <div class="w3-panel w3-light-grey" id="franceInfoContainer">
               <div id="output"></div>
              </div>
              <div class="w3-panel w3-light-grey" id="page2Container">
              
               <?php
$html = "";
$url = "https://www.francetvinfo.fr/sports.rss";
$xml = simplexml_load_file($url);
for($i = 0; $i < 10; $i++){
	$title = $xml->channel->item[$i]->title;
	$link = $xml->channel->item[$i]->link;
	$description = $xml->channel->item[$i]->description;
	$pubDate = $xml->channel->item[$i]->pubDate;
	
        $html .= "<a href='$link'><h5>$title</h5></a>";
	$html .= "<p>".$description."</p>";
	$html .= "<br />$pubDate<hr />";
}
echo $html;
?> 
               
              </div>    
            </div>
        </div>
    </div>
</div>