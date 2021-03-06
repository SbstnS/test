<?php

namespace Maps\Presentation\WikitextParsers;

use ValueParsers\ParseException;
use ValueParsers\StringValueParser;

/**
 * ValueParser that parses the string representation of a distance.
 *
 * @since 3.0
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class DistanceParser extends StringValueParser {

	/**
	 * @see StringValueParser::stringParse
	 *
	 * @since 3.0
	 *
	 * @param string $value
	 *
	 * @return float
	 * @throws ParseException
	 */
	public function stringParse( $value ) {
		$distance = \Maps\Presentation\MapsDistanceParser::parseDistance( $value );

		if ( is_float( $distance ) ) {
			return $distance;
		}

		throw new ParseException( 'Not a distance' );
	}

}
