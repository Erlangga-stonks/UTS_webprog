<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;


class PublishController extends Controller
{
    public function PublisherSimegawa($id)
    {
        if(($id) === "1"){     
            return view('PublisherSimegawa',[
                "check1" => Publisher::find($id),
                "NamePub" => "Publisher",
                "page_container" => "Publisher",
                "Title" => "Komi-san wa Komyushou Desu",
                "Author" => "Tomohito ODA"
            ]);
        }
    }

    public function PublisherTika($id)
    {
        if(($id) === "2"){     
            return view('PublisherTika',[
            
                "check1" => Publisher::find($id),
                "title" => "Publisher",
                "page_container" => "Publisher",
                "Title" => "Ayah",
                "Author" => "Andrea Hirata"
            ]);
        }
    }

    public function PublisherEka($id)
    {
        if(($id) === "3"){     
            return view('PublisherEka',[
            
                "check1" => Publisher::find($id),
                "title" => "Publisher",
                "page_container" => "Publisher",
                "Title" => "Timun Mas",
                "Author" => "Dede Firmansyah"
            ]);
        }
    }
}