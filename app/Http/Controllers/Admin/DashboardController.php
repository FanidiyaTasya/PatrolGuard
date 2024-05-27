<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Permission;
use App\Models\Report;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    
    public function index() {
        $today = Carbon::today()->toDateString();
        $permissions = Permission::whereDate('created_at', $today)
                                ->orderBy('permission_date', 'desc')
                                ->paginate(5);

        $permitToday = $this->getPermitToday();
        $attendance = $this->getAttendance();
        $report = $this->getReport();
        $permitStats = $this->getPermitStats();
        
        return view('pages.dashboard', compact('permissions', 'permitToday', 'attendance', 'report', 'permitStats'), [
            'title' => 'Dashboard'
        ]);
    }

    public function getPermitToday() {
        $today = Carbon::today()->toDateString();
        return Permission::whereDate('created_at', $today)->count();
    }

    public function getAttendance() {
        $month = Carbon::now()->month;
        $totalDays = Carbon::now()->daysInMonth;
        
        $totalAttendance = Attendance::whereMonth('created_at', $month)
                                    ->where('status', 'Hadir')
                                    ->count();
        $percentage = ($totalAttendance / $totalDays) * 100;
        
        return [
            'totalAttendance' => $totalAttendance,
            'percentage' => $percentage,
        ];
    }

    public function getReport() {
        $month = Carbon::now()->month;
        $totalDays = Carbon::now()->daysInMonth;

        $totalReports = Report::whereMonth('created_at', $month)->count();
        $percentage = ($totalReports / $totalDays) * 100;

        return [
            'totalReports' => $totalReports,
            'percentage' => $percentage,
        ];
    }

    public function getPermitStats() {
        $month = Carbon::now()->month;
        $totalDays = Carbon::now()->daysInMonth;

        $totalPermissions = Permission::whereMonth('created_at', $month)->count();
        $percentage = ($totalPermissions / $totalDays) * 100;

        return [
            'totalPermissions' => $totalPermissions,
            'percentage' => $percentage,
        ];
    }
}
