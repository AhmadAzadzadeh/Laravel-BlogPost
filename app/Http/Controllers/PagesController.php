<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index() {
        $title = "Welcome To Laravel Web Framework";
        // We have 2 ways for passing data to our view 
        // 1.
        // return view("pages.index", compact("title"));
        // 2.
        return view("pages.index") -> with("title", $title);
    }

    public function About() {
        $title = "About Us";
        return view("pages.about") -> with("title", $title);
    }

    public function Services() {
        $data = array(
            "title" => "Services",
            "services" => ["Web Design", "Programming", "SEO"]
        );
        return view("pages.services") -> with($data);
    }
}
