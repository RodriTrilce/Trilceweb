<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Colegio\VenueModel as VenueDB;
use App\Models\Colegio\VenueAddressModel;
use App\Models\Colegio\VenueInvestmentModel;
use Purifier;

class VenueColegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $venue = VenueDB::all();
      return view('admin.venue_colegio.index')->with(['data' => $venue]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venue = VenueDB::find($id);
        $venue_direction  = VenueAddressModel::where('idvenue', $id)->get();
        $venue_investment = VenueInvestmentModel::where('idvenue', $id)->get();

        return view('admin.venue_colegio.edit')->with([
            'venue' => $venue,
            'directions' => $venue_direction,
            'investments' => $venue_investment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        foreach ($request->direcciones as $direccion) {
            $temp = VenueAddressModel::find($direccion['id']);
            $temp->grades  = $direccion['grades'];
            $temp->address = $direccion['address'];
            $temp->phone   = $direccion['phone'];
            $temp->save();
        }

        foreach ($request->inversiones as $inversion) {
            $temp = VenueInvestmentModel::find($inversion['id']);
            $temp->range  = $inversion['range'];
            $temp->admissionfee = $inversion['admissionfee'];
            $temp->enrollment   = $inversion['enrollment'];
            $temp->monthlypayment   = $inversion['monthlypayment'];
            $temp->save();
        }

        $venue = VenueDB::find($id);
        $venue->content  = Purifier::clean($request->content);
        $venue->save();

        return back()->with('success', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
