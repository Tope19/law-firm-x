<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Mail;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id', 'DESC')->simplePaginate(5);
        return view('welcome', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'dob' => 'required',
            'profile_image' => 'nullable|image',
            'case_details' => 'required|string'
        ]);

        $image = $request->file('profile_image');
        $image_filename = time().'.'.$image->getClientOriginalExtension();
        Storage::disk('public')->put($image_filename,  File::get($image));


        $data['profile_image'] = $image_filename;

        // dd($data);

        $form = Client::create($data);

        Mail::send('emails.profile', ['form' => $form], function ($m) use ($form){
            $m->from('admin@lawfirmx.com', 'Law-Firm-x');

            $m->to($form->email, $form->name)->subject('Profile Confirmation!');

        });

        // return response()->json(['success' => $form->id ]);

        toastr()->success('Profiled Successfully!');
        return redirect()->back();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return response()->json([
            'data' => $client
          ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
