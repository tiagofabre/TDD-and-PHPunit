<?php 
namespace Example;

/**
* 
*/
class Order
{
	private $itens = array();

	function __construct($itens)
	{
		foreach ($itens as $value) {
			$itens[] = $value;
		}
		
	}

	function getItens()
	{
		return $itens;
	}
}

?>