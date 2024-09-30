<x-layout>
    <x-slot:heading>
        Home Page
</x-slot:heading>
    @foreach($jobs as $job=>$value)
        <li>{{$value['title']}}</li>
    @endforeach
</x-layout>
