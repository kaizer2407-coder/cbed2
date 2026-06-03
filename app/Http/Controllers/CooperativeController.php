<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cooperative;

class CooperativeController extends Controller
{
    // SHOW PAGE (optional)
    public function index()
    {
        $cooperatives = Cooperative::orderBy('id', 'asc')->get();

        return view('cooperative', compact('cooperatives'));
    }

    public function destroy($id)
    {
        Cooperative::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Deleted successfully!');
    }

    // STORE DATA
    public function store(Request $request)
    {
        Cooperative::create([
            'cda_registration_no' => $request->cda_registration_no,
            'herd_code' => $request->herd_code,
            'cooperative_name' => $request->cooperative_name,
            'accreditation_status' => $request->accreditation_status,
            'cooperative_type' => $request->cooperative_type,
            'category' => $request->category,
            'date_established' => $request->date_established,
            'year' => $request->year,
            'region' => $request->region,
            'province' => $request->province,
            'city_municipality' => $request->city_municipality,
            'barangay' => $request->barangay,
            'address_line' => $request->address_line,
        ]);

        return redirect()->back()->with('success', 'Cooperative saved successfully!');
    }
}