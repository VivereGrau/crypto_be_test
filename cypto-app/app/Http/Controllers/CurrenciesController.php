<?php

namespace App\Http\Controllers;

use App\Models\currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrenciesController extends Controller
{
    //get list
    public function selectCurrency(){
        $return = currency::all();
        return $return;
    }

    //get by id
    public function getCurrencyById(Request $request){
        $return = currency::find($request->id);
        return $return;
    }

    //insert new currency
    public function addNewCurrency(Request $request){
        // ตรวจสอบข้อมมูล
        $request->validate([
            'currency_name' => 'required|unique:currencies|max:255',
            'type'          => 'required|max:255'
        ],
        [
            'currency_name.required' => "Currency must have name!!!",
            'currency_name.max'      => "Name limit is 255 character!!!",
            'currency_name.unique'   => "This name is already in system!!!"
        ]
        );
        //save to db
        $currency = new currency;
        $currency->currency_name = $request->currency_name;
        $currency->type = $request->type;
        $currency->save();
        // $data = array();
        // $data['currency_name'] = $request->currency_name;
        // $data['type'] = $request->type;

        // DB::table('currencies')->insert($data);
        return redirect()->back()->with('success', "success");
    }

    //edit
    public function updateCurrency(Request $request){
        $currency = new currency;
        if($request->currency_name){
          $currency->currency_name = $request->currency_name;  
        }
        if($request->type){
          $currency->type = $request->type;  
        }
        if($currency->currency_name || $currency->type){
          $currency->save();
          return redirect()->back()->with('success', "success");  
        }
    }

    //delete
    public function deleteCurrency(Request $request){
        $currency = currency::find($request->id);
        $currency->delete;
    }
}
