<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\lt_case;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getCase($caseId)
    {
        $caseModel = new \lt_case();
        $caseModel->setCaseId($caseId);
        $caseInfo = $caseModel->retrieve_by_string_fields(['case_id']);

        return response()->json($caseInfo);
    }
}
