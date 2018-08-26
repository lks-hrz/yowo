<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("users.yourWorld");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $flightnumber = $request->flightnumber;

        $date = $request->date;

        // Lufthansa REST API with OAuth
// exchange client_id and client_secret for the token
        $post = [
            'client_id' => '526zxcppnedtg79nprkvqga2',
            'client_secret' => 'dKCza6vJN6',
            'grant_type'   => 'client_credentials',
        ];
        $ch = curl_init();
// exchange credentials for token
        $url = "https://api.lufthansa.com/v1/oauth/token";
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec ($ch);
        curl_close ($ch);
        $tok = json_decode($output, true);
// place the token in HTTP header to get list of airports
        $ch = curl_init();
// end-point for list of airlines
        curl_setopt($ch, CURLOPT_URL,"https://api.lufthansa.com/v1/operations/flightstatus/" . strtoupper($flightnumber) . "/" . $date);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $headers = [
            'Accept: application/json',
            'Authorization: Bearer '.$tok["access_token"],
            'X-Originating-Ip: '.$_SERVER['SERVER_ADDR']
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $flight = json_decode($server_output)->FlightStatusResource->Flights->Flight;

        //dd(duration($flight->Arrival->ScheduledTimeUTC->DateTime));

       /* $flight = $request->data["FlightStatusResource"]["Flights"]["Flight"];
        $flightnumber = $flight["OperatingCarrier"]["AirlineID"] . $flight["OperatingCarrier"]["FlightNumber"];*/

       $departure = getCarbon($flight->Departure->ScheduledTimeUTC->DateTime);
        $arrival = getCarbon($flight->Arrival->ScheduledTimeUTC->DateTime);
        $duration = duration($arrival, $departure);
        /*dd(convertToHoursMins($duration, '%02d hours %02d minutes'));*/

        $flight = Flight::create(array(
            "departure_airport" => $flight->Departure->AirportCode,
            "departure_time" => $flight->Departure->ScheduledTimeUTC->DateTime,
            "arrival_airport" => $flight->Arrival->AirportCode,
            "arrival_time" => $flight->Arrival->ScheduledTimeUTC->DateTime,
            "flightnumber" => $flightnumber,
            "duration" => $duration,
            "uid" => auth()->id(),


        ));

        return redirect()->route("yourWorld")->with("success", "flight added");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flight $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
