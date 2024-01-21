<?php

namespace App\Http\Livewire\Pages\Admin\Staff;

use Livewire\Component;

class AdminStaffManage extends Component
{
    public $page_title  = 'Tambah Staff | Admin Mobilindo';
    public $page_name   = 'Tambah Staff';

    public function render()
    {
        return view('livewire.pages.admin.staff.admin-staff-manage')
                ->extends('layouts.admin')
                ->section('content');
    }
}
