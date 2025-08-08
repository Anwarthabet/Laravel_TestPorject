<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <x-button href="/jobs/create">Create Job</x-button>

  <div class="space-y-4">
    @foreach ($Jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
            <div class="font-bold text-blue-500 text-sm">{{ $job->Employeer->name }}</div>

            <div>
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </div>
        </a>
    @endforeach
    <div>

    {{$Jobs->links()}}
    </div>
</div>
</x-layout>