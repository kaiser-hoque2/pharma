<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Salaries;
use Illuminate\Http\Request;
use Exception;

class SalariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('backend.salary.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.salary.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Salaries $salaries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salaries $salaries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salaries $salaries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salaries $salaries)
    {
        //
    }
}
