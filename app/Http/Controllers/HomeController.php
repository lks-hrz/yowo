<?php
namespace App\Http\Controllers;

use App\Models\LikesAndComments;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function root()
    {
        return redirect()->route('home');
    }

    public function home()
    {
        $stories = Story::with('user')->where('private', '!=', 'private')->where('flags', '<', 5)->orderBy("created_at", "DESC")->get();
        foreach ($stories as $key => $val) {
            $str = explode("=>", $val->description);
            $substr = explode(":!:", $str[1])[0];
            /*if(strlen($substr) < 100) {
                dd($str);
            } else {
                dd("yes");
            }*/
            $stories[$key]->description = $substr;

        };







        return view('home', compact("stories"));
    }

    public function impressum()
    {
        return view('partials.impressum');
    }
}