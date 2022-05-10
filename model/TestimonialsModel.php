<?php
    
    require_once('manager.php');
    
    class TestimoniolManager extends Manager{


        public function getTestimonials() {

            $bdd = $this->connexion();
            
            $requete = $bdd->query('SELECT * FROM notis');

            return $requete;

        }
    }    