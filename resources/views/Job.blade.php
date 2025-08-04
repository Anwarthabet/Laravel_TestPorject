<x-layout>
    <x-slot:heading>
        Jobs Details
    </x-slot:heading>
<h2 class="strong font-bold">{{$job['title']}}</h2>
<p>
    the slaary is {{ $job['salary']}}
</p>
<p>
    the Nationality is  {{$job['nationality']}}
</p>

  
</x-layout>