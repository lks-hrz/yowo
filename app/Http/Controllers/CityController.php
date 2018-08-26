<?php
namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;


class CityController extends Controller
{
    public function show(Request $request)
    {



        if ($request->city != null){
            $stories = Story::with('user')->where("city", "=", $request->city)->orderBy("created_at", "DESC")->get();
            foreach ($stories as $key => $val) {
                $str = explode("=>", $val->description);
                $substr = explode(":!:", $str[1])[0];
                /*if(strlen($substr) < 100) {
                    dd($str);
                } else {
                    dd("yes");
                }*/
                $stories[$key]->description = $substr;
            }

            return view('cities.show', compact("stories"));
        } else {
            return view('home');
        }


    }
}