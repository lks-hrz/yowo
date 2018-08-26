<?php
namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{


    public function show()
    {

        $stories = Story::where('flags', '>=', 5)->get();

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

        return view('admin.show', compact('stories'));
    }

    public function delete(Request $request)
    {


        Story::find($request->story_id)->delete();
    }

    public function resetFlags(Request $request)
    {

        $story = Story::where("id", "=", $request->story_id)->first();



        $story->flags = 0;

        $story->save();
    }
}