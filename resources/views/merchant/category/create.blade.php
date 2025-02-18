@extends('layouts.merchant')

@section('content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <form method="POST" action="{{ route('categories.store') }}">

            @csrf


            <div class="mb-5">
                <select name="store"
                    class="shadow border py-3 px-4 pe-9 block w-full border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <option value="">Select Store</option>
                    @foreach ($stores as $store)
                        <option value="{{ $store->id }}">{{ $store->store_name }}</option>
                    @endforeach
                </select>
                @error('store')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-5">
                <input type="text" name="category_name"
                    class="shadow w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                    placeholder="Enter Category name" />
                @error('category_name')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>



            <div class="mb-3">
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
