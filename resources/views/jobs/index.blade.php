<x-layout>
    <x-slot:heading>
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-6 py-4 border-b border-gray-200">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800 tracking-tight">
                    📋 Jobs Page
                </h1>
                <p class="text-sm text-gray-500 mt-1">Manage all available job posts here.</p>
            </div>

            <a href="/jobs/create"
                class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm px-5 py-2.5 rounded-lg shadow transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4v16m8-8H4" />
                </svg>
                Create Job
            </a>
        </div>
    </x-slot:heading>


    <div class="space-y-4 mt-6">
        @foreach ($Jobs as $job)
        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-bold text-blue-600">
                        {{ $job['title'] }}
                    </h2>
                    <p class="text-sm text-gray-600">
                        Employer: <strong>{{ $job->Employeer->name }}</strong>
                    </p>
                    <p class="text-gray-700 mt-1">
                        Salary: <strong>${{($job['salary']) }}</strong> per year
                    </p>
                </div>

                <div class="flex gap-2">
                    <form method="POST" action="/jobs/{{ $job->id }}" onsubmit="return confirm('Are you sure you want to delete {{ $job->title }}');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-600">
                            Delete
                        </button>
                    </form>
                    <x-button class="bg-gray-500" href="/jobs/{{ $job->id}}">View</x-button>
                    <x-button href="/jobs/{{ $job->id }}/edit" class="bg-indigo-300 hover:bg-indigo-900">
                        Edit
                    </x-button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $Jobs->links() }}
    </div>
</x-layout>