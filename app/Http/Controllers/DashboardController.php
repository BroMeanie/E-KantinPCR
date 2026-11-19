<?php

namespace App\Http\Controllers;

use App\Models\Stan;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $data['totalStan'] = Stan::count();
        $data['stanAktif'] = Stan::where('is_aktif', true)->count();
        $data['perJenis'] = Stan::selectRaw('jenis, count(*) as jumlah')
            ->groupBy('jenis')
            ->pluck('jumlah', 'jenis');

        return view('admin.dashboard', $data);
    }
}
