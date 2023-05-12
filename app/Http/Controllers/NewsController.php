<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

use function GuzzleHttp\Promise\all;

class NewsController extends ProfileController
{
    public function index()
    {
        return view('edit-news');
    }

    public function create(Request $request)
    {
        if ($request->image) {
            $path = 'homenews';
            parent::checkFolderExist($path);
            $request->merge(['image' => parent::makeImageWithThumb(uniqid(), $request->image, $path)]);
        }
        News::create([
            'news_title' => $request->news_title,
            'image' => $request->image,
            'news_discription' => $request->news_discription,
            $request->all()
        ]);
        return redirect('/edit-news')->with(['message' => 'News Added']);
    }

    public function show()
    {
        $users = News::all();
        return view('home', ['users' => $users]);
    } 

    
    public function news_detials()
    {
        $users = News::all();
        return view('news', ['users' => $users]);
    }
    
    //show news by id
    public function show_news($id)
    {
        $users = News::findOrFail($id);
        return view('fix-news', ['users' => $users]);
    }
    //update news
    public function updateNews(Request $request, $id)
    {
        $data = News::findOrFail($id);
        if ($request->image) {
            $path = 'homenews';
            parent::checkFolderExist($path);
            $request->merge(['image' => parent::makeImageWithThumb(uniqid(), $request->image, $path)]);
        }
        $data->update([
            'news_title' => $request->news_title,
            'image' => $request->image,
            'news_discription' => $request->news_discription,
            $request->all()
        ]);
        return redirect()->back()->with(['message' => 'News successfully Updated']);
    }
    
    
    //delete news 
    public function delete($id)
    {
        $data = News::findOrFail($id);
        $data->delete(); // delete parent row
        return redirect()->back()->with(['message' => 'News  successfully Deleted']);
    }
    
    //show news detials
    public function show_news_detials($id)
    {
        $newsrecord = News::where('id', $id)->first();
        $image=$newsrecord->image;
        $title=$newsrecord->news_title;
        $newsdiscription=$newsrecord->news_discription;
        $time=$newsrecord->created_at;
        return view('detail-news', ['image' => $image,'title'=>$title,'newsdiscription'=>$newsdiscription,'time'=>$time]);
    }

   
}
