<x-layout>
    <x-slot:heading>{{$job['title']}}</x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        This job pays <strong>{{ $job['salary'] }}</strong> per year.
    </p>
</x-layout>