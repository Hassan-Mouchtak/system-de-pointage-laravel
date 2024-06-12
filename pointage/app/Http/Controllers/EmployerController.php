<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employers = Employer::all();
        return response()->json(["message" => "hello world"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return response()->json(["data"=>$request->all()]);

        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tele' => 'required'
        ]);

        $employer = Employer::create(array_merge($request->all(), ['password' => Hash::make($request->password)]));
        return response()->json([
            'status' => 'success',
            'data' => $employer,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
    {
        return $employer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employer $employer)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tele' => 'required'
        ]);

        $employer->update($request->validated());
        return response()->json([
            'status' => 'success',
            'data' => $employer,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Employer deleted successfully',
        ]);
    }
}
