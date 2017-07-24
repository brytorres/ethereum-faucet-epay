<?php
class SystemComponent{
	private $settings;
	function getSetting(){
		$settings['dbhost']='';
		$settings['dbusername']='';
		$settings['dbpassword']=''; 
		$settings['dbname']='';
		$settings['adminpass']='';
		return $settings;
	}
}