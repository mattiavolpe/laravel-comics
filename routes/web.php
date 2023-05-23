<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "pages" => [
            "characters",
            "comics",
            "movies",
            "tv",
            "games",
            "collectibles",
            "videos",
            "fans",
            "news",
            "shop"
        ],
        "footerLinks" => [
            "dc comics" => [
                "Characters",
                "Comics",
                "Movies",
                "TV",
                "Games",
                "Videos",
                "News"
            ],
            "shop" => [
                "Shop DC",
                "Shop DC Collectibles"
            ],
            "dc" => [
                "Terms Of Use",
                "Privacy policy (New)",
                "Ad Choices",
                "Advertising",
                "Jobs",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us"
            ],
            "sites" => [
                "DC",
                "MAD Magazine",
                "DC Kids",
                "DC Universe",
                "DC Power Visa"
            ]
        ],
        "dcSitesBanner" => [
            "digital comics" => "buy-comics-digital-comics.png",
            "dc merchandise" => "buy-comics-merchandise.png",
            "subscription" => "buy-comics-subscriptions.png",
            "comic shop locator" => "buy-comics-shop-locator.png",
            "dc power visa" => "buy-dc-power-visa.png",
        ],
        "comics" => config("db.comics")
    ];
    return view('comics', $data);
})->name("comics");

Route::get('/movies', function () {
    return view('movies');
})->name("movies");

Route::get('/characters', function () {
    return view('characters');
})->name("characters");

Route::get('/tv', function () {
    return view('tv');
})->name("tv");

Route::get('/games', function () {
    return view('games');
})->name("games");

Route::get('/collectibles', function () {
    return view('collectibles');
})->name("collectibles");

Route::get('/videos', function () {
    return view('videos');
})->name("videos");

Route::get('/fans', function () {
    return view('fans');
})->name("fans");

Route::get('/news', function () {
    return view('news');
})->name("news");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");