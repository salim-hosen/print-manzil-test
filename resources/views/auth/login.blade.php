@extends("layouts.auth")

@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Login</h2>

      <form class="space-y-4" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-5">
          <input
            type="email" name="email" id="email"
            class="shadow w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
            placeholder="Enter your email"
            autocomplete="new-password"
          />
          @error('email')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
        </div>

        <div class="mb-5">
          <input
            type="password" name="password" id="password"
            class="shadow w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
            placeholder="Enter your shop password"
            autocomplete="new-password"
          />
          @error('password')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
        </div>

        <button class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2.5 rounded-lg transition-colors">
          Login
        </button>
      </form>

      <div class="mt-6 flex items-center justify-center">
        <div>
            <a id="admin" href="#" class="bg-blue-600 hover:bg-blue-700 text-white py-1 px-2 rounded font-medium">Admin</a>
            <a id="merchant" href="#" class="bg-green-600 hover:bg-green-700 text-white py-1 px-2 rounded font-medium">Merchant</a>
        </div>
      </div>

      <div class="mt-6 text-center text-sm text-gray-600">
        Don't have an account?
        <a href="{{ url('/register') }}" class="text-indigo-600 hover:text-indigo-500 font-medium">Register</a>
      </div>

    </div>
  </div>
@endsection


@push("scripts")
  <script>

    document.getElementById("admin").addEventListener("click", function(){
        document.getElementById('email').value = 'admin@example.com';
        document.getElementById('password').value = 'demopass';
    });

    document.getElementById("merchant").addEventListener("click", function(){
        document.getElementById('email').value = 'merchant@example.com';
        document.getElementById('password').value = 'demopass';
    });

  </script>
@endpush
