<?php 
	function random_num($size) {
		$alpha_key = '';
		$keys = range('a', 'z');
		
		for ($i = 0; $i < 3; $i++) {
			$alpha_key .= $keys[array_rand($keys)];
		}
		
		$length = $size - 2;
		
		$key = '';
		$keys = range(0, 9);
		
		for ($i = 0; $i < $length; $i++) {
			$key .= $keys[array_rand($keys)];
		}
		
		return $alpha_key . $key;
	}

	echo random_num(5);

?>