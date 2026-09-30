<?php

class Heroi extends Personagem {

        private string $elemento;


        /**
         * Get the value of elemento
         */
        public function getElemento(): string
        {
                return $this->elemento;
        }

        /**
         * Set the value of elemento
         */
        public function setElemento(string $elemento): self
        {
                $this->elemento = $elemento;

                return $this;
        }
}