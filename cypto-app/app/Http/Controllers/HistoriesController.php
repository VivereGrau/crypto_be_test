<?php

namespace App\Http\Controllers;

use App\Models\history;
use Illuminate\Http\Request;

class HistoriesController extends Controller
{
    //
    //get list
    public function selectHistory() {
        $return = history::all();
        return $return;
      }
  
      //get by id
      public function getHistoryById(Request $request) {
        $return = history::find($request->id);
        return $return;
      }
  
      //insert new history
      public function addNewHistory(Request $request) {
        // ตรวจสอบข้อมมูล
        $request->validate([
          'currency_id'  => 'required',
          'from_user_id' => 'required',
          'is_in_system' => 'required',
          'to_user_id'   => 'required',
          'ref_to_user'  => 'required',
          'to_address'   => 'required',
          'action'       => 'required',
          'total'        => 'required',
          'price'        => 'required',
        ]
        );
        //save to db
        $history = new history;
        $history->currency_id  = $request->currency_id;
        $history->is_in_system = $request->is_in_system;
        $history->to_user_id   = $request->to_user_id;
        $history->ref_to_user  = $request->ref_to_user;
        $history->to_address   = $request->to_address;
        $history->action       = $request->action;
        $history->total        = $request->total;
        $history->price        = $request->price;
        $history->save();
        return redirect()->back()->with('success', "success");
      }
  
      //delete
      public function deleteHistory(Request $request) {
        $history = history::find($request->id);
        $history->delete;
      }
}
