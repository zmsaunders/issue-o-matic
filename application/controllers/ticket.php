<?php

class Ticket_controller extends Base_Controller {

    /*
    |--------------------------------------------------------------------------
    | The Default Controller
    |--------------------------------------------------------------------------
    |
    | Instead of using RESTful routes and anonymous functions, you might wish
    | to use controllers to organize your application API. You'll love them.
    |
    | This controller responds to URIs beginning with "home", and it also
    | serves as the default controller for the application, meaning it
    | handles requests to the root of the application.
    |
    | You can respond to GET requests to "/home/profile" like so:
    |
    |       public function action_profile()
    |       {
    |           return "This is your profile!";
    |       }
    |
    | Any extra segments are passed to the method as parameters:
    |
    |       public function action_profile($id)
    |       {
    |           return "This is the profile for user {$id}.";
    |       }
    |
    */
    // public $layout = 'layouts.public';
    public $restful = TRUE;

    public function get_index()
    {
        return View::make('tickets.select');
    }

    public function post_new($type = NULL)
    {
        switch ($type)
        {
            case "bug":
                return View::make('tickets.new');
            break;
            default:
                return Response::error('404');
        }
    }

    public function action_view($id = null)
    {
        $tickets = Ticket::get_ticket($type);

        if (is_array($tickets))
            return View::make('tickets.all')->with('tickets', $tickets);

        else
            return View::make('tickets.single')->with('ticket', $ticket);
    }
}