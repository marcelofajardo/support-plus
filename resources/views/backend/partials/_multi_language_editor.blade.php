<nav>
    <div class="nav nav-tabs mb-4" id="nav-tab" role="tablist">
        @foreach(app('activeLanguages') as $language)
            <a class="nav-item nav-link {{($_GET['lang']??app()->getLocale())==$language->code?'active':''}}"
               href="{{url()->current()}}?lang={{$language->code}}"
               role="tab"
               aria-controls="nav-home" aria-selected="true">{{$language->native}}</a>
        @endforeach
    </div>
</nav>
<input type="hidden" value="{{$_GET['lang']??app()->getLocale()}}" name="lang">
@php
    app()->setLocale($_GET['lang']??app()->getLocale())
@endphp
