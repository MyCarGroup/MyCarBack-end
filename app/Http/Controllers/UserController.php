<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request()->all();
    }

    public function index(Request $request)
    {
        $xml = simplexml_load_string(file_get_contents('http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl')); // where $xml_string is the XML data you'd like to use (a well-formatted XML string). If retrieving from an external source, you can use file_get_contents to retrieve the data and populate this variable.
        $json = json_encode($xml); // convert the XML string to JSON
        $array = json_decode($json, true);
        // foreach ($request->xml->children() as $state) {
        //     $states[] = array('state' => (string) $state->name);
        // }
        //  echo $request->xml_data;
        return  $array;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param \App\Mission $mission
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::get();

        return response()->json($users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Mission $mission
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Mission             $mission
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Mission $mission
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
    }

    public function getAll(Mission $mission)
    {
        response()->json(User::get());
    }

    public function signup(Request $request)
    {
        $response = User::create([
                                'firstname' => $request->get('firstname'),
                                'lastname' => $request->get('lastname'),
                                'email' => $request->get('email'),
                                'role' => $request->get('role'),
                                'password' => bcrypt($request->get('password')),
                                 ]);

        return response()->json($response);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->get('email'))->first();
        if ($user != null && $user != null) {
            if (Hash::check($request->get('password'), $user->password)) {
                // The passwords match...
                return response()->json($user);
            } else {
                return response()->json(['error' => 'invalid password']);
            }
        } else {
            return response()->json(['error' => 'invalid email']);
        }
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
