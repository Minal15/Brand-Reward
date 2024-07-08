<?php

namespace App\Http\Controllers;

use App\Models\BrandReward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BrandRewardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'url' => 'required|url',
            'key' => 'required|string',
            'tracking_id' => 'nullable|string|max:64',
            'cpc' => 'nullable|integer',
        ]);

        $brandReward = BrandReward::create($validatedData);

        $redirectUrl = 'https://r.brandreward.com/?' . http_build_query([
            'key' => $validatedData['key'],
            'id' => $validatedData['tracking_id'],
            'url' => $validatedData['url'],
        ]);
        return Redirect::away($redirectUrl);    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
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
