<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TaskIndex extends Component
{
    public $tasks;

    #[Rule(['required', 'max:10', 'string'])]
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

        session()->flash('message', 'Task successfully created.');

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
