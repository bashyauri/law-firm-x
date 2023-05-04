<?php

namespace App\Http\Controllers;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Services\ClientService;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    public function __construct(
        protected ClientService $clientService
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $clients = Client::all();
        return view('clients.index')->with(['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
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


        return redirect()->back()->with(['success_message' => 'Record Created']);

    } catch (\Exception $ex) {
        Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['error_message' => 'Something went wrong']);;
    }

    }


    public function show(string $id) : View
    {
        $client = Client::find($id);

        return view('clients.show')->with(['client'=>$client]);
    }


}