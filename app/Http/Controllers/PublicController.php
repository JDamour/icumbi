<?php

namespace App\Http\Controllers;

use App\User;
use App\House;
use App\Country;
use App\Uploads;
use App\Province;
use App\Paymentfrequency;
use App\Http\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DisplayHousesOnHOusePage()
    {
        $houses = House::paginate(6);
        return view('client.index', compact('houses'));
    }
    public function DisplayHousesOnHomePage()
    {
        $houses = House::paginate(6);
        return view('welcome', compact('houses'));
    }

    public function east()
    {
        $houses =DB::table('houses')->whereprovince_id(3)->get();
        return view('client.province.east', compact('houses'));
        // dd($house);
    }
    public function kigali()
    {
        // $houses = House::all();
        $houses =DB::table('houses')->whereprovince_id(5)->get();
        return view('client.province.kigali', compact('houses'));
        // dd($houses);
    }
    public function north()
    {
        // $houses = House::all();
        $houses =DB::table('houses')->whereprovince_id(1)->get();
        return view('client.province.north', compact('houses'));
        dd($house);
    }
    public function west()
    {
        // $houses = House::all();
        $houses =DB::table('houses')->whereprovince_id(4)->get();
        return view('client.province.west', compact('houses'));
        dd($house);
    }
    public function south()
    {
        // $houses = House::all();
        $houses =DB::table('houses')->where('province_id',2)->get();
        return view('client.province.south', compact('houses'));
        dd($house);
    }
    public function paymentfrequency()
    {
        $payments = Paymentfrequency::all();
        return view('client.province.kigali', compact('payments'));
    }
    
    public function upload()
    {
        $uploads = Upload::all();
        return view('client.index', compact('uploads'));
    }
    public function uploadd()
    {
        $uploads = Upload::all();
        return view('client.province.kigali', compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $search = Input::get('search');
        if ($search != "") {
            $house = House::where('houselocation','LIKE','%'.$search.'%')
            ->orWhere('housePrice','LIKE','%'.$search.'%')
            ->orWhere('paymentfrequency_id','LIKE','%'.$search.'%')
            ->get();
        if(count($house)>0)
            return view('client.search')->withDetails($house)->withQuery ( $search );

        }
        return view('client.search')->withMessage("No results found " );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchSuggestion(Request $request)
    {
         return House::where('houselocation', 'LIKE', '%'.$request->q.'%')->get();

        
    }

    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $house = House::find($id);
        return view('client.show', compact('house'));
        // return view('client.show', ['house'=>$house]);
    }
    public function showw($id)
    {
        //
        $provinces = Province::find($id);
        return view('client.province.kigali', compact('provinces'));
        // return view('client.show', ['house'=>$house]);
    }

    /**
     *
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
