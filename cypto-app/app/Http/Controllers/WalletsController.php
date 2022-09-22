<?php

namespace App\Http\Controllers {

    use App\Models\wallet;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

  class WalletsController extends Controller {
    //
    //get list
    public function selectWallet() {
      $return = wallet::all();
      return $return;
    }

    //get by id
    public function getWalletById(Request $request) {
      $return = wallet::find($request->id);
      return $return;
    }

    //insert new wallet
    public function addNewWallet(Request $request) {
      // ตรวจสอบข้อมมูล
      $request->validate([
        'currency_id'     => 'required',
        'total'           => 'required'
      ]
      );
      //save to db
      $wallet = new wallet;
      $wallet->currency_id = $request->currency_id;
      $wallet->user_id = Auth::user()->id;
      $wallet->total = $request->total;
      $wallet->save();
      return redirect()->back()->with('success', "success");
    }

    //edit
    public function updateWallet(Request $request) {
      $wallet = new wallet;
      if ($request->currency_id) {
        $wallet->currency_id = $request->currency_id;
      }
      if ($request->total) {
        $wallet->total = $request->total;
      }
      if ($wallet->currency_id || $wallet->total) {
        $wallet->save();
        return redirect()->back()->with('success', "success");
      }
    }

    //delete
    public function deleteWallet(Request $request) {
      $wallet = wallet::find($request->id);
      $wallet->delete;
    }
  }
}
