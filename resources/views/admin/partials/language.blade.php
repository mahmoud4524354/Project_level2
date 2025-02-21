@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

    $local = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar' ;
@endphp

<li class="nav-item">
    <a class="nav-link my-2 text-primary" href={{LaravelLocalization::getLocalizedUrl($local)}} >
        {{strtoupper($local)}}
    </a>
</li>
