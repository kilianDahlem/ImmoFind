<?php
class Request{

    public $url;//quelle page a ete appelée

    function __construct()
    {
        //$this->url = $_SERVER['PATH_INFO'];
	    $this->url = $_SERVER['REQUEST_URI'];
        //print_r($_SERVER);
        // url tapé par user $this->request->url; 
        
    }
}
?>