@if ($breadcrumbs)
    <ul class="breadcrumb breadcrumb-top" itemscope itemtype="http://schema.org/BreadcrumbList">
        Estás en:
        @foreach ($breadcrumbs as $count => $breadcrumb)
            @if (!$breadcrumb->last)
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a onclick="ga('send', 'event', 'layout', 'click-breadcrumbs', '{{ $breadcrumb->title }}');" 
                        href="{{{ $breadcrumb->url }}}" itemprop="item"> 
                        <span itemprop="name">{{ $breadcrumb->title }} </span>
                    </a>
                    <meta itemprop="position" content="{{ $count + 1 }}" />
                </li>
            @else
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active">
                    <span itemprop="name">{{ $breadcrumb->title }} </span>
                    <meta itemprop="position" content="{{ $count + 1 }}" />
                </li>
            @endif
        @endforeach
    </ul>
@endif