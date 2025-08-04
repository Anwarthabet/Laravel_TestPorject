<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    @foreach ($Jobs as $job)
    
    <li>
        <a href="/Job/{{ $job['id']}}"class="hover:underline">
        <strong>{{$job['title']}}</strong> : pays {{ $job['salary']}} for Nationality <strong> {{$job['nationality']}}</strong>
    </a>
    </li>

    
    @endforeach
</x-layout>