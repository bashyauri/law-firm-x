<?php

namespace App\Http\Controllers;

use App\Events\NewClientRegistered;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         // Validate the input
    $validatedData = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:clients,email',
        'date_profiled' => 'required|date',
        'primary_legal_counsel' => 'required',
        'date_of_birth' => 'nullable|date',
        'profile_image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        'case_details' => 'nullable',
    ]);

  //  Save the client data to the database
    $client = new Client();
    $client->fill($validatedData);

    if ($request->hasFile('profile_image')) {
        $path = $request->file('profile_image')->store('public/profile_images');
        $client->profile_image = basename($path);
    }

    $client->save();


    Event::dispatch(new NewClientRegistered($client));

    // Send a welcome email to the client
    // Mail::to($client->email)->send(new WelcomeEmail($client));

    // Redirect to the client profile view
    return redirect()->back()->with(['success_message' => 'Record Created']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}