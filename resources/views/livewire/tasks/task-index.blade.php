<div>
    <div class="text-center pb-10">
        <x-button :button="$button" />
    </div>
    @foreach ($tasks as $task)
        <x-task-item :task="$task" />
    @endforeach
</div>
