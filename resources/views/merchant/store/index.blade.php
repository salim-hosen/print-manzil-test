@extends('layouts.merchant')

@section('content')
    <div class="bg-white overflow-hidden shadow-sm rounded-lg mb-5">

        <div class="flex items-center flex-wrap md:flex-nowrap justify-between bg-white px-3 sm:px-5 py-5">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Store List
            </h2>
            <a href="{{ route('stores.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                <i class="fas fa-add"></i>
                Create Store
            </a>
        </div>



        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Store name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($stores as $store)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4">
                            {{ $store->store_name }}
                        </th>
                        <td scope="row" class="px-6 py-4">
                            <a target="_blank" href="http://{{ $store->slug.'.'.request()->getHttpHost() }}">Visit Subdomain</a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="px-6 py-4">No Store Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $stores->links() }}

    </div>
@endsection
