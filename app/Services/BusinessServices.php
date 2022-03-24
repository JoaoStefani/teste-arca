<?php

namespace App\Services;

use App\Models\Business;

class BusinessServices
{
    public static function getAllBusiness()
    {
        $busicess = Business::orderBy('name')
                                ->paginate(1);

        return $busicess;
    }

    public static function saveBusiness($request)
    {
        $business = Business::create([
            'name' => $request->name,
            'telephone' => $request->telephone,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'state' => $request->state,
            'description' => $request->description,
        ]);

        if (isset($business->id)) {
            return true;
        } else {
            return false;
        }
    }
}
