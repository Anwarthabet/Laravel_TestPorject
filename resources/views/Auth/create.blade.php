<x-layout>
  <x-slot:heading>
    Create Account
  </x-slot:heading>

  <form method="POST" action="/register" class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-lg space-y-6">
    @csrf

    {{-- عرض الأخطاء --}}
    @if($errors->any())
      <div class="bg-red-50 border-l-4 border-red-500 p-4 text-red-700 rounded">
        <ul class="list-disc pl-5">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- First Name --}}
    <div>
      <label for="first_name" class="block text-sm font-semibold text-gray-700">First Name</label>
      <div class="mt-1 relative">
        <input id="first_name" type="text" name="first_name" placeholder="John"
          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 pl-3 pr-10 py-2"required />
      </div>
    </div>

    {{-- Last Name --}}
    <div>
      <label for="last_name" class="block text-sm font-semibold text-gray-700">Last Name</label>
      <div class="mt-1">
        <input id="last_name" type="text" name="last_name" placeholder="Doe"
          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 pl-3 pr-10 py-2"required />
      </div>
    </div>

    {{-- Email --}}
    <div>
      <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
      <div class="mt-1">
        <input id="email" type="email" name="email" placeholder="example@mail.com"
          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 pl-3 pr-10 py-2"required />
      </div>
    </div>

    {{-- Password --}}
    <div>
      <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
      <div class="mt-1">
        <input id="password" type="password" name="password" placeholder="••••••••"
          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 pl-3 pr-10 py-2"required />
      </div>
    </div>

    {{-- Confirm Password --}}
    <div>
      <label for="Confirm_Password" class="block text-sm font-semibold text-gray-700">Confirm Password</label>
      <div class="mt-1">
        <input id="Confirm_Password" type="password" name="Confirm_Password" placeholder="••••••••"
          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 pl-3 pr-10 py-2" required/>
      </div>
    </div>

    {{-- Actions --}}
    <div class="flex justify-between items-center pt-4">
      <a href="/" class="text-gray-600 hover:text-gray-900 text-sm">Cancel</a>
      <button type="submit"
        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition">
        Create Account
      </button>
    </div>
  </form>
</x-layout>
