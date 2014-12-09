<?php
class Login {

    function __construct(){
        $this->vue = new FacadeVue();

        //call au modele
        $name = 'asas'; // call de bd

        $data = array(
            'name' => 'Bobo baggins',
            'password' => 'qwerty',
            'users' => "<tr style='background-color:red;'><td>$name</td></tr>"
        );
        echo "hey oh";
        $this->vue->ShowContent('VueLogin',$data);
    }

    private $perso;

    function Load_Modele()
    {
        include_once("Modele/Login.php");
        $this->Modele = new LoginModele();
    }

    function CallFacade(){

    }
}