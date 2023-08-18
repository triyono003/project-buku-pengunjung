<?php

namespace App\Http\Controllers;
use App\Models\Tamu;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ActionController extends Controller
{
 public function create(Request $request)
   {
     Tamu::create([
         'username' => $request->username,
         'name' => $request->name,
         'email' => $request->email,
         'phone' => $request->phone,
         'tujuan_kunjungan' => $request->tujuan_kunjungan,
         'waktu_kunjungan' => $request->waktu_kunjungan,
         'catatan' => $request->catatan,
      ]);
     return back();
   }
   
   public function show()
   {
     return view('action.index',[
         'datas' => Tamu::orderBy('id','desc')->get(),
      ]);
   }
   
   public function showData($id)
   {
     $tamus = Tamu::find($id);
     return view('action.data',[
      'tamus' => $tamus,
      ]);
   }
}
