<?php

namespace App\Services;

use App\Models\Business;

class BusinessServices
{
    public static function getAllBusiness()
    {
        $busicess = Business::orderBy('name')
                                ->paginate(10);

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

    public static function getByIdBusiness($idBusicess)
    {
        $busicess = Business::orderBy('name')
                                ->find($idBusicess);

        return $busicess;
    }

    public static function getSearchBusiness($requestSearch)
    {
        $busicess = Business::where('name', 'LIKE', '%' . $requestSearch . '%')
                        ->orWhere('address', 'LIKE', '%'. $requestSearch .'%')
                        ->orWhere('zip_code', 'LIKE', '%'. $requestSearch .'%')
                        ->orWhere('city', 'LIKE', '%'. $requestSearch .'%')
                        ->paginate(10);

        return $busicess;
    }
}
