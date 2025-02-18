@extends('layouts.app')

@section('content')
    <div class="max-w-screen-xl px-4 my-10 mx-auto">
        <h5 class="mb-5 text-lg font-medium tracking-tight text-gray-900 dark:text-white">Showing Category List</h5>

        <div class="flex flex-wrap items-center gap-3">
            @forelse ($categories as $category)
                <div
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $category->category_name }}</h5>
                    </a>
                    <a href="{{ route('page.products', $category->slug) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        View Store
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            @empty
                <h1 class="text-center my-5 text-2xl font-bold">No Store Found</h1>
            @endforelse
        </div>
    </div>
@endsection
