<?php defined('SYSPATH') or die('No direct script access.');

class ExceptionTrack_Core {
	public static function setupRequest() {
		$exceptional_config = Kohana::config('exception_track');
		//Kohana::log("info", print_r($exceptional_config['api.key'], true));
		require dirname(__FILE__)."/exceptional-php/exceptional.php";
		Exceptional::setup($exceptional_config['api.key']);

		// control which errors are caught with error_reporting
		//error_reporting(E_ALL|E_STRICT);
		//error_reporting(E_STRICT);
		error_reporting(E_ALL);
	}
}