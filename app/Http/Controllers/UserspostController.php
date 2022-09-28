<?php

namespace App\Http\Controllers;

use App\Models\userspost;
use Illuminate\Http\Request;

class UserspostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = userspost::all();
 
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
         $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        userspost::create($request->all());
     
        return redirect()->route('posts.index')
                        ->with('success','posts created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userspost  $userspost
     * @return \Illuminate\Http\Response
     */
    public function show(userspost $userspost)
    {
        return view('posts.show',compact('userpost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userspost  $userspost
     * @return \Illuminate\Http\Response
     */
    public function edit(userspost $userspost)
    {
        $posts = userspost::find($userspost);
        return view('stocks.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userspost  $userspost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userspost $userspost, $id)
    {
          $request->validate([
            'title'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required',
            'status'=>'required'
        ]); 
        $userspost = userspost::find($id);
        $userspost->title =  $request->get('title');
        $userspost->image = $request->get('image');
        $userspost->description = $request->get('description');
        $userspost->status = $request->get('status');
        $userspost->save();
 
        return redirect('posts.index')->with('success', 'posts updated.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userspost  $userspost
     * @return \Illuminate\Http\Response
     */
    public function destroy(userspost $userspost, $id)
    {
        userspost::find($id)->delete();
        return redirect()->route('posts.index')->with('success','posts deleted successfully');
    }
}
