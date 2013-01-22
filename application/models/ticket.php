<?php

class Ticket extends Eloquent{
    
    public static function create_ticket($data = FALSE)
    {
        if ( ! $data)
            return FALSE;

        switch ($data['type'])
        {
            case "bug":

            break;

            case "feature":
                $data['property'] = "feature";

            break;

            case "info":
                $data['property'] = "info";
                $data['summary'] = "Information Requested";

            break;

            default:
                return Response::error('404');
            break;
        }

        $ticket = Ticket::create(array(
            'title'     => $data['summary'],
            'reporter'  => $data['email'],
            'status'    => 'new',
            'project'   => $data['property'],
            'content'   => $data['details']
        ));

        if ($ticket)
            return Ticket::get_ticket($ticket->id);

        else
            return FALSE;
    }

    public static function get_ticket($id = NULL)
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