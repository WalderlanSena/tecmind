<?php
	include_once "classes/Caneta.php";


	$caneta1 = new Caneta();

	$caneta1->setTipo("Bic");
	$caneta1->setValor("RS: 500,00");
	$caneta1->setBico("Fino");

	$caneta1->imprimir();