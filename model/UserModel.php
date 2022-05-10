<?php
    
    require_once('manager.php');
    
    class UserManager extends Manager {


        public function getUsers() {

            $bdd = $this->connexion();

            $requete = $bdd->query('SELECT * FROM users');

            return $requete;

        }
    }    