<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::orderBy('title', 'ASC')->paginate(10);
        return view('admin.client.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.client.create');
    }

    public function store(ClientRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('client');
        Client::create($data);
        return redirect()->route('admin.clients.index')->banner('Cliente criado com sucesso!');
    }

    public function show($id)
    {
        return redirect()->route('admin.clients.index');
    }

    public function edit($client)
    {
        $client = Client::findOrFail($client);
        return view('admin.client.edit', compact('client'));
    }

    public function update(ClientRequest $request, $client)
    {
        $client = Client::findOrFail($client);
        $data = $request->all();

        $data['image'] = $client->image;
        if ($request->hasFile('image')) {
            Storage::delete($client->image);
            $data['image'] = $request->file('image')->store('client');
        }

        $client->update($data);

        return redirect()->route('admin.clients.index')->banner('Cliente atualizado com sucesso!');

    }

    public function destroy($client)
    {
        try{
            $client = Client::findOrFail($client);
            Storage::disk('local')->delete($client->image);
            $client->delete();
            return redirect()->route('admin.clients.index')->banner('Cliente excluído com sucesso!');
        }catch(\Exception $e){
            return redirect()->route('admin.clients.index')->dangerBanner('Não foi possível remover este cliente!');
        }
    }
}
