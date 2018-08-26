<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Flight;
use App\Models\Story;
use App\Models\User;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function show($id)
    {

        $user = User::where("id", "=", $id)->get();

        $map = $this->World($id);

        $stats = $this->Stats($id);

        $stories = $this->Stories($id);


        return view('users.show', compact("user", "map", "stats", "stories"));

    }

    public function store()
    {

    }

    public function edit($id)
    {
        $user = User::where("id", "=", $id)->get();



        return view('users.edit', compact("user"));
    }

    public function update(Request $request, $id)
    {



        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::where("id", "=", $id)->first();

            /*$avatar = $request->avatar;
            $filename = time() . '.' . $avatar;
            $request->avatar->storeAs("public/avatars", $filename);
/*            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));*/
            /*$user->avatar = $filename;*/


        if ($request->file('avatar')){
            $avatarName = $user->id.'_avatar'.time().'.'.$request->file('avatar')->getClientOriginalName();

            $request->avatar->storeAs('public/avatars',$avatarName);
            $user->avatar = $avatarName;
        }





        $user->name = $request->name;
        $user->email = $request->email;



        $user->save();

        return back()->with('success', 'Changes have been changed!');
    }

    public function yourWorld()
    {

        $flightCodes = $this->World(auth()->id());


        return view('users.yourWorld', compact("flightCodes"));
    }

    public function yourStats()
    {
        $total_duration = $this->Stats(auth()->id());


        return view('users.yourStats', compact("total_duration"));
    }

    public function yourStories()
    {

        $stories = $this->Stories(auth()->id());


        return view('users.yourStories', compact("stories"));
    }


    private function World($id)
    {
        $allUserFlights = Flight::where("uid", "=", $id)->get();




        $flightCodes = [];
        foreach ($allUserFlights as $key => $flight) {
            $flightCodes[$key] = [
                "departure" => Airport::where("code", "=", $flight["departure_airport"])->get(),
                "arrival" => Airport::where("code", "=", $flight["arrival_airport"])->get(),
                "date" => $flight["departure_time"],
                "departure_code" => $flight["departure_airport"],
                "arrival_code" => $flight["arrival_airport"]
            ];
        }

        return $flightCodes;

    }

    private function Stats($id)
    {
        $stats = Flight::where("uid", "=", $id)->get();


        $durations = [];

        foreach ($stats as $key => $val){
            array_push($durations, $val->duration);
        }

        $total_duration = array_sum($durations);



        return $total_duration;
    }

    private function Stories($id)
    {

        if ($id == auth()->id()){
            $stories = Story::where("user_id", "=", $id)->with('user')->orderBy("created_at", "DESC")->get();
        } else {
            $stories = Story::where("user_id", "=", $id)->where('flags', '<', 5)->where("private", "=", "public")->with('user')->orderBy("created_at", "DESC")->get();

        }

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

        /*dd($stories);*/

        return $stories;
    }
}