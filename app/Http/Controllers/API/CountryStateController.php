<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;
use App\State;

class CountryStateController extends Controller
{
    /**
     * Retrieve countries data
     *
     * @return void
     */
    public function getCountries()
    {
        $data = Country::get();

        return response()->json($data);
    }

    /**
     * Retrieve states data
     *
     */
    public function getStates(Request $request)
    {
        $data = State::where('country_id', $request->country_id)->get();

        return response()->json($data);
    }
}
