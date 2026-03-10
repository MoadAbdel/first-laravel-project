<article>
    <h3>{{ $title }}</h3>
    <p>{{ \Illuminate\Support\Str::limit($description, 30, ' ...') }}</p>
</article>