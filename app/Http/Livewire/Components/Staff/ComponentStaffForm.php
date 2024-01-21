<?php

namespace App\Http\Livewire\Components\Staff;

use Livewire\Component;
use App\Models\Table\UserTable;
use App\Services\User\UserService;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ComponentStaffForm extends Component
{
    use LivewireAlert;

    public $name, $age, $role, $email, $password;

    public function render()
    {
        return view('livewire.components.staff.component-staff-form');
    }

    public function store(UserService $user_service)
    {
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        if (Auth::user()->role == 'ADMIN') {
            $data = [
                'name'      => $this->name,
                'role'      => UserTable::ROLE_STAFF,
                'email'     => $this->email,
                'password'  => $hashedPassword,
                'age'       => $this->age,
            ];
        }
        $user = $user_service->create($data);
        if (Auth::user()->role == 'ADMIN') {
            $this->flash('success', 'Staff berhasil ditambahkan!', [], route('admin.staff.index'));
        } 
    }
}
