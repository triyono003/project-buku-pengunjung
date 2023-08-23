<?php

namespace App\Http\Controllers;
use App\Models\Tamu;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TamuRequest;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;

class ActionController extends Controller
{
  public function create(Request $request) {
    $request->validate([
       'username' => ['required','string','min:3'],
       'name' => ['required','string','min:3'],
       'email' => ['required','string','min:3','email'],
       'phone' => ['required','min:3'],
       'tujuan_kunjungan' => ['required','string','min:3','max:255'],
       'catatan' => ['required','string','min:3','max:255'],
     ]);
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

  public function show() {
    return view('action.index', [
      'datas' => Tamu::orderBy('id', 'desc')->get(),
    ]);
  }
  public function showData(Tamu $tamu) {
    return view('action.data', ['tamu' => $tamu,]);
  }
}