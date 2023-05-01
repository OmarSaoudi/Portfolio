<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\AttachFilesTrait;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    use AttachFilesTrait;

    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }


    public function store(Request $request)
    {

        try {
            $galleries = new Gallery();
            $galleries->name = $request->name;
            $galleries->galleries_images = $request->file('galleries_images')->getClientOriginalName();
            $galleries->save();
            $this->uploadFile($request,'galleries_images','galleries_images');
            return redirect()->route('galleries.index');

        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function show($id)
    {
        $galleries = Gallery::findorfail($id);
        return view('admin.galleries.show', compact('galleries'));
    }

    public function update(Request $request)
    {
        try{
            $galleries = Gallery::findorfail($request->id);
            $galleries->name = $request->name;
            if($request->hasfile('galleries_images')){
                $this->deleteFile($galleries->galleries_images);
                $this->uploadFile($request,'galleries_images','galleries_images');
                $galleries_images_new = $request->file('galleries_images')->getClientOriginalName();
                $galleries->galleries_images = $galleries->galleries_images !== $galleries_images_new ? $galleries_images_new : $galleries->galleries_images;
            }
            $galleries->save();

            return redirect()->route('galleries.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        $this->deleteFile($request->galleries_images);
        Gallery::destroy($request->id);
        return redirect()->route('galleries.index');
    }

    public function deleteFile($name)
    {
        $exists = Storage::disk('upload_attachments')->exists('attachments/galleries_images/'.$name);
        if($exists)
        {
            Storage::disk('upload_attachments')->delete('attachments/galleries_images/'.$name);
        }
    }
}
