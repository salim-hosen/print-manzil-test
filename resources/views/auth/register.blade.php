@extends('layouts.auth')

@section('content')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Merchant Register</h2>

            @include("components.alert-success")

            <form class="space-y-4" action="{{ route('register') }}" method="POST">

                @csrf

                <div class="mb-5">
                    <input type="text" name="name"
                        class="shadow w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="Enter your name" />
                    @error('name')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="email" name="email"
                        class="shadow w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="Enter your email" autocomplete="new-password" />
                    @error('email')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="text" name="shop_name"
                        class="shadow w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="Enter your shop name" />
                    @error('shop_name')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="password" name="password"
                        class="shadow w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="Enter your shop password" autocomplete="new-password" />
                    @error('password')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>

                <button
                    class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2.5 rounded-lg transition-colors">
                    Register
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-600">
                Already have an account?
                <a href="{{ url('/login') }}" class="text-indigo-600 hover:text-indigo-500 font-medium">Login</a>
            </div>
        </div>
    </div>
@endsection
