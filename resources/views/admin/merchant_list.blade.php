@extends('layouts.admin')

@section('content')
    <div class="bg-white overflow-hidden shadow-sm rounded-lg mb-5">

        <div class="flex items-center flex-wrap md:flex-nowrap justify-between bg-white px-3 sm:px-5 py-5">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Merchant List
            </h2>
        </div>



        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Merchant name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Merchant Email
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($merchants as $merchant)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4">
                            {{ $merchant->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $merchant->email }}
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="px-6 py-4" colspan="2">No Merchant Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $merchants->links() }}

    </div>
@endsection
