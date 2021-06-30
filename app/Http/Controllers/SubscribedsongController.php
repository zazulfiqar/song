<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscribedsong;
use Auth;
class SubscribedsongController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $user_id= Auth::id();

        $data=subscribedsong::where('user_id', $user_id)->get();


        return view('admin.subscribedsongs.index')->with('data', $data);
        
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request,$id)
    {
      //
      $data = new subscribedsong;
      $data->user_id = Auth::id();
      $data->song_id = $id;
      $data->save();

      return redirect()->back()->with('success', 'Subscribed');

    }
}
