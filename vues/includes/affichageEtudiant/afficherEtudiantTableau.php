<?php
$filieres = $this->lireDonnee('filiere');
$classes = $this->lireDonnee('classe');
$annees = $this->lireDonnee('annee');
$nom = $this->lireDonnee('nom');
$tableau = $this->lireDonnee('tableauRecherche');

echo "filière : ".$filieres."<br>";
echo "classe : ".$classes."<br>";
echo "année : ".$annees."<br>";
echo "nom : ".$nom."<br><br>";

?>

<html>
    <?php
    if(count($tableau)>0){
        echo '<table border="1">
            <tr>
                <th>Civilité</th>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>';
    
        for ($i=0; $i < count($tableau) ; $i++) {
            $etudiant= $tableau[$i];
            echo '<tr>
                <td>'.$etudiant["CIVILITE"].'</td>
                <td>'.$etudiant["NOM"].'</td>
                <td>'.$etudiant["PRENOM"].'</td>
            </tr>';
        } 
    }else{
        echo 'aucun résultat';
    }
        ?>
    </table>
</html>