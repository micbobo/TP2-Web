<?php
class Login {
    function __construct($method,$pos,$post,$bd){
        session_start();
        $this->vue = new FacadeVue();
        if($post){
            $this->ConnectUsager($bd);
        }else{
            $this->ShowLogin();
        }
        //call au modele
        $name = 'asas'; // call de bd

        $data = array(
            'name' => 'Bobo baggins',
            'password' => 'qwerty',
            'users' => "<tr style='background-color:red;'><td>$name</td></tr>"
        );

    }
    function ShowLogin(){
        $this->vue->ShowContent('VueLogin');
    }

    function Load_Modele()
    {
        include_once("Modele/Login.php");
        $this->Modele = new LoginModele();
    }

    function ConnectUsager($bd)
    {
        include_once("Modele/Login.php");
        $this->Modele = new LoginModele('Connection', $bd);
        if ($_SESSION['UID'] > 0) {
            if ($_SESSION['URole'] == 0) {
                $this->vue->ShowContent('VueGererUtilisateurs');
            } else {
                $this->vue->ShowContent('VueMises');
            }
        }
    }
}

