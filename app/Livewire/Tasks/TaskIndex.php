<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TaskIndex extends Component
{
    public $tasks;

    #[Rule('required')]
    public $name;

    public function mount()
    {
        $this->tasks = Task::with('user')->get();
    }

    public function save()
    {
        $this->validate();

        Task::create([
            'user_id' => 1,
            'name' => $this->name
        ]);

        return $this->redirect(route('tasks'));
    }

    public function render()
    {
        return view('livewire.tasks.task-index')
            ->title('Tasks - Livewire')
            ->with([
                'button' => 'New Task'
            ]);
    }
}
