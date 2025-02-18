@extends('layouts.merchant')

@section('content')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
        <form method="POST" action="{{ route('stores.store') }}">
            @csrf
            <div class="mb-5">
                <input type="text" name="store_name"
                    class="shadow w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                    placeholder="Enter your Store name" />
                @error('store_name')
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
