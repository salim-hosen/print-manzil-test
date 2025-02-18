@if (session('success'))
<div
    class="relative flex flex-col sm:flex-row sm:items-center shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 bg-green-100">
    <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
        <div class="text-green-700">
            <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <div class="text-sm font-medium ml-3 text-green-700">Success.</div>
    </div>
    <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4 text-green-700">
        {{ session('success') }}</div>
</div>
@endif
