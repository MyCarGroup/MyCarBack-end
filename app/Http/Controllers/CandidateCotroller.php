<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidateCotroller extends Controller
{
    public function addCandidate(Request $request)
    {
        $response = DB::table('candidate')->insert([
                            'firstname' => $request->get('firstname'),
                            'lastname' => $request->get('lastname'),
                            'email' => $request->get('email'),
                            'password' => $request->get('password'),
                            'role' => $request->get('role'),
                            'permis_id' => $request->get('permis_id'),
                            'created_at' => $request->get('created_at'),
                            'updated_at' => $request->get('updated_at'),
            ]);
    }
}
