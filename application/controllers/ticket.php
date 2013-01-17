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

    public $restful = TRUE;
    // public $layout = 'layouts.public';

    public function get_index()
    {
        return View::make('tickets.new');
    }

    public function get_ticket($id = NULL)
    {

        $tickets = Ticket::get_ticket($id);

        if (is_array($tickets))
            return View::make('tickets.all')->with('tickets', $tickets);

        else
            return View::make('tickets.single')->with('ticket', $ticket);
    }
}