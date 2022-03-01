<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albums;

class AlbumsController extends Controller
{
    public function index() {
        return view('albums.index');
    }

    public function create() {
        return view('albums.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|max:1999',
        ]);

        // FileWithExtension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $fileExt = $request->file('cover_image')->getClientOriginalExtension();

        $filenameToStore = $filename.'_'.time().'.'.$fileExt ;

        // UploadImage

        $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

        $album = new Albums;

        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;

        $album->save();

        return redirect('/')->with('success', 'Album Created');


        
    }
}
