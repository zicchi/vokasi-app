<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class OperatorSearch extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $query;

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'like', "%" . $this->query . "%")->paginate(20);
        return view('livewire.operator-search', [
            'users' => $users
        ]);
    }
}
