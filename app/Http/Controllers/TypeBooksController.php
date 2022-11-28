<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;



class BookController extends Controller
{
    
    public function index($id){

        if(($id) === "1"){     
            return view('Detail',[
            
                "check2" => books::find($id),
                "title" => "Komi-san wa Komyushou Desu",
                "page_container" => "Book List",
                
            ]);
        }  
        else if(($id) === "2"){
            return view('Detail',[
            
                "check2" => books::find($id),
                "title" => "Ayah",
                "page_container" => "Book List",
            ]);
        }

        else if(($id) === "3"){
            return view('Detail',[
            
                "check2" => books::find($id),
                "title" => "Timun Mas",
                "page_container" => "Book List",
            ]);
        }
    }

    public function Category1($id)
    {
        if(($id) === "1"){     
            return view('Detail',[
            
                "check2" => books::find($id),
                "title" => "Category - Manga",
                "page_container" => "Category - Manga",
                
            ]);
        }
    }

    public function Category2($id)
    {
        if(($id) === "2"){     
            return view('Detail',[
            
                "check2" => books::find($id),
                "title" => "Category - Novel",
                "page_container" => "Category - Novel",
                
            ]);
        }
    }

    public function Category3($id)
    {
        if(($id) === "3"){     
            return view('Detail',[
            
                "check2" => books::find($id),
                "title" => "Category - Folklore",
                "page_container" => "Category - Folklore",
                
            ]);
        }
    }

    public function Publisher()
    {
        return view('Publisher',[
            "title" => "Publisher",
            "page_container" => "Publisher"
        ]);
    }

    public function Contact()
    {
        return view('Contact',[
            "title" => "Contact",
            "page_container" => "Contact"
        ]);
    }
}