<x-layout>

    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1 class=" text-lg" >This is the jobs page</h1>

    @foreach ($jobs as $job)
        <ul>
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-600 hover:underline">
                    <strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }} per year
                </a>
            </li>
        </ul>
    @endforeach

</x-layout>
