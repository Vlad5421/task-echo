<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ArticlesCategory;
use Illuminate\Http\Request;

class ArticlesCategoryController extends Controller
{
    private $model;

    /**
     * @param $model
     */
    public function __construct()
    {
        $this->model = new ArticlesCategory();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->model::paginate(3);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->model::paginate(3);
    }

}
