<?php

namespace App\Http\Controllers;

use App\Events\NewClientRegistered;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Validated;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    public function __construct(
        public ClientService $clientService
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index')->with(['clients'=>$clients]);
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
    public function store(ClientRequest $request) : RedirectResponse
    {
    $validatedData = $request->validated();
    try {
        $client =  $this->clientService->createClient($validatedData);
        //     $client = new Client();
        // $client->fill($validatedData);

        // if ($request->hasFile('profile_image')) {
        //     $path = $request->file('profile_image')->store('public/profile_images');
        //     $client->profile_image = basename($path);
        // }

        // $client->save();
        Event::dispatch(new NewClientRegistered($client));
        return redirect()->back()->with(['success_message' => 'Record Created']);

    } catch (\Exception $ex) {
        Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['error_message' => 'Something went wrong']);;
    }

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
