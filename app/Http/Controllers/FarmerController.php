<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmer;
use App\Models\Cooperative;

class FarmerController extends Controller
{
    // DISPLAY FARMERS + SEARCH
        public function index(Request $request)
        {
            $search = $request->search;

            $farmers = Farmer::with('cooperative')
                ->when($search, function ($query) use ($search) {

                    $query->where(function ($q) use ($search) {

                        $q->where('first_name', 'like', "%{$search}%")
                        ->orWhere('last_name', 'like', "%{$search}%")
                        ->orWhere('province', 'like', "%{$search}%")
                        ->orWhere('municipality', 'like', "%{$search}%")
                        ->orWhere('barangay', 'like', "%{$search}%")
                        ->orWhere('position', 'like', "%{$search}%")
                        ->orWhere('work', 'like', "%{$search}%")
                        ->orWhere('year', 'like', "%{$search}%")
                        ->orWhere('contact_number', 'like', "%{$search}%")
                        ->orWhere('civil_status', 'like', "%{$search}%");
                    })

                    // ✅ cooperative search properly attached
                    ->orWhereHas('cooperative', function ($q) use ($search) {
                        $q->where('cooperative_name', 'like', "%{$search}%");
                    });
                })
                ->latest()
                ->paginate(10)
                ->withQueryString();

            $cooperatives = Cooperative::all();

            return view('farmer', compact('farmers', 'cooperatives'));
        }

    // STORE FARMER
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        Farmer::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,

            'birthday' => $request->birthday,
            'contact_number' => $request->contact_number,
            'civil_status' => $request->civil_status,

            'region' => $request->region,
            'province' => $request->province,
            'municipality' => $request->municipality,
            'barangay' => $request->barangay,

            'cooperative_id' => $request->cooperative_id,

            'position' => $request->position,
            'work' => $request->work,

            'spouse' => $request->spouse,
            'spouse_occupation' => $request->spouse_occupation,

            'year' => $request->year,
        ]);

        return redirect()->back()->with('success', 'Farmer added successfully!');
    }

    // DELETE FARMER
    public function destroy($id)
    {
        Farmer::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Farmer deleted successfully!');
    }

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }
}