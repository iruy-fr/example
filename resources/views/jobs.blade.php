<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <ul>
        @foreach($jobs as $job=>$value)
            <li>
                <a href="/jobs/{{$value['id']}}" class="text-blue-500 hover:underline">
                    <strong>{{$value['title']}}:</strong> Pays {{$value['salary']}} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
