<x-layout>
  <x-slot:heading>
    Login 
  </x-slot:heading>

  <form method="POST" action="/session" class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-lg space-y-6">
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

    {{-- Email --}}
    <div>
      <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
      <div class="mt-1">
        <input id="email" type="email" name="email" placeholder="example@mail.com"
          class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 pl-3 pr-10 py-2" required />
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

    {{-- Actions --}}
    <div class="flex justify-between items-center pt-4">
      <a href="/" class="text-gray-600 hover:text-gray-900 text-sm">Cancel</a>
      <button type="submit"
        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded-lg shadow transition">
        login
      </button>
    </div>
  </form>
</x-layout>
