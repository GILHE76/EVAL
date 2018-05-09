<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 07/05/2018
 * Time: 13:54
 */


class Chat
{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;


    public function __construct($prenom, $age, $couleur, $sexe, $race)
    {
        $this->prenom = $prenom;
        $this->age = $age;
        $this->couleur = $couleur;
        $this->sexe = $sexe;
        $this->race = $race;

    }

    private function setPrenom($prenom){

        if($prenom > 3 && $prenom < 20) {
            $this->prenom = $prenom;
            return $this;
        } else {
            echo "Le prenom doit contenir entre 3 et 20 charactères.";
        }
    }
    private function setAge($age){
        if(is_int($age)) {
            $this->age = $age;
            return $this;
        } else {
            echo "L'âge doit être un nombre.";
        }
    }

    private function setCouleur($couleur){
        if($couleur > 3 && $prenom < 10) {
            $this->couleur = $couleur;
            return $this;
        } else {
            echo "La couleur doit contenir entre 3 et 10 charactère.";
        }
    }

    private function setSexe($sexe){
        if($sexe == 'male' || $sexe == 'femelle') {
            $this->sexe = $sexe;
            return $this;
        } else {
            echo "Sélectionnez male ou femelle.";
        }
    }


    private function setRace($race){
        if($race > 3 && $race < 20) {
            $this->race = $race;
            return $this;
        } else {
            echo "La race doit contenir entre 3 et 20 charactère.";
        }
    }


    public function getPrenom(){
        return $this->prenom;
    }


    public function getAge(){
        return $this->age;
    }


    public function getCouleur(){
        return $this->couleur;
    }


    public function getSexe(){
        return $this->sexe;
    }


    public function getRace(){
        return $this->race;
    }


    public function getInfos(){

        return get_object_vars($this);
    }

}
