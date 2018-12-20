<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function listPhotos(){

        $photos = Photo::all();

        return view('gallery.index',compact('photos'));
    }

    public function showPhotoForm() {
        return view('gallery.add_photo');
    }

    public function savePhotoForm(Request $request) {
        $validateData = $request->validate(
            [
                'title'         => 'required',
                'description'   => 'min:10',
                'photo'         => 'required|image'
            ]
        );
        $targetFolder = public_path('uploadphotos');
        $filename = str_random(16) . '.' . $validateData['photo']->getClientOriginalExtension();

        // Folder & Bestandsnaam aan elkaar toevoegen
        $validateData['photo']->move($targetFolder, $filename);

        // Nieuwe Photo Object
        $photo = new Photo();

        $photo->fill([
            'title'         => $validateData['title'],
            'description'   => $validateData['description'],
            'photo'         => $filename

        ]);

        // Echt opslaan
        $photo->save();

        // Terug naar overzichtpagina met de foto erin
        return redirect()->route('gallery.index');
    }
}
