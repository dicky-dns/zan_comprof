@props(['text', 'length' => 40])

@php
    // remove empty html tags
    $tags = ['p', 'span', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
    foreach ($tags as $tag) {
        $pattern = "/<{$tag}[^>]*>(?:\s|&nbsp;)*<\\/{$tag}>/i";
        $text = preg_replace($pattern, '', $text);
    }

    $decodedText = html_entity_decode(strip_tags($text));
    $shortenedText = ltrim(Str::limit($decodedText, $length, '...'));
@endphp

<span {{ $attributes }}>
    {{ $shortenedText }}
</span>
