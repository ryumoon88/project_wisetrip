<?php

namespace App\Http\Controllers;

use App\Models\CultureInformation;
use App\Models\Article;
use App\Models\Destination;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $first_article = Article::inRandomOrder()->first();
        $other_article = Article::inRandomOrder()->limit(2)->get();
        $destinations = Destination::inRandomOrder()->limit(12)->get();
        $culture_information = CultureInformation::inRandomOrder()->limit(5)->get();
        return view('index',['first_article'=>$first_article, 'other_article'=>$other_article,'destinations'=>$destinations, 'cultures'=>$culture_information]);
    }
}
