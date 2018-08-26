<?php

namespace App\Http\Controllers;


use App\Models\LikesAndComments;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;


class StoryController extends Controller
{
    public function show($id)
    {

        $story = Story::where("id", "=", $id)->with("user")->with("userLike")->get();
        $story_liked = false;
        foreach ($story[0]->userLike as $key => $val) {
            if (auth()->id() == $val->user_id) {
                $story_liked = true;
            }
        }
        $user_name = $story[0]->user->name;
        $user_id = $story[0]->user->id;
        $avatar = $story[0]->user->avatar;
        $story->toArray();
        $content = $story[0];
        $text = explode(":!:", $content->description);
        $images = explode(":!:", $content->images);
        $fin_text = [];
        $fin_images = [];
        $count = 0;
        //dd(count($images));
        foreach ($text as $key => $val) {

            $expl_txt = explode("=>", $val);
            $expl_img = explode("=>", $images[$key]);
            //dd($expl_txt, $expl_img);
            if (count($expl_txt) >= 2) {
                $fin_text[$key] = $expl_txt[1];

                $fin_images[$key] = $expl_img[1];

            }

        }

        $data = ["story_id" => $id, "city" => $content->city, "title" => $content->title, "title_image" => $story[0]->title_img, "text" => $fin_text, "images" => $fin_images, "uname" => $user_name, "user_id" => $user_id, "avatar" => $avatar, "story_liked" => $story_liked];

        return view('stories.show', compact("data"));

    }

    public function create()
    {
        return view('stories.create');
    }

    public function postCreate(Request $request)
    {

        $privacy = "public";

        if ($request->private == "private") {
            $privacy = "private";
        }

        $this->validate($request, [
            "city" => "required",
            "title" => "required",
            "title_img" => "required"
        ]);
        $content = $request->request;
        $text = "";
        $images = "";
        /*unset($content->token);
        unset($content->method);
        unset($content->title);*/
        #dd($request->file("upload_1"));
        $count = 0;
        $text_content = [];

        foreach ($content as $key => $val) {
            $count++;
            //var_dump($val);
            if (strpos($key, "text") !== false) {
                $str = "<p>" . implode("</p>\n\n<p>", preg_split('/\n(?:\s*\n)+/', $val)) . "</p>";
                $text .= $key . "=>" . $str . ":!:";
                /*array_push($text, [$key => $str]);*/

                //$text_content[$key] = $val;
            }
        }
        //dd($request->file());
        $image_content = [];
        foreach ($request->file() as $key => $item) {
            /*if($key == "title_img") {
                $request->file("title_img")->storeAs('public/stories', $request->file("title_img")->getClientOriginalName());
            } else {
                $image_content[$key] = $item->getClientOriginalName();
            }*/

            if($key == "title_img") {
                $request->file("title_img")->storeAs('public/stories', $request->file("title_img")->getClientOriginalName());
            } else {

                $images .= $key . "=>" . $item->getClientOriginalName() . ":!:";
                $item->storeAs("public/stories", $item->getClientOriginalName());

            }

        }
        /*dd(json_encode($text_content), json_encode($image_content));*/
        $img_arr = explode(":!:", $images);
        for($i = 0; $i < count($img_arr); $i++) {
            if($img_arr[$i] == "") {
                $img_arr[$i] = "upload_" . ($i + 1) . "=>" . "none" . ":!:";
            }
        }
        //dd($text, implode(":!:", $img_arr));
        //dd(implode(":!:", $img_arr));

        // var_dump($images, $text);

        //dd($test, explode(":!:", $images));

        #dd($images);

        $story_id = Story::create([
            "user_id" => auth()->id(),
            "city" => $request->city,
            "title" => $request->title,
            "description" => $text,
            "private" => $privacy,
            "images" => implode(":!:", $img_arr),

            "title_img" => $request->file("title_img")->getClientOriginalName()
        ])->id;


        return redirect()->route("showstory", $story_id);


    }

    public function delete($id)
    {
        Story::find($id)->delete();

        return back()->with('success', 'Story has been deleted');


    }

    public function like(Request $request)
    {

        $hash = auth()->id() . "-" . $request->story_id;

        if ($request->delete == false){
            LikesAndComments::create([
                "user_id" => auth()->id(),
                "story_id" => $request->story_id,
                "hash" => $hash,
            ]);

            $story = Story::where("id", "=", $request->story_id)->first();


            $count = $story->likes;

            $new_count = $count + 1;
            $story->likes = $new_count;

            $story->save();
        } else {
            LikesAndComments::where("story_id", "=", $request->story_id)->where("user_id", "=", auth()->id())->delete();
        }




    }

    public function flag(Request $request)
    {
        $story = Story::where("id", "=", $request->story_id)->first();


        $count = $story->flags;


        $new_count = $count + 1;

        $story->flags = $new_count;

        $story->save();


        return 'Thanks for your report. We will take care of it ASAP';
    }


}