<?php

class Application_Model_Item
{
    public function addOne( $text ) 
    {
        $item = R::dispense( 'item' );
 
        $item->text = $text;
        $item->added = date('Y-m-d h:i:s');
 
        $id = R::store( $item );
        return $id;
    }


}

