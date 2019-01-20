<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\LeadsAddress;
use App\Leads;
use Alert;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name'          => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'cnpj'          => 'required',
            'social_name'   => 'required',
            'fantasy_name'  => 'required',
            'site'          => 'required',
            'phone'         => 'required',
            'accept_terms'  => 'required',
        ]);

        $lead = Leads::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $leadAddressData[] = [
            'lead_id'           => $lead->id,
            'cnpj'              => $request->cnpj,
            'social_name'       => $request->social_name,
            'fantasy_name'      => $request->fantasy_name,
            'site'              => $request->site,
            'phone'             => $request->phone,
            'accept_terms'      => $request->accept_terms,
        ];

        foreach($leadAddressData as $data){}

        LeadsAddress::create($data);

        Alert::success('Cadastrado com sucesso!', 'Sucesso!');
        return redirect()->route('leads.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
