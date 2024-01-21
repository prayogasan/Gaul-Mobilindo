<?php

namespace App\Http\Livewire\Pages\Admin\Staff;

use Livewire\Component;

class AdminStaffIndex extends Component
{
    public $page_title  = 'Staff | GaulMobilindo';
    public $page_name   = 'Staff';

    public function render()
    {
        return view('livewire.pages.admin.staff.admin-staff-index')
                ->extends('layouts.admin')
                ->section('content');
    }
}
