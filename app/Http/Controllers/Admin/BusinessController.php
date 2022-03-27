<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\BusinessServices;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $busicess = BusinessServices::getAllBusiness();

        return view('admin.business.business', compact('busicess'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:80'],
            'telephone' => ['required', 'max:14'],
            'address' => ['required', 'max:255'],
            'zip_code' => ['required', 'max:10'],
            'city' => ['required', 'max:80'],
            'state' => ['required', 'max:80'],
            'description' => ['required', 'max:80'],
        ]);

        $busicess = BusinessServices::saveBusiness($request);

        if ($busicess) {
            return redirect()->back()->with('success', 'Save successfully');
        }

        return redirect()->back()->with('error', 'An error has occurred, please contact the Administrator');
    }
}
