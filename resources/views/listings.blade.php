<h1>Listing

    <h1>{{ $headings }}</h1>

    @if (count($listings) === 0)
        <p>No listings Found</p>
    @endif

    @foreach ($listings as $listing)
        <h2> <a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}<a></h2>
        <p> {{ $listing['description'] }}</p>
    @endforeach
</h1>

<h1>Listing

    <h1>{{ $headings }}</h1>

    @if (count($listings) === 0)
        <p>No listings Found</p>
    @endif

    @foreach ($listings as $listing)
        <h2> <a href="/listing/{{ $listing['id'] }}">{{ $listing['title'] }}<a></h2>
        <p> {{ $listing['description'] }}</p>
    @endforeach
</h1>
