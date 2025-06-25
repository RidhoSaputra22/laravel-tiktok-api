<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) {
            $user = Auth::user();
            return response()->json([
                'status' => 200,
                'user' => $user,
            ]);
        }

        return response()->json([
            'status' => 401,
            'message' => 'Unauthorized',
        ], 401);
    }

    public function regist(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [

            'phone' => 'required',
            'password' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'nama' => '-',
            'tanggal_lahir' => now(),
            'gender' => '-',
            'email' => '-',
            'phone' => $request->phone,
            'password' => $request->password,
            'photo' => '-',
        ]);
        return response()->json([
            'status' => 200,
            'user' => $user,
        ]);
    }
}