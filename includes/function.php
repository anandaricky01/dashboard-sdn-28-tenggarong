<?php
	/**
	 * PHP Code Snippet
	 * Convert Number to Rupiah & vice versa
	 * https://gist.github.com/845309
	 *
	 * Copyright 2011-2012, Faisalman
	 * Licensed under The MIT License
	 * http://www.opensource.org/licenses/mit-license 	 
	 */
	 	 
	/**	 
	 *
	 * @param integer $angka number
	 * @return string
	 *
	 * Usage example:
	 * echo convert_to_rupiah(10000000); -> "Rp. 10.000.000"	 
	 */ 
	function convert_to_rupiah($angka)
	{
		return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
	}
	
	/**
	 *
	 * @param string $rupiah
	 * @return integer
	 *
	 * Usage example:
	 * echo convert_to_number("Rp. 10.000.123,00"); -> 10000123
	 */		 
	function convert_to_number($rupiah)
	{
		return intval(preg_replace('/','.*|[^0-9]/', '', $rupiah));
	}
	
?>