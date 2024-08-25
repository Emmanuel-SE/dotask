@props(['tasks'])

<div class="px-4 sm:px-6 lg:px-8 w-full gap-2 flex flex-col">
    @foreach ($tasks as $task)
    {{-- @dd($task) --}}
        <livewire:task-component :task="$task" />
    @endforeach
</div>
