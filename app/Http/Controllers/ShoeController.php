<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Shoe;
use Session;

class ShoeController extends Controller
{
    public function index() {
        // get the user
        $user = Auth::user();

        // create shoes array
        $shoes = [];

        if ($user)
            // get the shoes for the user
            $shoes = $user->shoes()->get();

        return view('shoe.index')->with([
            'shoes' => $shoes
        ]);
    }

    // show form for adding a shoe
    public function create() {
        //get shoes
        $shoes = Shoe::whereDoesntHave('users', function($query) {
            $query->where('user_id', Auth::id());
        })->get();

        return view('shoe.create')->with([
            'shoes' => $shoes
        ]);
    }

    // add a shoe to a user's collection
    public function store(Request $request) {
        // check if an existing shoe was selected
        if ($request->input('existingShoeId')) {
            // get the existing shoe
            $shoe = Shoe::find($request->input('existingShoeId'));
        }
        else {
            // create a new shoe instance
            $shoe = new Shoe();

            // validate input
            $this->validate($request, [
                'company' => 'required',
                'model'   => 'required',
            ]);

            // add shoe to db
            $shoe->company       = $request->input('company');
            $shoe->model         = $request->input('model');
            $shoe->heel_toe_drop = $request->input('heel_toe_drop');
            $shoe->save();
        }

        // validate image and miles input
        $this->validate($request, [
            'image_url' => 'url',
            'miles'     => 'numeric'
        ]);

        // associate shoe with user
        $shoe->users()->save(Auth::user(), [
            'image_url' => $request->input('image_url'),
            'miles'     => $request->input('miles'),
            'comments'  => $request->input('comments')
        ]);

        Session::flash('flash_message', 'Your shoe '.$shoe->company.' '.$shoe->model.' was added.');
        return redirect('/shoes');
    }

    // show form for editing shoe
    public function edit($id) {
        // get the shoe being edited
        $shoe = Auth::user()->shoes()->find($id);

        // render form page with info filled in
        return view('shoe.edit')->with([
            'shoe' => $shoe
        ]);
    }

    // process form for updating shoe info
    public function update(Request $request, $id) {
        // validate input
        $this->validate($request, [
            'image_url' => 'url',
            'miles'     => 'numeric',
        ]);

        // update relationship info
        Auth::user()->shoes()->syncWithoutDetaching([$id => [
                'image_url' => $request->input('image_url'),
                'miles'     => $request->input('miles'),
                'comments'  => $request->input('comments')
            ]]);

        Session::flash('flash_message', 'Your changes were saved.');
        return redirect('/shoes');
    }

    public function destroy($id) {
        // detach shoe from user
        Auth::user()->shoes()->detach($id);

        // redirect back to shoes page
        Session::flash('flash_message', 'The shoe was removed.');
        return redirect('/shoes');
    }
}
