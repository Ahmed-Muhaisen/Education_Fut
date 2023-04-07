<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
   public function index()
   {
    $Courses=Course::latest()->take(3)->get();
    $Course=Course::latest()->get();
    $Category =Category::latest()->get();
    return view('Website/index',compact('Category','Courses','Course'));
   }

    public function Category($sluge)
    {
        $Category=Category::where('sluge',$sluge)->first();
        $Courses=Course::where('category_id',$Category->id)->Paginate(3);
        return view('Website/Courses',compact('Category','Courses'));
    }
    public function About()
    {
        return view('Website/About');
    }
    public function Courses()
    {
        $Category='All Courses';
        $Courses=Course::latest()->Paginate(3);
        return view('Website/Courses')->with('Courses',$Courses)
        ->with('Category',$Category);
    }
    public function Contact()
    {
        return view('Website/Contact');
    }
    public function Login()
    {
        return view('Website/Login');
    }

}
