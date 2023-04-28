<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Sosmed;
use App\Models\Skills_Framework;
use App\Models\Skills_Language;
use App\Models\WebProject;

class HomeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $home = Home::get();
        $sosmed = Sosmed::get();
        $language = Skills_Language::get();
        $framework = Skills_Framework::get();


        return view ('frontend.home',[
            'home' => $home,
            'sosmed' => $sosmed,
            'language' => $language,
            'framework' => $framework
        ]);
    }

    public function website()
    {
        $web = WebProject::get();
        return view ('frontend.web',[
            'web' => $web
        ]);
    }

    public function DetailWeb($id) {

            $web = WebProject::findOrFail($id);
            return view ('frontend.web',[
                'web' => $web
            ]);
    }

    public function mobile()
    {
        return view ('404');
    }
}
