<?php

namespace SMT\Tests;

use SMT\Options;

/**
 * @covers \SMT\Options
 * @group semantic-meta-tags
 *
 * @license GNU GPL v2+
 * @since   1.2
 *
 * @author mwjames
 */
class OptionsTest extends \PHPUnit_Framework_TestCase {

	public function testCanConstruct() {

		$this->assertInstanceOf(
			'\SMT\Options',
			new Options()
		);
	}

	public function testAddOption() {

		$instance = new Options();

		$this->assertFalse(
			$instance->has( 'Foo' )
		);

		$instance->set( 'Foo', 42 );

		$this->assertEquals(
			42,
			$instance->get( 'Foo' )
		);
	}

	public function testUnregisteredKeyThrowsException() {

		$instance = new Options();

		$this->setExpectedException( 'InvalidArgumentException' );
		$instance->get( 'Foo' );
	}

}