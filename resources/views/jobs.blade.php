<x-layout>
    <x-slot:heading>
        Jobs Lists
    </x-slot:heading>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> See more details.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
