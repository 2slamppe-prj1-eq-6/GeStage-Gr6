<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of C_Administrateur
 *
 * @author btssio
 */
class C_AffichageEtudiant extends C_ControleurGenerique{
    
    function selectionnerAfficherEtudiant(){
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('titreVue', 'selection d\'un etudiant');  
          
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));    
        $this->vue->ecrireDonnee('centre', "../vues/includes/affichageEtudiant/centreAfficherEtudiant.inc.php");
        
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $pdo = $daoPers->getPdo();
       
        // Mémoriser la liste des spécialités disponibles
        $daoFiliere = new M_DaoFiliere();
        $daoFiliere->setPdo($pdo);
        $this->vue->ecrireDonnee('lesFiliere', $daoFiliere->getAll());
        
        $daoAnnee = new M_DaoAnnee();
        $daoAnnee->setPdo($pdo);
        $this->vue->ecrireDonnee('lesAnnees', $daoAnnee->getAll());
        
        $daoClasse = new M_DaoClasse();
        $daoClasse->setPdo($pdo);
        $this->vue->ecrireDonnee('lesClasses', $daoClasse->getAll());
        
        $this->vue->afficher();
    }
    
    function rechercherUnEtudiant(){
        $this->vue = new V_Vue("../vues/templates/template.inc.php");
        $this->vue->ecrireDonnee('titreVue', 'Recherche d\'un etudiant');  
          
        $this->vue->ecrireDonnee('loginAuthentification',MaSession::get('login'));    
        $this->vue->ecrireDonnee('centre', "../vues/includes/affichageEtudiant/afficherEtudiantTableau.php");
        
        $daoPers = new M_DaoPersonne();
        $daoPers->connecter();
        $pdo = $daoPers->getPdo();
        
        $daoFiliere = new M_DaoFiliere();
        $daoFiliere->setPdo($pdo);
        
        $daoPromotion = new M_DaoPromotion();
        $daoPromotion->setPdo($pdo);
                
        $annee= $_POST["annee"];
        $filiere= $_POST["filiere"];
        $classe= substr($_POST["classe"],2);
        $nom = $_POST["nom"];
        
        $this->vue->ecrireDonnee('annee', $annee);
        $this->vue->ecrireDonnee('nom', $nom);
        $this->vue->ecrireDonnee('filiere', $daoFiliere->getOneById($filiere)->getLibelle());
        $this->vue->ecrireDonnee('classe', $classe);
        
        $tableau = $daoPromotion->searchStudent($annee, $nom, $classe);
        $this->vue->ecrireDonnee('tableauRecherche',$tableau);
        
        $this->vue->afficher();
    }
}

