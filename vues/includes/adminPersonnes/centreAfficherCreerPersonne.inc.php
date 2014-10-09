<!-- VARIABLES NECESSAIRES -->
<!-- $this->message : à afficher sous le formulaire -->
<?php 

$unUtilisateur = $this->lireDonnee('utilisateur');
//var_dump($unUtilisateur);die();
?>
    <h1>Informations personnelles</h1>
    <fieldset>
        <legend>Informations</legend>
        <?php
            if (!is_null($this->lireDonnee('message'))) {
                echo "<strong>".$this->lireDonnee('message')."</strong>";
            }else{
                echo '<label for="id">ID Personne :</label>
                    <input type="text" readonly="readonly" name="id" id="id" value="'; if(!is_null($unUtilisateur->getId())){echo $unUtilisateur->getId();}; echo '"></input><br/>
                    <label for="role">Role :</label>
                    <input type="text" readonly="readonly" name="role" id="role" value="'; if(!is_null($unUtilisateur->getRole()->getLibelle())){echo $unUtilisateur->getRole()->getLibelle();}; echo '"></input><br/>
                    <label for="civilite">Civilit&eacute; :</label>
                    <input type="text" readonly="readonly" name="civilite" id="civilite" value="'; if(!is_null($unUtilisateur->getCivilite())){echo $unUtilisateur->getCivilite();}; echo '"></input><br/>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" readonly="readonly" value="'; if(!is_null($unUtilisateur->getNom())){echo $unUtilisateur->getNom();}; echo '"></input><br/>
                    <label for="prenom">Pr&eacute;nom :</label>
                    <input type="prenom" name="prenom" id="mdp" readonly="readonly" value="'; if(!is_null($unUtilisateur->getPrenom())){echo $unUtilisateur->getPrenom();}; echo '"></input><br/>
                    <label for="mail">E-Mail :</label>
                    <input type="text" name="mail" id="mail" readonly="readonly" value="'; if(!is_null($unUtilisateur->getMail())){echo $unUtilisateur->getMail();}; echo '"></input><br/>
                    <label for="tel">Tel :</label>
                    <input type="text" name="tel" id="tel" readonly="readonly" value="'; if(!is_null($unUtilisateur->getNumTel())){echo $unUtilisateur->getNumTel();}; echo '"></input><br/>
                    <label for="tel">Tel portable:</label>
                    <input type="text" name="telMobile" id="telMobile" readonly="readonly" value="'; if(!is_null($unUtilisateur->getMobile())){echo $unUtilisateur->getMobile();}; echo '"></input><br/>
                    <label for="etudes">Etudes :</label>
                    <input type="text" name="etudes" id="etudes" readonly="readonly" value="'; if(!is_null($unUtilisateur->getEtudes())){echo $unUtilisateur->getEtudes();}; echo '"></input><br/>
                    <label for="formation">Formation :</label>
                    <input type="text" name="formation" id="formation" readonly="readonly" value="'; if(!is_null($unUtilisateur->getFormation())){echo $unUtilisateur->getFormation();}; echo '"></input><br/>
                    <label for="specialite">Sp&eacute;cialit&eacute; :</label>
                    <input type="text" readonly="readonly" name="specialite" id="specialite" value="'; if(!is_null($unUtilisateur->getSpecialite())){echo $unUtilisateur->getSpecialite()->getLibelleLong();}; echo '"></input><br/>';
            }
        ?>
    </fieldset>
