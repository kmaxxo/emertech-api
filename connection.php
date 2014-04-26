<?php
class connect{

    public $server;
    public $user;
    public $password;

    public function __construct()
    {
	$link =  mysql_connect($this->server, $this->user, $this->password);
	if (!$link)
    	die('No pudo conectarse: ' . mysql_error());

	

    }
/*
    public function ()
    {
    }
*/
}
