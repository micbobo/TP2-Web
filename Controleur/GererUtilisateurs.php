<?php
class GererUtilisateurs {
    function __construct($method,$pos,$post,$bd){
        session_start();
        $this->vue = new FacadeVue();
        if($post){
            $this->ConnectUsager($bd);
        }else{
            $this->ShowLogin();
        }

    }
    function ShowLogin(){
        $this->vue->ShowContent('VueLogin');
    }

    function Load_Modele()
    {
        include_once("Modele/Login.php");
        $this->Modele = new LoginModele();
    }

    function ConnectUsager($bd){
        include_once("Modele/Login.php");
        $this->Modele = new LoginModele('Connection',$bd);
    }
}