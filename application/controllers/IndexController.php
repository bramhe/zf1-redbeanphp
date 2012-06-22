<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }


    public function addAction()
    {
        $itemAdapter = new Application_Model_Item();
        $id = $itemAdapter->addOne( 'Example list item' );
        $this->view->id = $id;
    }

}



