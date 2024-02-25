<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Livewire\Component;

class TaskShow extends Component
{
    public Task $task;

    public function mount($id)
    {
        $this->task = Task::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.tasks.task-show');
    }
}
