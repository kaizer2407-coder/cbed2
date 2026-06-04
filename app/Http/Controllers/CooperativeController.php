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

        $totalCooperatives = Cooperative::count();

        // 👇 COUNT PER PROVINCE
        $byProvince = Cooperative::select('province')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('province')
            ->orderBy('total', 'desc')
            ->get();

        // ✅ ADD THIS ONLY (Pampanga count)
        $pampangaCount = Cooperative::where('province', 'Pampanga')->count();
        $bataanCount = Cooperative::where('province', 'Bataan')->count();
        $bulacanCount = Cooperative::where('province', 'Bulacan')->count();
        $neCount = Cooperative::where('province', 'Nueva Ecija')->count();
        $tarlacCount = Cooperative::where('province', 'Tarlac')->count();
        $zambalesCount = Cooperative::where('province', 'Zambales')->count();
        $aaCount = Cooperative::where('province', 'Aurora')->count();
        $nvCount = Cooperative::where('province', 'Nueva Viscaya')->count();

        return view('cooperative', compact(
            'cooperatives',
            'totalCooperatives',
            'byProvince',
            'pampangaCount',
            'bataanCount',
            'bulacanCount',
            'neCount',
            'tarlacCount',
            'zambalesCount',
            'aaCount',
            'nvCount',
        ));
    }

    public function destroy($id)
    {
        Cooperative::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Deleted successfully!');
    }

    public function farmers()
    {
        return $this->hasMany(Farmer::class);
    }


    // STORE DATA
    public function store(Request $request)
        {

            // CONCATENATE ADDRESS
            $addressLine =
                $request->barangay . ' ' .
                $request->city_municipality . ' ' .
                $request->province;

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

                // SAVE CONCATENATED ADDRESS
                'address_line' => $addressLine,
            ]);

            return redirect()->back()->with('success', 'Cooperative saved successfully!');
        }

        public function update(Request $request, $id)
    {
        $coop = Cooperative::findOrFail($id);

        $addressLine =
            $request->barangay . ' ' .
            $request->city_municipality . ' ' .
            $request->province;

        $coop->update([

            'cda_registration_no' => $request->cda_registration_no,
            'herd_code' => $request->herd_code,
            'cooperative_name' => $request->cooperative_name,
            'province' => $request->province,
            'city_municipality' => $request->city_municipality,
            'barangay' => $request->barangay,
            'year' => $request->year,
            'address_line' => $addressLine,

        ]);

        return redirect()->back()
            ->with('success', 'Updated successfully!');
    }
}