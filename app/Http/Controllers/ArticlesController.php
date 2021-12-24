<?php

namespace App\Http\Controllers;

use App\Helpers\Uploadsfile;
use App\Http\Request\ArticleRequest;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function dataForm()
    {
        return view('Article.uploads_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dataUploads(ArticleRequest $articleRequest)
    {

        $photo=$articleRequest->file('profile');
        if($photo)
        {
            //dd('il est ici');
            $photoName=uniqid('profil_').'.'.$photo->getClientOriginalExtension();
            $photo->move(Uplopadsfile::getUplaodsPath('profile_photo'),$photoName);

            $article = Articles::create([
                'nom'=>$articleRequest->get('nom'),
                'post'=>$articleRequest->get('post'),
                'profile'=>$photoName,
                'user_id'=>2
            ]);
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show()
    {
        $articles = Articles::get();
        return view('Article.data_articles',compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $articles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles)
    {
        //
    }
}
