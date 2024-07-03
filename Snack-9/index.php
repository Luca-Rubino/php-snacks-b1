<?php

/**
 * undocumented class
 */
class User {
   private $nome;

   public function __costructor($nome) {
    $this -> nome = $nome;
   }

   /**
    * Recupero la variabile nome
    *
    * @return string
    */
   public function getNome(): string
   {
    return $this -> nome;
   }


   /**
    * Imposto la possibilità di impostare il nome
    *
    * @param string $nome
    * @return self
    */
   public function setNome(string $nome): self
   {
    $this-> nome = $nome;
   
    return $this;
   }
};

class Membership {
    public $active = true;
}

class PremiumUser extends User {
    public $Membership;
};

?>