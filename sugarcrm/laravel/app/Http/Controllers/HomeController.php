<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\GeneralUtils;

class HomeController extends Controller
{
    public function index()
    {
        $lastCreatedPolicyName = GeneralUtils::getLatestPolicyName();
        $totalNumOfIncreaseCoverCases = GeneralUtils::countIncreaseCoverCases();
        $totalNumOfDecreaseCoverCases = GeneralUtils::countDecreaseCoverCases();

        return view('landing', [
            'lastCreatedPolicyName' => $lastCreatedPolicyName,
            'totalNumOfIncreaseCoverCases' => $totalNumOfIncreaseCoverCases,
            'totalNumOfDecreaseCoverCases' => $totalNumOfDecreaseCoverCases,
        ]);
    }
}
