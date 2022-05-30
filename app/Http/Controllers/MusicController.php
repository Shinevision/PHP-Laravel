<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $id = $request->route("id");
        $model = \App\Models\Componist::where('id',$id)->first();
        $musicSchool = \App\Models\Muziekschool::where('id',$model->muziekschool_id)->first();

        $formattedDate = date("F jS, Y", strtotime($model->geboortedatum));
        return "Hello $model->naam born on $formattedDate. Your school is $musicSchool->naam located at $musicSchool->plaatsnaam";
    }
}
