<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Pasakome controlleriu kad naudosime news modeli
use App\NewsItem;
use App\Comment;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Gauname is newsItem Modelio visas naujienas ir issaugome i kintamaji
        $news = NewsItem::all();

        // Gaunu naujienu skaiciu
        $newsCount =  NewsItem::count(); // grazins skaiciu 



        // Perduodame visas naujienas ($news) i savo view faila
        /* 1 parametras view failo pavadinimas */
        /* 2 parametras masyvas duomenu ka perduosime i view faila */
        /* 3 masyvo key kintamojo pavadinimas kaip i ji kreipsimes view faile */
        /* 4. masyvo value tai yra koki kintamaji perduodame is controlerio */

        // 1. resources/views/news.blade.php
        // 2. Kintamojo pavadinimas view faile
        // 3. Kintamojo pavadinimas controleryj

        return view("news" , [
            "news" => $news, 
            "newsCount" => $newsCount
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $newsItem = new NewsItem();
        $newsItem->title = "Labas vakaras";
        $newsItem->content = "123";
        $newsItem->image = "http://labas.lt";
        $newsItem->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Kreipiames i modeli NewsItem
        /* Modelio dokumentacija :
        https://laravel.com/docs/5.6/eloquent
        */
        $newsItem = NewsItem::find($id);


        
        return view('newsItem', [
            "newsItem" => $newsItem,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}