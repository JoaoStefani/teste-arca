<?php

namespace App\Http\Controllers;

use App\Services\BusinessServices;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->search)) {
            $busicess = BusinessServices::getSearchBusiness($request->search);
        } else {
            $busicess = BusinessServices::getAllBusiness();
        }

        return view('welcome', compact('busicess'));
    }

    public function view($idBusicess)
    {
        $busicess = BusinessServices::getByIdBusiness($idBusicess);

        return view('welcome-view', compact('busicess'));
    }
}
