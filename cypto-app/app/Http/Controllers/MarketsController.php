<?php

namespace App\Http\Controllers;

use App\Models\market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketsController extends Controller
{
    //
    //get list
    public function selectMarket() {
        $return = market::all();
        return $return;
      }
  
      //get by id
      public function getMarketById(Request $request) {
        $return = market::find($request->id);
        return $return;
      }
  
      //insert new market
      public function addNewMarket(Request $request) {
        // ตรวจสอบข้อมมูล
        $request->validate([
          'currency_id'     => 'required',
          'action'          => 'required',
          'total'           => 'required',
          'price'           => 'required'
        ]
        );
        //save to db
        $market = new market;
        $market->currency_id = $request->currency_id;
        $market->user_id     = Auth::user()->id;
        $market->action      = $request->action;
        $market->total       = $request->total;
        $market->price       = $request->price;
        $market->save();
        return redirect()->back()->with('success', "success");
      }
  
      //delete
      public function deleteMarket(Request $request) {
        $market = market::find($request->id);
        $market->delete;
      }
}
