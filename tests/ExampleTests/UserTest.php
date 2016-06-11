<?php

namespace ExampleTests;

use PHPUnit_Framework_TestCase;
use Example\User;

/**
* clear && ./vendor/bin/phpunit tests --testdox
* clear && ./vendor/bin/phpunit tests --colors
*/
class UserTest extends PHPUnit_Framework_TestCase
{
	protected $user;

	public function setUp(){
		$this->user = new User("Renan", "Jhonatha");
	}
	/**
	* @test
	*/
	public function defineEObtemONome()
	{
		$this->assertEquals("Renan", $this->user->getName());
	}

	/**
	* @test
	*/
	public function defineEObtemOSobrenome()
	{
		$this->assertEquals("Jhonatha", $this->user->getLastName());
	}

	/**
	* @test
	*/
	public function ConcatenacaoDoNomeESobrenome()
	{
		$user = $this->user;

		$expected = "Renan Jhonatha";
		$actual   = $user->getCompleteName();
		$this->assertEquals($expected, $actual);

		// --------------------------------------

		$user = new User("Jon", "Doe");
		$expected = "Jon Doe";
		$actual   = $user->getCompleteName();
		$this->assertEquals($expected, $actual);
	}
}