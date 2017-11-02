<?php
    function displaytache()
    {
        global $stmt;
        global $bdd;
        $stmt = $bdd->query('SELECT * FROM tache');
        while ($row = $stmt->fetch())
        {
            echo "<h1 class=\"display-3\">" . $row['labeltache'] . " </h1>";
            echo "<p class=\"lead\">" . $row['description'] . "</p>";
            echo "<form action=\"\" method=\"post\"> 
            <button type=\"submit\" name=\"delete\" value=\"" . $row['tacheid'] . "\" class=\"btn btn-danger\">Delete</button>
            </form>";
            echo "<button id=\"boutton-display\" class=\"btn btn-warning\">Edit</button>";
          //  echo "<p id=\"content-display\"> coucou </p>";
            echo "<hr class=\"my-4\">";
        }  
    }
?>