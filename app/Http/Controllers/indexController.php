<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
   public function index(){

       $items = [
           ["property" => "home-top-p" , "iconClass" => "fa-clone" , "title" => "مدیریت پروژه" , "description" => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"] ,
           ["property" => "active" , "iconClass" => "fa-connectdevelop" , "title" => "مدیریت گروه" , "description" => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"] ,
           ["property" => "" , "iconClass" => "fa-object-ungroup" , "title" => "عنوان آزمایشی" , "description" => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"] ,
           ["property" => "home-top-n" , "iconClass" => "fa-line-chart" , "title" => "متن ساختگی" , "description" => "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ"]
       ];

       return view('index' , compact("items"));
   }
}
