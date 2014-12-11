<?php
    class LoginModele
    {
        function __construct($method,$bd)
        {
            $this->$method($bd);
        }

        function Connection($bd)
        {
            $username = $_POST['txtUsername'];
            $password = $_POST['txtPassword'];
            if ((isset($_POST['txtPassword'])) && (isset($_POST['txtUsername']))){
                $query = "SELECT * FROM Utilisateurs";
                foreach($bd->query($query)as $row){
                    if ($row['UtilisateurMDP' === $password] && $row['UtilisateurEmail'] === $username){
                        $_SESSION['UID'] = $row['UtilisateurID'];
                        $_SESSION['URole'] = $row['UtilisateurRole'];
                        $_SESSION['UNbJetons'] = $row['UtilisateurNbJetons'];
                    }
                }
            }
            if($_SESSION['URole'] == 0) {
          //      include("Controleur/GererUtilisateurs.php");
           //     $control = new GererUtilisateurs($path, $pos, $post, $bd);
            }else{
            //    include("Controleur/VoirParties.php");
            //    $control = new VoirParties($path, $pos, $post, $bd);
            }
        }

    }


?>