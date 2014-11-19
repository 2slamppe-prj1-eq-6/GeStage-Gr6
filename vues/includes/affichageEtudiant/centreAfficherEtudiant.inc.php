<html>
    <form method="post" action=".?controleur=AffichageEtudiant&action=rechercherUnEtudiant" name="surchUser">
        <fieldset>
            <div id="top">
                <div id="titre">
                    <h3>Afficher les éleves d'une classe :</h3>
                </div>
                <div id="annee">
                    <label>Année :</label>
                    <select id="annee" name="annee">
                        <?php
        //création du contenu du select pour les spécialités des étudiants
                        foreach ($this->lireDonnee('lesAnnees') as $annees) {
                            echo'<option value="' . $annees->getAnneescol() . '">' . $annees->getAnneescol() . '</option>'; //echo de la ligne 
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div id="centre">
                <div id="filiere">
                    <label>Filière :</label>
                    <select id="filiere" name="filiere">
                        <?php
        //création du contenu du select pour les spécialités des étudiants
                        foreach ($this->lireDonnee('lesFiliere') as $filieres) {
                            echo'<option name="lesFilieres" value="'. $filieres->getId() . '">' . $filieres->getLibelle() . '</option>'; //echo de la ligne 
                        }
                        ?>
                    </select>
                </div>
                <div id="classe">
                    <label>Classe :</label>
                    <select id="classe" name="classe">
                        <?php
        //création du contenu du select pour les spécialités des étudiants
                        foreach ($this->lireDonnee('lesClasses') as $classes) {
                            echo'<option class="optionFiliere" value="' . $classes->getNumfiliere() .'-'. $classes->getNumclasse() . '">' . $classes->getNumclasse() . '</option>'; //echo de la ligne 
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div id="bot">
                <div id="typeRecherche">
                    <label>Rechercher un élève par nom:</label>
                    <input type="text" name="nom">
                </div>
                <input type="submit" id="button-creer" value="Rechercher">
            <!-- OnClick éxécutera le JS qui testera tout les champ du formulaire. -->
        </fieldset>
    </form>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript">
        
        var options = document.getElementsByTagName('option');
        var ok = true;
        for(var no=0;no<options.length;no++){
            if(options[no].className=='optionFiliere'){ // on cible les options dont la class est 'optionFiliere'
                options[no].style.display = "none"; // on les masque tous
                if(options[no].value.indexOf($("#filiere option:selected").val()+"-") > -1){
                    if(ok){
                        options[no].selected='selected';
                        ok = false;
                    }
                    options[no].style.display = "block";
                }
            }
        }
       
        $( "#filiere" ).change(function (){
            var options = document.getElementsByTagName('option');
            var ok = true;
            for(var no=0;no<options.length;no++){
                if(options[ no].className=='optionFiliere'){ // on cible les options dont la class est 'optionFiliere'
                    options[ no].style.display = "none"; // on les masque tous
                    if(options[ no].value.indexOf($("#filiere option:selected").val()+"-") > -1){
                        if(ok){
                            options[no].selected='selected';
                            ok = false;
                        }
                        options[ no].style.display = "block";
                    }
                }
            }
        });
    </script>
</html>