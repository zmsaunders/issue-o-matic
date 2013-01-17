<?php

class Ticket extends Eloquent{
    
    public function create_ticket()
    {

    }

    public static function get_ticket($id = null)
    {
        if ($id)
            return self::find($id);
        
        else
            return self::all();
    }

    public function update_ticket()
    {

    }

    public function close_ticket()
    {

    }
}

?>