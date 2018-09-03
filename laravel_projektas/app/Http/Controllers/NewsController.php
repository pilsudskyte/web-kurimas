<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
// Pasakome controlleriu kad naudosime news modeli
use App\NewsItem;
use App\Comment;


class NewsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		// Gauname is newsItem Modelio visas naujienas ir issaugome i kintamaji
		$news = NewsItem::all();


		// Gaunu naujienu skaiciu
		$newsCount = NewsItem::count(); // grazins skaiciu


		// Perduodame visas naujienas ($news) i savo view faila
		/* 1 parametras view failo pavadinimas */
		/* 2 parametras masyvas duomenu ka perduosime i view faila */
		/* 3 masyvo key kintamojo pavadinimas kaip i ji kreipsimes view faile */
		/* 4. masyvo value tai yra koki kintamaji perduodame is controlerio */

		// 1. resources/views/news.blade.php
		// 2. Kintamojo pavadinimas view faile
		// 3. Kintamojo pavadinimas controleryj

		return view( "news.index", [
			"news" => $news,
			"newsCount" => $newsCount
		] );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

		// kreipiuosi i resources/views/news/create.blade.php
		return view( 'news.create' );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {

		// Patikriname uzklausos duomenis
		$messages = [
			'required' => 'Laukelis :attribute turi buti uzpildytas',
			'title.required' => 'Naujienos pavadinimas turi buti uzpildytas',
			
		];

		$validatedData = $request->validate([

			// 1. Formos laukelio padinimas // 2. visos taisykles
			// Jei naudojame unique po dvitaskio duomenu bazes pavadinimas
			// kurioje reiksme turi buti unikali
			'title' => 'required|unique:news',
			
			'content' => 'required|min:100',
		], $messages);

		// naujas naujienu objektas
		$news              = new NewsItem;
		$news->title       = $request->title;
		$news->description = $request->description;
		$news->content     = $request->content;
		$news->image       = "123";
		$news->save();


		// Susikuriu sesijos pranesima
		Session::flash( 'status', 'Naujiena sekminga sukurta' );

		return redirect()->route( 'news.index' );

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
		// Kreipiames i modeli NewsItem
		/* Modelio dokumentacija :
		https://laravel.com/docs/5.6/eloquent
		*/
		$newsItem = NewsItem::find( $id );


		return view( 'news.show', [
			"newsItem" => $newsItem,
		] );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( $id ) {
		//
		$newsItem = NewsItem::find( $id );

		return view( 'news.edit', [ 'newsItem' => $newsItem ] );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {

		// Patikriname uzklausos duomenis
		$messages = [
			'required' => 'Laukelis :attribute turi buti uzpildytas'
		];



		Validator::make($request->all(), [
			'title' => 'required|unique:news',
			
			'content' => 'required|min:100',
		], $messages)->validate();

		$newsItem = NewsItem::find($id);
		$newsItem->title = $request->title;
		$newsItem->description = $request->description;
		$newsItem->content = $request->content;

		$newsItem->save();

		return redirect()->route('news.show', $newsItem->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		//
		$newsItem = NewsItem::find($id);
		$newsItem->delete();
		Session::flash( 'status', 'Naujiena sekminga istrinta' );
		return redirect()->route('news.index');
	}
}