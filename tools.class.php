<?php

class tools {
	public static function
	remove_brackets(?string $istr): string {
		if (is_null ($istr))
			return '';

		$pattern = '#\[.*\]#';
		$ostr = preg_replace ($pattern, '', $istr);
		return $ostr;
	}

	public static function
	mkSearchString(?string $str, bool $remove_spaces = true): string {
		if (is_null ($str))
			return '';

		$str = self::remove_brackets($str);

		if ($remove_spaces)
			$str = str_replace (' ' , '', $str);

		$cs = [
			"'", '"',
			'(', ')',
			'[', ']',
			'#', ':',
			'',
			'-', '+', '/', '*',
			'0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
			'¹', '²', '³',
			'&',
			'$', '£', '¥',
			'%', '§',
			'!', '?', '¿', '¡',
			'«', '»',
			',' , ';' , '.', ':', ',',
			'°', 'ª', 'º',
			'½', '¼', '¾',
			'·', '¯',
			'©', '®',
			'±', '÷', '×',
			'µ'
		];
		$str = str_replace ($cs, '', $str);

		$str = str_replace ([ 'à', 'â', 'á', 'å', 'ã', 'à', 'ă', 'ä', 'ą', 'ă', 'ä' ], 'a', $str);
		$str = str_replace ([ 'À', 'Â', 'Á', 'Å', 'Ã', 'Ã', 'Ă', 'Ä', 'Ą' ], 'A', $str);
		$str = str_replace ([ 'é', 'è', 'ê', 'ë', 'ę', 'é', 'ē', 'ĕ', 'ė', 'ễ' ], 'e', $str);
		$str = str_replace ([ 'É', 'É', 'È', 'Ê', 'Ë', 'Ę', 'Ē', 'Ĕ', 'Ė' ], 'E', $str);
		$str = str_replace ([ 'î', 'ï', 'í', 'ì', 'ĩ', 'ĭ', 'į', 'i', 'ı' ], 'i', $str);
		$str = str_replace ([ 'Î', 'Ï', 'Í', 'Ì', 'Ĩ', 'Ĭ', 'Į', 'İ', 'I' ], 'I', $str);
		$str = str_replace ([ 'ô', 'ö', 'ó', 'ò', 'õ', 'ő', 'ø', 'ō', 'ŏ', 'ő', 'ő' ], 'o', $str);
		$str = str_replace ([ 'Ô', 'Ö', 'Ó', 'Ò', 'Õ', 'Ő', 'Ø', 'Ō', 'Ŏ', 'Ő' ], 'O', $str);
		$str = str_replace ([ 'ù', 'û', 'ü', 'ú', 'ű', 'ū', 'ů', 'ű', 'ų' ], 'u', $str);
		$str = str_replace ([ 'Ù', 'Û', 'Ü', 'Ú', 'Ű', 'Ū', 'Ů', 'Ű', 'Ų' ], 'U', $str);

		$str = str_replace ([ 'œ' ], 'oe', $str);
		$str = str_replace ([ 'Œ', 'Ǽ' ], 'OE', $str);
		$str = str_replace ([ 'ǽ' ], 'ae', $str);
		$str = str_replace ([ 'Æ' ], 'AE', $str);
		$str = str_replace ([ 'ĳ' ], 'ij', $str);
		$str = str_replace ([ 'Ĳ' ], 'IJ', $str);
		$str = str_replace ([ 'ß' ], 'ss', $str);
		$str = str_replace ([ 'π', 'Π' ], 'pi', $str);

		$str = str_replace ([ 'ç', 'č', '¢', 'ć', 'ĉ', 'ċ' ], 'c', $str);
		$str = str_replace ([ 'Ç', 'Č',      'Ć', 'Ĉ', 'Ċ' ], 'C', $str);
		$str = str_replace ([ 'Đ', 'Ð', 'Ď' ], 'D', $str); // les deux D barres ne sont pas la meme lettre :-(
		$str = str_replace ([ 'ð', 'ď' ], 'd', $str);
		$str = str_replace ([ 'Ġ', 'Ĝ', 'Ğ', 'Ģ' ], 'G', $str);
		$str = str_replace ([ 'ġ', 'ĝ', 'ğ', 'ģ' ], 'g', $str);
		$str = str_replace ([ 'Ĥ', 'Ħ' ], 'H', $str);
		$str = str_replace ([ 'ĥ', 'ħ' ], 'h', $str);
		$str = str_replace ([ 'Ĵ' ], 'J', $str);
		$str = str_replace ([ 'ĵ' ], 'j', $str);
		$str = str_replace ([ 'Ķ'      ], 'K', $str);
		$str = str_replace ([ 'ķ', 'ĸ' ], 'k', $str);
		$str = str_replace ([ 'Ĺ', 'Ļ', 'Ľ', 'Ŀ', 'Ł' ], 'L', $str);
		$str = str_replace ([ 'ĺ', 'ļ', 'ľ', 'ŀ', 'ł' ], 'l', $str);
		$str = str_replace ([ "E" ], 'l', $str);
		$str = str_replace ([ 'Ñ', 'Ń', 'И', 'Ň', 'ŋ', 'ŉ' ], 'N', $str);
		$str = str_replace ([ 'ñ', 'ń', 'и', 'ň', 'Ŋ'      ], 'n', $str);
		$str = str_replace ([ 'þ' ], 'P', $str);
		$str = str_replace ([ 'Þ' ], 'p', $str);
		$str = str_replace ([ 'Ŕ', 'Ŗ', 'Ř' ], 'R', $str);
		$str = str_replace ([ 'ŕ', 'ŗ', 'ř' ], 'r', $str);
		$str = str_replace ([ 'š', 'ş', 'ŝ', 'ś', 'ſ' ], 's', $str);
		$str = str_replace ([ 'Š', 'Ş', 'Ŝ', 'Ś'      ], 'S', $str);
		$str = str_replace ([ 'ț', 'ť', 'ŧ' ], 't', $str);
		$str = str_replace ([ 'Ț', 'Ť', 'Ŧ' ], 'T', $str);
		$str = str_replace ([ 'Ω', 'Ŵ' ], 'W', $str);
		$str = str_replace ([ 'ω', 'ŵ' ], 'w', $str);
		$str = str_replace ([ 'ÿ', 'ý', 'ŷ' ], 'y', $str);
		$str = str_replace ([ 'Ÿ', 'Ý', 'Ŷ' ], 'Y', $str);
		$str = str_replace ([ 'Ž', 'Ź', 'Ż' ], 'Z', $str);
		$str = str_replace ([ 'ž', 'ź', 'ż' ], 'z', $str);

		$str = strtolower($str);
		$str = trim($str);

		$cleaned_str = '';
		$ar=(string)$str;
		for ($i = 0; $i < strlen($str); $i++)
			if ( ord($ar[$i]) < 128)
				$cleaned_str .= $ar[$i];

		return $cleaned_str;
	}
}

?>
