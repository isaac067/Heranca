<?php

class Vilao extends Personagem {

        private string $objetivo;


        /**
         * Get the value of objetivo
         */
        public function getObjetivo(): string
        {
                return $this->objetivo;
        }

        /**
         * Set the value of objetivo
         */
        public function setObjetivo(string $objetivo): self
        {
                $this->objetivo = $objetivo;

                return $this;
        }
}