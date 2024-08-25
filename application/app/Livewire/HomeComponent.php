<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Database\Eloquent\Collection;

#[Layout('layouts.app')]
class HomeComponent extends Component
{
    public  $tasks;

    public int $currPage = 1;

    public int $perPage = 5;

    public function mount()
    {
        $this->tasks = Task::query()->get();
        // dd($this->tasks);
    }

    public function render()
    {
        return view('livewire.home-component');
    }
}
