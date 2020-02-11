<?php
	function getLongestUS($str) {
		$len = strlen ($str);
		$arr = [];
		$s = '';
		for ($i = 0; $i < $len; $i++) {
			$symbol = substr($str, $i, 1);
			if (preg_match("#" . $symbol . "#", $s)) {
				array_push($arr, $s);
				$s = $symbol;
			} else {
				$s .= $symbol;
			}
		}
    return getLargestArrElem($arr);
	}

  function getLargestArrElem ($arr) {
    $string = '';
    foreach ($arr as $value) {
      if (strlen ($value) > strlen ($string)) {
        $string = $value;
      }
    }
    return $string;
  }

	var_dump(getLongestUS('abcabcbb'));
  echo "<br>";
	var_dump(getLongestUS('bbbbb'));
  echo "<br>";
  var_dump(getLongestUS('pwwkew'));
  echo "<br>";
