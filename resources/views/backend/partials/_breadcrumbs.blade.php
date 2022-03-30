@unless ($breadcrumbs->isEmpty())
    <div class="py-1">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="{{url('/home')}}">
                        <span class="ti-home"></span>
                    </a>
                </li>
                @foreach ($breadcrumbs as $breadcrumb)

                    @if (!is_null($breadcrumb->url) && !$loop->last)
                        <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->title }}</li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>

@endunless
