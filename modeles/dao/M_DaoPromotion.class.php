<?php

class M_DaoPromotion extends M_DaoGenerique {


    function __construct() {
        $this->nomTable = "PROMOTION";
    }

    /**
     * Redéfinition de la méthode abstraite de M_DaoGenerique
     * Permet d'instancier un objet d'après les valeurs d'un enregistrement lu dans la base de données
     * @param tableau-associatif $unEnreg liste des valeurs des champs d'un enregistrement
     * @return objet :  instance de la classe métier, initialisée d'après les valeurs de l'enregistrement 
     */
    public function enregistrementVersObjet($enreg) {
        $retour = new M_Promotion($enreg['ANNEESCOL'], $enreg['IDPERSONNE'], $enreg['NUMCLASSE']);
        return $retour;
    }

    /**
     * Prépare une liste de paramètres pour une requête SQL UPDATE ou INSERT
     * @param Object $objetMetier
     * @return array : tableau ordonné de valeurs
     */
    public function objetVersEnregistrement($objetMetier) {
        // construire un tableau des paramètres d'insertion ou de modification
        // l'ordre des valeurs est important : il correspond à celui des paramètres de la requête SQL
        $retour = array(
            ':anneescol' => $objetMetier->getAnneescol(),
            ':idpersonne' => $objetMetier->getIdpersonne(),
            ':numclasse' => $objetMetier->getNumclasse(),
        );
        return $retour;
    }

    public function insert($objetMetier) {
        return FALSE;
    }

    public function update($idMetier, $objetMetier) {
        return FALSE;
    }
    
    function searchStudent($annee, $nom, $classe) {
        $retour = null;
        // Requête textuelle
        $sql = "SELECT CIVILITE ,NOM ,PRENOM ";
        $sql .= "FROM PROMOTION PR ";
        $sql .= "INNER JOIN PERSONNE PE ON PE.IDPERSONNE = PR.IDPERSONNE ";
        $sql .= "WHERE PE.NOM LIKE '%$nom%' ";
        $sql .= "AND PR.ANNEESCOL='$annee' AND NUMCLASSE='$classe';";
        try {
            // préparer la requête PDO
            $queryPrepare = $this->pdo->prepare($sql);
            // exécuter la requête PDO
            if ($queryPrepare->execute()) {
                // si la requête réussit :
                // initialiser le tableau d'objets à retourner
                $retour = array();
                // pour chaque enregistrement retourné par la requête
                while ($enregistrement = $queryPrepare->fetch(PDO::FETCH_ASSOC)) {
                    // ajouter l'objet au tableau
                    $retour[] = $enregistrement;
                }
            }
        } catch (PDOException $e) {
            echo get_class($this) . ' - ' . __METHOD__ . ' : ' . $e->getMessage();
        }
        return $retour;
    }

}


