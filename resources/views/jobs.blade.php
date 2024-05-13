<x-layout>
    <x-slot:heading>About Page</x-slot:heading>

    <h1>Hello from the About page</h1>
    
    <ul>

        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{$job['title']}}:</strong> {{$job['salary']}} per year.
                </a>
            </li>
        @endforeach

    </ul>
</x-layout>