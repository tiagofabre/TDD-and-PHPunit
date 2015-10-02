<?php 
namespace ExampleTests;
use PHPUnit_Framework_TestCase;
use Example\Order;
/**
* 
*/
class OrderTest extends PHPUnit_Framework_TestCase
{
	/**
	* @test
	*/
	function testVerificaItens()
	{
		$itens = array("item 1", "item 2", "item 3");
		$order = new Order($itens);

		$result = $order.getItens();

		$this->assertEquals($result,$itens);
	}
}

?>