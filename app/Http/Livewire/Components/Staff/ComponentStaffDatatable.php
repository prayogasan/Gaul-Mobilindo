<?php

namespace App\Http\Livewire\Components\Staff;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Services\User\UserService;

class ComponentStaffDatatable extends Component
{
    public $name, $age, $email;
    public $entries = 5;
    public $search='';
    public $staff;

    public function render(UserService $user_service)
    {
        $staffs = $user_service->dataTable(new Request([
            'entries'        => $this->entries,
            'sort_type'      => 'desc',
            'search_key'     => $this->search,
            'search_columns' => 'name,age,email',
        ]));

        return view('livewire.components.staff.component-staff-datatable', compact('staffs'));
    }
}
