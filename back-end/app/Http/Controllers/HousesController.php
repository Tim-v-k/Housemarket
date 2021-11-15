<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class HousesController extends Controller
{
    function get()
    {
        $houses = Objects::get();
        return response()->json($houses);
    }

    function createHouse(Request $req){
        $validator = Validator::make($req->all(), [
            'street' => 'required|min:3',
            'place' => 'required|min:3',
            'zipcode' => 'required|min:3',
            'region' => 'required|min:3',
            'housenumber' => 'required|integer',
            'rooms' => 'required|integer',
            'bedrooms' => 'required|integer',
            'placement' => 'required',
            'surface' => 'required',
            'price' => 'required|integer',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors, 400);
        }

        Objects::create([
            'street' => $req->street,
            'place' => $req->place,
            'zipcode' => $req->zipcode,
            'region' => $req->region,
            'housenumber' => $req->housenumber,
            'rooms' => $req->rooms,
            'bedrooms' => $req->bedrooms,
            'building_date' => $req->building_date,
            'placement' => $req->placement,
            'surface' => $req->surface,
            'type' => $req->type,
            'date' => $req->date,
            'sold' => $req->sold,
            'price' => $req->price,
        ]);

        return response()->json('Succesfully created a new object');
    }

    function delete($id)
    {
        $house = Objects::find($id);
        $house->delete();
        return response()->json('deleted');
    }

    function getHouse($id)
    {
        $house = Objects::find($id);
        return response()->json($house);
    }

    function editHouse(Request $req, $id){
        // $req = json_decode($req);
        $validator = Validator::make($req->all(), [
            'street' => 'required|min:3',
            'place' => 'required|min:3',
            'zipcode' => 'required|min:3',
            'region' => 'required|min:3',
            'housenumber' => 'required|integer',
            'rooms' => 'required|integer',
            'bedrooms' => 'required|integer',
            'placement' => 'required',
            'surface' => 'required',
            'price' => 'required|integer',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors, 400);
        }

        Objects::find($id)
        ->update([
            'street' => $req->street,
            'place' => $req->place,
            'zipcode' => $req->zipcode,
            'region' => $req->region,
            'housenumber' => $req->housenumber,
            'rooms' => $req->rooms,
            'bedrooms' => $req->bedrooms,
            'building_date' => $req->building_date,
            'placement' => $req->placement,
            'surface' => $req->surface,
            'type' => $req->type,
            'date' => $req->date,
            'sold' => $req->sold,
            'price' => $req->price,
        ]);
        return response()->json('it worked');
    }
}
