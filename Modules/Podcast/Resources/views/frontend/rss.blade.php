{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom/" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd">
    <channel>
        <atom:link rel="self" type="application/atom+xml" href="{{ URL::current() }}" title="MP3 Audio"/>
        <title>{{ setting('core::site-name') }}</title>
        <generator>https://wellcoded.io</generator>
        <description>
            Le Podcast Wellcoded traite des sujets tels que le freelancing et le développement web. Les deux hosts sont Julien Tant et Nicolas Widart, deux freelances Laravel basés en Europe.
        </description>
        <copyright>℗ &amp; © {{ date('Y') }} Wellcoded</copyright>
        <language>fr</language>
        <pubDate>{{ with(new DateTime)->format(DateTime::RSS) }}</pubDate>
        <lastBuildDate>{{ with(new DateTime)->format(DateTime::RSS) }}</lastBuildDate>
        <link>https://wellcoded.io</link>
        <image>
            <url>{{ asset('assets/media/wellcoded.png') }}</url>
            <title>The WellCoded Podcast</title>
            <link>https://wellcoded.io</link>
        </image>
        <itunes:author>Julien Tant, Nicolas Widart</itunes:author>
        <itunes:image href="{{ asset('assets/media/wellcoded.png') }}"/>
        <itunes:summary>Le Podcast Wellcoded traite des sujets tels que le freelancing et le développement web. Les deux hosts sont Julien Tant et Nicolas Widart, deux freelances Laravel basés en Europe.</itunes:summary>
        <itunes:subtitle>Tout sur le developpement web et la vie de Freelance</itunes:subtitle>
        <itunes:explicit>no</itunes:explicit>
        <itunes:keywords>freelance, laravel, webdev, web, developpement</itunes:keywords>
        <itunes:owner>
            <itunes:name>Julien Tant, Nicolas Widart</itunes:name>
            <itunes:email>podcast@wellcoded.io</itunes:email>
        </itunes:owner>
        <itunes:category text="Technology"/>
        @foreach($podcasts as $podcast)
            <item>
                <title>{!! $podcast->title  !!}</title>
                <guid isPermaLink="false">{{ $podcast->id }}</guid>
                <link>{{ $podcast->present()->url }}</link>
                <description>
                    {!! $podcast->present()->excerpt !!}
                </description>
                <content:encoded>
                    <![CDATA[
                    {!! $podcast->description !!}
                    ]]>
                </content:encoded>
                <pubDate>{{ $podcast->published_at->format(DateTime::RSS) }}</pubDate>
                <author>Julien Tant, Nicolas Widart</author>
                <enclosure url="{{ $podcast->present()->mp3url }}" length="{{ $podcast->files()->first()->filesize }}" type="audio/mpeg"/>
                <itunes:author>Julien Tant, Nicolas Widart</itunes:author>
                <itunes:image href="{{ asset('assets/media/wellcoded.png') }}"/>
                <itunes:duration>{{ $podcast->duration }}</itunes:duration>
                <itunes:summary>{!! $podcast->present()->excerpt !!}
                </itunes:summary>
                <itunes:subtitle>{!! $podcast->present()->excerpt !!}
                </itunes:subtitle>
                <itunes:keywords>{{ $podcast->tags }}</itunes:keywords>
                <itunes:explicit>no</itunes:explicit>
            </item>
        @endforeach
    </channel>
</rss>
