<?php

namespace App\Http\Controllers;

use App\Models\GameAccount;
use App\Models\Sponsor;
use App\Models\FraudReport;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index',[

            'accounts' => GameAccount::count(),

            'sponsors' => Sponsor::count(),

            'reports' => FraudReport::count()

        ]);
    }
}
