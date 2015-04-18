<?php namespace Opus15\Http\Controllers;

use Opus15\Http\Controllers\Controller;
use Opus15\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
class ImageController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $entries = Image::all();

        return view('fileentries.index', compact('entries'));
    }

    public function add(Request $request) {

        $file = $request->file('filefield');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
        $entry = new Fileentry();
        $entry->mime = $file->getClientMimeType();
        $entry->original_filename = $file->getClientOriginalName();
        $entry->filename = $file->getFilename().'.'.$extension;

        $entry->save();
        $request->file('filefield')->move(public_path().'/assets/img/uploads', $file->getFilename().'.'.$extension,  File::get($file));
        return redirect('fileentry');

    }
}
 