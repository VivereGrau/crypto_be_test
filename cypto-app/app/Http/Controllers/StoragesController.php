<?php

namespace App\Http\Controllers {
  use App\Models\storage;
  use Illuminate\Http\Request;

  class StoragesController extends Controller {
    //
    //get list
    public function selectStorage() {
      $return = storage::all();
      return $return;
    }

    //get by id
    public function getStorageById(Request $request) {
      $return = storage::find($request->id);
      return $return;
    }

    //insert new storage
    public function addNewStorage(Request $request) {
      // ตรวจสอบข้อมมูล
      $request->validate([
        'currency_id'     => 'required',
        'currency_serial' => 'required'
      ]
      );
      //save to db
      $storage = new storage;
      $storage->currency_id = $request->currency_id;
      $storage->currency_serial = $request->currency_serial;
      $storage->save();
      return redirect()->back()->with('success', "success");
    }

    //edit
    public function updateStorage(Request $request) {
      $storage = new storage;
      if ($request->currency_id) {
        $storage->currency_id = $request->currency_id;
      }
      if ($request->currency_serial) {
        $storage->currency_serial = $request->currency_serial;
      }
      if ($storage->currency_id || $storage->currency_serial) {
        $storage->save();
        return redirect()->back()->with('success', "success");
      }
    }

    //delete
    public function deleteStorage(Request $request) {
      $storage = storage::find($request->id);
      $storage->delete;
    }
  }
}
