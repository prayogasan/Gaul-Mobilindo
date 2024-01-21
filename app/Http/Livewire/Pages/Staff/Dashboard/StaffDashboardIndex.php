<?php

namespace App\Http\Livewire\Pages\Staff\Dashboard;

use Livewire\Component;

class StaffDashboardIndex extends Component
{
    public $page_title  = 'Dashboard | Staff GaulMobilindo';
    public $page_name   = 'Dashboard';

    public function render()
    {
        return view('livewire.pages.staff.dashboard.staff-dashboard-index')
                ->extends('layouts.admin')
                ->section('content');
    }
}
