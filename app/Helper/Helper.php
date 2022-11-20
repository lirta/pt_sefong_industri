<?php
if (!function_exists('currency_IR')) {
	function currency_IR($value){
		return "Rp. " . number_format($value, 0, ',', '.');
	}
}