<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('q') != null) {
            
            $contact['data']= Contact::where('name','like',request('q').'%')->get();
      return response()->json($contact);
      
            }else{
                $contact = Contact::orderBy('created_at','DESC')->paginate(5);
                return response()->json($contact);
            }
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message'=>'required'
        ]);

        return Contact::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'subject' => $request['subject'],
           'message' => $request['message']
        ]);
        return response()->json([
            'message' => 'Contact add added'
           ]);
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
        $contact=Contact::find($id);
        if ( $contact->delete()) {
            return $this->refrech();
        }else{
            return response()->json(['error'=>'Destroy method failed'],425);
        }
    }
    private function refrech(){
        $contact = Contact::orderBy('created_at','DESC')->paginate(5);
        return response()->json($contact);
    }
}
