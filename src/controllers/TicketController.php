<?php
namespace Capisso\CustomerService;

use Input;
use Redirect;
use Ticket;
use User;
use Validator;
use View;
use Sentry;

class TicketController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $activeTickets = Ticket::all();

        $title = 'Ticket Queue';
        $description = 'what kind of subtitle/descriptions should this have';

        return View::make('customer-service::tickets/index', compact('activeTickets', 'title', 'description'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $users = Sentry::findAllUsersInGroup(Sentry::findGroupByName('Customers'));

        $customers = array();
        foreach($users as $user) {
            $customers[$user->id] = $user->first_name . ' ' . $user->last_name . '(' . $user->username . ')';
        }

        $title = 'Create Ticket';
        $description = 'open up a conversation with a customer';

        return View::make('customer-service::tickets/create', compact('customers', 'title', 'description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        $rules = array(
            'to' => 'required',
            'title' => 'required',
            'priority' => 'required',
            'body' => 'required',
            'status' => 'required',
        );

        $validator = Validator::make($input, $rules);
        if($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $ticket = new Ticket();

        $ticket->title = $input['title'];
        $ticket->body = $input['body'];
        $ticket->priority = $input['priority'];
        $ticket->status = $input['status'];
        $ticket->customer_id = $input['to'];
        $ticket->assigned_user_id = null;
        $ticket->admin_group_id = null;

        $ticket->save();


        return Redirect::action('Capisso\\CustomerService\\TicketController@show', array($ticket->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);

        return View::make('customer-service::tickets/show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
