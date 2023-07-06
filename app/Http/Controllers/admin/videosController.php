<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\videosRequest;
use App\Models\video;
use LaravelLocalization;
use App\Traits\allTraits;

class videosController extends Controller
{

    public function video() {

        $videos =  video::All();
        return view('admin.addVideos', compact('videos'));
    }


    public function videoPost(videosRequest $request)
    {


        video::create([
            'url' => $request -> url,
            'title' => $request -> title,
            'details' => $request -> details,

        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function allVideos() {

        $videos =  video::All();
        return view('admin.allVideos', compact('videos'));
    }


    public function deleteVideo($videos_id)
    {

        $videos = video::find($videos_id);

        if (!$videos)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $videos->delete();

        return redirect()
            ->route('allVideos')
            ->with(['successDelete' => __('messages.news deleted successfully')]);

    }


    public function editVideo($videos_id)
    {

        // addNews::findOrFail($news_id);
        $video = video::find($videos_id);  // search in given table id only
        if (!$video)
            return redirect()->back();

        $videos = video::all()->find($videos_id);
        return view('admin.editVideos', compact('videos'));


    }


    public function UpdateVideo(videosRequest $request, $videos_id)
    {
        //validtion
        // chek if offer exists

        $video = video::find($videos_id);
        if (!$video)
            return redirect()->back();

        //update data

        $video->update([
            'url' => $request -> url,
            'title' => $request -> title,
            'details' => $request -> details,
        ]);



        return redirect()->back()->with(['successEdit' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }

}
