<?php
	// функция находит все уникальные подстроки, после чего ложит их в массив
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
    //вызова фунции вшить не красиво
    //можно сделать красивее, но не стал переусердствовать
    return getLargestArrElem($arr);
	}

  //а здесь перебераем массив и возвращаем самую длинную подстроку
  //если подстроки одинаковой длины, возывращаем первую
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
