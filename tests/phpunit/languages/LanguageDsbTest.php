<?php
/**
 * @author Santhosh Thottingal
 * @copyright Copyright © 2012, Santhosh Thottingal
 * @file
 */

/** Tests for MediaWiki languages/classes/LanguageDsb.php */
class LanguageDsbTest extends LanguageClassesTestCase {
	/** @dataProvider providePlural */
	function testPlural( $result, $value ) {
		$forms = array( 'one', 'two', 'few', 'other' );
		$this->assertEquals( $result, $this->getLang()->convertPlural( $value, $forms ) );
	}

	/** @dataProvider providePlural */
	function testGetPluralRuleType( $result, $value ) {
		$this->assertEquals( $result, $this->getLang()->getPluralRuleType( $value ) );
	}

	public static function providePlural() {
		return array(
			array( 'other', 0 ),
			array( 'one', 1 ),
			array( 'one', 101 ),
			array( 'one', 90001 ),
			array( 'two', 2 ),
			array( 'few', 3 ),
			array( 'few', 203 ),
			array( 'few', 4 ),
			array( 'other', 99 ),
			array( 'other', 555 ),
		);
	}
}
