<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    public function index()
    {
        // // Raw SQL
        // $servicesRaw = DB::select ('SELECT * FROM services');

        // // Query Builder
        // $servicesQueryBuilder = DB::table('services')->get();

        // // Eloquent ORM
        // $servicesEloquent = Service::all();

        // dd($servicesRaw, $servicesQueryBuilder, $servicesEloquent) ;

        $allServices = Service::all();
        return view('services.index', compact('allServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    // public function show(string $id)
    // {
    //     $service = Service::find($id);
    //     dd($service);
    // }

    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
