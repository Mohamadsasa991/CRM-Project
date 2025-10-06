@props(['active'=>false])
<a {{$attributes}} class="{{$active ? ' text-start w-100 btn btn-primary text-white' : 'nav-link text-white' }} "  aria-current="page">{{$slot}}</a>
