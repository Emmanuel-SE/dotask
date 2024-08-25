    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-[#1d232a]">
  <body class="h-full">
  ```
-->
    <div class="text-[#a6adbb]">
        <x-side-nav-component />

        <div class="lg:pl-72 min-h-screen">
            <main class="p-16 w-full min-h-screen flex flex-col items-center relative">
                <nav class="sticky top-4 bg-[#1d232a] px-4 sm:px-6 lg:px-8 w-full flex justify-between mb-12">
                    <div class="flex flex-col">
                        <h1 class="text-2xl font-bold">
                            Good Morning, Emmanuel!👋🏽
                        </h1>
                        <span>Today, {{ Illuminate\Support\Carbon::now()->format('l d F Y') }}</span>
                    </div>
                    <x-filter-component />
                </nav>
                <x-tasks-component :tasks="$tasks" />

                <div class=" w-full sticky lg:justify-between flex bottom-16 lg:px-4 px-8 left-20 flex-none shrink-0">
                    <livewire:new-task-component />
                    <div>

                    </div>
                </div>
            </main>
        </div>
    </div>
