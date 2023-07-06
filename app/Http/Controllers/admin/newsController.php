<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\newsRequest;
use App\Models\news;
use LaravelLocalization;
use App\Traits\allTraits;

class newsController extends Controller
{
    use allTraits;

    public function news() {

        $news_s =  news::All();
        return view('admin.addNews', compact('news_s'));
    }


    public function newsPost(newsRequest $request)
    {

        $file_name = $this->saveImage($request->photo, 'images/news');

        news::create([
            'photo' => $file_name,
            'title' => $request -> title,
            'details' => $request -> details,


        ]);

        return redirect()->back()->with(['successAdd' => '']);

    }


    public function allNews() {

        $news_s =  news::All();
        return view('admin.allNews', compact('news_s'));
    }


    public function deleteNews($news_s_id)
    {

        $news_s = news::find($news_s_id);

        if (!$news_s)
            return redirect()->back()->with(['error' => __('messages.news not exist')]);

        $news_s->delete();

        return redirect()
            ->route('allNews')
            ->with(['successDelete' => __('messages.news deleted successfully')]);

    }


    public function editNews($news_s_id)
    {

        // addNews::findOrFail($news_id);
        $news = news::find($news_s_id);  // search in given table id only
        if (!$news)
            return redirect()->back();

        $news_s = news::all()->find($news_s_id);
        return view('admin.editNews', compact('news_s'));


    }


    public function UpdateNews(logoRequest $request, $news_s_id)
    {
        //validtion
        $file_name = $this->saveImage($request->photo, 'images/news');
        // chek if offer exists

        $news = news::find($news_s_id);
        if (!$news)
            return redirect()->back();

        //update data

        $news->update([
            'title' => $request -> title,
            'details' => $request -> details,
        ]);



        return redirect()->back()->with(['successEdit' => ' تم التحديث بنجاح ']);


        /*
        $addNews->update($request->all());
        */

    }

}
