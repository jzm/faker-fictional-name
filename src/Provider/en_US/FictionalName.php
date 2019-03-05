<?php

namespace FakerFictionalName\Provider\en_US;

class FictionalName extends \Faker\Provider\Base 
{

	protected static $cannotBeginWith = array(
		'ng', 'kc', 'cey', 'oi', 'isk', 'ie', 'oe', 
	);
	protected static $cannotEndWith = array(
		'h', 'aa', 
	);

	protected static $syllables = array(
		'o', 'li', 'ver', 'ja', 'k', 'char', 'lie', 'ha', 'ry',
		'ja', 'cob', 'geo', 'no', 'ah', 'al', 'fie', 'os', 'car',
		'ya', 'mes', 'fre', 'die', 'le', 'o', 'lo', 'gan', 'ar', 
		'chi', 'the', 'tho', 'mas', 'jo', 'shu', 'a', 'hen', 'wi', 
		'li', 'am', 'ma', 'lu', 'cas', 'e', 'than', 'ar', 
		'thur', 'ma', 'son', 'i', 'saac', 'son', 'te', 'dy', 'fin', 
		'ley', 'da', 'ni', 'el', 'ri', 'ley', 'ed', 'ward', 'seph',
		'al', 'ex', 'an', 'der', 'dam', 're', 'gie',  'sa', 'mu', 
		'el', 'ja', 'xon', 'se', 'ba', 'sti', 'an', 'eli', 'jah', 
		'har', 'ley', 'to', 'by', 'ar', 'lo', 'dy', 'lan', 'ju', 
		'de', 'ben', 'ja', 'min', 'ro', 'ry', 'to', 'my', 'ja', 
		'ke', 'lou', 'ie', 'car', 'ter', 'jen', 'son', 'hu', 'go',
		'bo', 'by', 'fran', 'kie', 'za', 'cha', 'ry', 'o', 'lie',
		'da', 'vid', 'al', 'bie', 'lew', 'is', 'lu', 'ca', 'ro', 
		'nie', 'mat', 'thew', 'har', 'vey', 'reu', 'ben', 'jay', 
		'den', 'ca', 'leb', 'hun', 'ter', 'theo', 'dor', 'na', 
		'than', 'bla', 'ke', 'lu', 'ke', 'ell', 'iot', 'ro', 'man',
		'stan', 'ley', 'dex', 'ter', 'mi', 'chael', 'ty', 'ler',
		'ry', 'an', 'ell', 'is', 'finn', 'al', 'bert', 'kai', 'li', 
		'am', 'cal', 'um', 'lou', 'is', 'aa', 'ron', 'ez', 'ra',
		'le', 'on', 'con', 'or', 'gray', 'son', 'ja', 'mie', 'ai', 
		'den', 'ga', 'bri', 'el', 'au', 'stin', 'lin', 'coln', 
		'eli', 'ben', 'oli', 'via', 'a', 'me', 'lia', 'a', 'va', 'e',
		'mi', 'ly', 'mi', 'a', 'i', 'sa', 'be', 'la', 'gra', 'ce',
		'po', 'py', 'e', 'la', 'e', 'vie', 'char', 'lot', 'je', 
		'si', 'ca', 'dai', 'sy', 'so', 'phia', 'so', 'fi', 'fre', 
		'ya', 'a', 'lice', 'si', 'en', 'na', 'i', 'vy', 'har', 'per',
		'ru', 'by', 'i', 'sa', 'bel', 'wi', 'lo', 'fe', 'be',
		'e', 've', 'lyn', 'scar', 'lett', 'chlo', 'e', 'flo', 'rens', 
		'el', 'sie', 'mi', 'lie', 'lay', 'la', 'ma', 'til', 'da',
		'ro', 'sie', 'es', 'me', 'e', 'va', 'lu', 'cy', 'a', 'ri', 'a',
		'e', 'lie', 'so', 'fi', 'a', 'mai', 'sie', 'e', 'rin', 'lo', 
		'la', 'li', 'ly', 'the', 'a', 'i', 'mo', 'gen', 'e', 'li', 'za',
		'be', 'la', 'mo', 'ly', 'ha', 'nah', 'e', 'ma', 'vi', 'o', 'let',
		'lu', 'na', 'am', 'ber', 'lo', 'tie', 'dar', 'cie', 'ma', 'ya',
		'geor', 'gia', 'e', 'liz', 'a', 'beth', 'za', 'ra', 'pe', 'ne',
		'lo', 'pe', 'ho', 'ly', 'nan', 'cy', 'rose', 'e', 'mi', 'li', 'a',
		'ha', 'ri', 'et', 'gra', 'cie', 'dar', 'cy', 'mi', 'la', 'or', 'la',
		'a', 'bi', 'gail', 'jas', 'mine', 'e', 'lea', 'nor', 'a', 'na',
		'su', 'mer', 'ro', 'byn', 'le', 'xi', 'hei', 'di', 'ma', 'ria', 
		'au', 'ro', 'ra', 'le', 'ah', 'dar', 'cey', 'vic', 'tor', 'ia',
		'hall', 'ie', 'mar', 'tha', 'a', 'me', 'lie', 'ka', 'tie', 
		'bo', 'nie', 'a', 'ra', 'be', 'la', 'la', 'cey', 'a', 'nie', 
		'ly', 'la', 'i', 'ris', 'zo', 'e', 'cla', 'ra', 'ma', 'di', 'son',
		'me', 'gan',  
	);

	/**
	 * A random fictional name.
	 * @return string
	 */

	public function fictionalName() 
	{

		$name = implode(static::randomElements(static::$syllables, static::numberBetween(2, 3), true));
		$name = $this->checkEndings($name);
		$name = $this->checkBeginnings($name);

		return ucfirst($name);
	}

	/**
	 * Verify that endings are allowed.
	 * @return string
	 */
	public function checkEndings($name) {

		foreach (static::$cannotEndWith as $ending) {
			if (substr($name, -strlen($ending)) == $ending) {
				$name = $this->checkEndings(substr($name, 0, -strlen($ending)) . static::randomElement(static::$syllables));
			}			
		}

		return $name;		

	}

	/**
	 * Verify that beginnings are allowed.
	 * @return string
	 */
	public function checkBeginnings($name) {

		foreach (static::$cannotBeginWith as $beginning) {                                                                                                                              
			if (substr($name, 0, strlen($beginning)) == $beginning) {                                                                                                                      
				$name = $this->checkBeginnings(static::randomElement(static::$syllables) . substr($name, 0, strlen($beginning)));
			}                                                                                                                                                                      
		}                                                                                                                                                                          

		return $name;

	}
}