<?php

namespace App\Utils;

use Illuminate\Support\Facades\DB;

class GeneralUtils {

    public static function getLatestPolicyName() {
        $latestPolicy = DB::table('policies')->latest('created_at')->first();

        // Assuming 'name' is the column representing the policy name
        return $latestPolicy ? $latestPolicy->name : null;
    }

    public static function countIncreaseCoverCases() {
        return DB::table('cases')->where('cover_type', 'increase')->count();
    }

    public static function countDecreaseCoverCases() {
        return DB::table('cases')->where('cover_type', 'decrease')->count();
    }

    public static function countCancelCoverCases() {
        return DB::table('cases')->where('cover_type', 'cancel')->count();
    }

    public static function getPolicyNameByCriteria($criteria) {
        $policyName = DB::table('policies')->where('criteria', $criteria)->value('name');

        return $policyName;
    }
}
