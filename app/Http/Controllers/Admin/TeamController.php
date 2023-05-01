<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\AttachFilesTrait;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{

    use AttachFilesTrait;


    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {

        try {

            $team = new Team();
            $team->name = $request->name;
            $team->email = $request->email;
            $team->phone = $request->phone;
            $team->specialist = $request->specialist;
            $team->teams_images =  $request->file('teams_images')->getClientOriginalName();
            $team->link_facebook = $request->link_facebook;
            $team->link_linkedin = $request->link_linkedin;
            $team->link_github = $request->link_github;
            $team->link_twitter = $request->link_twitter;
            $team->description = $request->description;
            $team->save();
            $this->uploadFile($request,'teams_images','teams_images');
            return redirect()->route('teams.index');

        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function show($id)
    {
        $teams = Team::findorfail($id);
        return view('admin.teams.show', compact('teams'));
    }

    public function edit($id)
    {
        $teams =  Team::findOrFail($id);
        return view('admin.teams.edit', compact('teams'));
    }

    public function update(Request $request)
    {
        try{
            $teams = Team::findorfail($request->id);
            $teams->name = $request->name;
            $teams->email = $request->email;
            $teams->phone = $request->phone;
            $teams->specialist = $request->specialist;
            $teams->link_facebook = $request->link_facebook;
            $teams->link_linkedin = $request->link_linkedin;
            $teams->link_github = $request->link_github;
            $teams->link_twitter = $request->link_twitter;
            $teams->description = $request->description;

            if($request->hasfile('teams_images')){
                $this->deleteFile($teams->teams_images);
                $this->uploadFile($request,'teams_images','teams_images');
                $teams_images_new = $request->file('teams_images')->getClientOriginalName();
                $teams->teams_images = $teams->teams_images !== $teams_images_new ? $teams_images_new : $teams->teams_images;
            }
            $teams->save();

            return redirect()->route('teams.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        $this->deleteFile($request->teams_images);
        Team::destroy($request->id);
        return redirect()->route('teams.index');
    }

    public function deleteFile($name)
    {
        $exists = Storage::disk('upload_attachments')->exists('attachments/teams_images/'.$name);
        if($exists)
        {
            Storage::disk('upload_attachments')->delete('attachments/teams_images/'.$name);
        }
    }

}
