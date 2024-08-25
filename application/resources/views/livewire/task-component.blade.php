<div
    class="flex p-2 bg-gray-100 items-center justify-between bg-opacity-5 overflow-hidden rounded-xl shadow-lg w-full ">
    <div class="w-1/2 flex flex-row items-center gap-2">
        <input id='{{ $task->id }}' type='checkbox'
            class="shrink-0 w-5 h-5 text-[#D7FE62] bg-[#1d232a] border-gray-300 rounded focus:ring-[#D7FE62] dark:focus:ring-[#D7FE62] dark:ring-offset-gray-800 focus:bg-[#D7FE62] focus:ring-1 dark:bg-[#b1c281] dark:border-[#414830]" />
        <label for='{{ $task->id }}'>
            {{$task->name}}
        </label>
    </div>
    <div class="w-1/2 flex flex-row">
        <span></span>
    </div>
</div>
