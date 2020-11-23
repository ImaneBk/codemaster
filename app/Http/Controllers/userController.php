<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('q') != null) {
            
        $users['data']= User::where('name','like',request('q').'%')->get();
  return response()->json($users);
  
        }else{
            $users = User::orderBy('created_at','DESC')->paginate(5);
            return response()->json($users);
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
            'password' => 'required',
            'user_type'=>'required'
        ]);

        return User::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'password' => \Hash::make($request['password']),
           'user_type' => $request['user_type']
        ]);
        return response()->json([
            'message' => 'User added'
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
        $user = User::find($id);

        return response()->json($user);
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
        $user = User::find($id);
        $user->name= request('name');
        $user->email= request('email');
        $user->user_type= request('user_type');
        $user->save();

        if($user){
            return $this->refrech();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        if ( $user->delete()) {
            return $this->refrech();
        }else{
            return response()->json(['error'=>'Destroy method failed'],425);
        }
    }

    private function refrech(){
        $users = User::orderBy('created_at','DESC')->paginate(3);
        return response()->json($users);
    }
}
