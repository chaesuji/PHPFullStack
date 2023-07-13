<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Item::orderBy('created_at', 'desc')->get();
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
        $result = new Item;
        $result->content = $request->item["content"];
        $result->save();

        return $result;
        // json 형태
        // {
        //     "item": {
        //         "content": "내용내용",
        //         "complated": true
        //     }
        // }
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
        $result = Item::find($id);

        if($result){
            $result->complated = $request->item['complated'] ? true : false;
            $result->complated_at = $request->item['complated'] ? Carbon::now() : null;
            // $result->complated = $request->item['complated'];
            // $result->complated_at = Carbon::now();
            $result->save();

            return view('ListComponent')->with('result', $result);
        }
        return 'No Data...';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Item::find($id);

        if($result){
            $result->delete();

            return 'Seccessfully Delete';
        }
        return 'No Data...';
    }
}
