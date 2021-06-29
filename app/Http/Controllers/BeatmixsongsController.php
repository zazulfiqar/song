<?php

namespace App\Http\Controllers;
use Validator;
use App\beatmixsongs;
use App\beatmix;
use Illuminate\Http\Request;
use DB;
use Session;
class BeatmixsongsController extends Controller
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=beatmixsongs::all();
        return view('admin.beatmixsongs.index')->with('data', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.beatmixsongs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $input = $request->all();

        $validator = Validator::make($input, [
           'name' => 'required',
           'songslist' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
        ]);

        if ($validator->passes()) {
            
            if($request->hasFile('songslist'))
                {
                    $file =$request->file('songslist');   //file is the name of the html form input

                    $new_image_name=time().'-'.$file->getClientOriginalName();
                    // $file->move(public_path().'/beatmixmusic/',$new_image_name);
                    $file->move('beatmixmusic/',$new_image_name);
                    //img is my directory that images go
                    $request->path = $new_image_name; //path is the name of the colomn iin the  database where i save the photo so i can return it to the view

                }
                    else{
                        $new_image_name = 'No Music';
                    }

                $data = new beatmixsongs;
                $data->fill($request->all());
                $data->songslist =$new_image_name;
                $data->save();
        
                return \redirect('betmixsongs');
                }
                Session::flash('Error', 'Not Upload!');
                return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();


//        $path = "/tmp/uploads/".$request->input('document_file');
//        if ($request->input('document_file', true)) {
//            $document->addMedia(storage_path($path))->toMediaCollection('document_file');
//        }

        // return redirect()->route('admin.documents.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\beatmixsongs  $beatmixsongs
     * @return \Illuminate\Http\Response
     */
    public function show(beatmixsongs $beatmixsongs,$id)
    {
        $data=beatmixsongs::where('id',$id)->get();
        return view('admin.beatmixsongs.edit')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\beatmixsongs  $beatmixsongs
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,beatmixsongs $beatmixsongs,$id)
    {
        $getdata=beatmixsongs::where('id',$id)->get();
        $namemp3get=$getdata[0]->songslist;
        $data = $request->except(['_token', '_method' ]);
        if($request->hasFile('songslist'))
        {
            $file =$request->file('songslist');   //file is the name of the html form input

            $image=$new_image_name=time().'-'.$file->getClientOriginalName();
            // $file->move(public_path().'/beatmixmusic/',$new_image_name); For Localhost
            $file->move('beatmixmusic/',$new_image_name); 
            $request->path = $new_image_name; //path is the name of the colomn iin the  database where i save the photo so i can return it to the view

        }
        else{
            $image=$namemp3get;
        }

        DB::table('beatmixsongs')
        ->where('id', $id)
        ->update(['name' => "$request->name", 'songslist' => "$image"]);
        return redirect('betmixsongs');

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\beatmixsongs  $beatmixsongs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beatmixsongs $beatmixsongs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\beatmixsongs  $beatmixsongs
     * @return \Illuminate\Http\Response
     */
    public function destroy(beatmixsongs $beatmixsongs,$id)
    {
        $data = beatmixsongs::findOrFail($id);

        $data->delete();
        return \redirect('betmixsongs');
        //
    }
}
