<?php
	/*
		Conceitos básicos de Orientação a Objetos com PHP
		Oficina de POO - TecMind <http://www.tecmind.info>
	*/
	Class Caneta{

		// Atributos
		private $tipo;
		private $valor;
		private $bico;

		public function imprimir(){
			echo $this->tipo  ."<br />";
			echo $this->valor ."<br />";
			echo $this->bico  ."<br />";
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
		public function setValor($valor){
			$this->valor = $valor;
		}
		public function setBico($bico){
			$this->bico = $bico;
		}

	}
