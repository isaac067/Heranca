<?php

class Personagem {


      protected string $nome;
      protected int $idade;
      protected string $poder;


      /**
       * Get the value of nome
       */
      public function getNome(): string
      {
            return $this->nome;
      }

      /**
       * Set the value of nome
       */
      public function setNome(string $nome): self
      {
            $this->nome = $nome;

            return $this;
      }

      /**
       * Get the value of idade
       */
      public function getIdade(): int
      {
            return $this->idade;
      }

      /**
       * Set the value of idade
       */
      public function setIdade(int $idade): self
      {
            $this->idade = $idade;

            return $this;
      }

      /**
       * Get the value of poder
       */
      public function getPoder(): string
      {
            return $this->poder;
      }

      /**
       * Set the value of poder
       */
      public function setPoder(string $poder): self
      {
            $this->poder = $poder;

            return $this;
      }
}