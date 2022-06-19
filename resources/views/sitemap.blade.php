<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>'; ?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>2022-04-29T13:14:28+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>{{ url('/artists') }}</loc>
        <lastmod>2022-04-29T13:14:28+00:00</lastmod>
        <priority>0.80</priority>
    </url>



    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/') }}/{{ $post->slug }}/myanmar-song</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <priority>1.00</priority>
        </url>
    @endforeach

    @foreach ($artists as $artist)
        <url>
            <loc>{{ url('/') }}/{{ $artist->slug }}/artists</loc>
            <lastmod>{{ $artist->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <priority>1.00</priority>
        </url>
    @endforeach

</urlset>
