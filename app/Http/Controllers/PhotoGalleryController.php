<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use File;

class PhotoGalleryController extends Controller
{
    public function listPhotos(){

        $photos = Photo::all();

        return view('gallery.index',compact('photos'));
    }

    public function single($id) {
        $photo = Photo::find($id);
        $previous = Photo::where('id', '<', $photo->id)->orderBy('id', 'title')->first();
        $next = Photo::where('id', '>', $photo->id)->orderBy('id')->first();


        return view('gallery.single',compact('photo', 'previous', 'next'));
    }

    public function showPhotoForm() {
        return view('gallery.add_photo');
    }

    public function savePhotoForm(Request $request) {
        $validateData = $request->validate(
            [
                'title'         => 'required',
                'description'   => 'min:10',
                'photo'         => 'required|image|max:3000'
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

    public function showPhotoForm2($id) {
        $photo = Photo::find($id);
        return view('gallery.edit_photo', compact('photo'));
    }

    public function updatePhotoForm(Request $request, $id) {
        $validateData = $request->validate(
            [
                'title'         => 'required',
                'description'   => 'min:10'
            ]
        );

        $photo = Photo::find($id);

        $photo->update([
            'title'         => $validateData['title'],
            'description'   => $validateData['description'],

        ]);

        $photo->save();

        // Terug naar overzichtpagina met de foto erin
        return redirect()->route('gallery.index');
    }

    public function delete($id) {
        $photo = Photo::find($id);
        $img = public_path("uploadphotos/{$photo->photo}");

        if (File::exists($img)) {
            unlink($img);
            $photo->delete();
        } else {
            return 'RIP';
        }

        return redirect()->route('gallery.index');
    }
}
