<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{


    public function _initDatabase() 
    {
        require_once( APPLICATION_PATH . "/../library/RedBean/rb.php" );
        R::setup( "sqlite://" . APPLICATION_PATH . "/../data/db/application.db" );
    }


}

