<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\projectRequest;
use App\Models\project;
use LaravelLocalization;
use App\Traits\allTraits;

class projectsController extends Controller
{
    use allTraits;

    public function project() {

        $projects =  project::All();
        return view('admin.addProjects', compact('projects'));
    }


    public function projectPost(projectRequest $request)
    {

        $file_name = $this->saveImage($request->photo, 'images/projects');

        project::create([
            'photo' => $file_name,

        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function allProjects() {

        $projects =  project::All();
        return view('admin.allProjects', compact('projects'));
    }


    public function deleteProject($projects_id)
    {

        $projects = project::find($projects_id);

        if (!$projects)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $projects->delete();

        return redirect()
            ->route('allProjects')
            ->with(['successDelete' => __('messages.news deleted successfully')]);

    }


    public function editProject($projects_id)
    {

        // addNews::findOrFail($news_id);
        $project = project::find($projects_id);  // search in given table id only
        if (!$project)
            return redirect()->back();

        $projects = project::all()->find($projects_id);
        return view('admin.editProject', compact('projects'));


    }


    public function UpdateProject(projectRequest $request, $projects_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/projects');
        // chek if offer exists

        $project = project::find($projects_id);
        if (!$project)
            return redirect()->back();

        //update data

        $project->update([
            'photo' => $file_name,
        ]);



        return redirect()->back()->with(['successEdit' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }

}
