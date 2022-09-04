@php
    $down_fill = 'darkgray';
    $up_fill = 'lightgray';
    $attribute = $attribute ?? '';
    $label = $label ?? '';
    if(request()->query('sort') == $attribute) {
        $up_fill = 'blue';
    }
    if(request()->query('sort') == '-'.$attribute) {
        $down_fill = 'blue';
    }
@endphp
<div class="flex flex-row items-center">
@if (request()->query('sort') == $attribute)
    <a href="{{request()->fullUrlWithQuery(['sort' => '-'.$attribute])}}" class="no-underline hover:underline text-cyan-600">{{ __($label) }}</a>
@else
    <a href="{{request()->fullUrlWithQuery(['sort' => $attribute])}}" class="no-underline hover:underline text-cyan-600">{{ __($label) }}</a>
@endif
<div class="flex flex-col pl-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21" class="w-3 h-3 inline-block">
        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" stroke="{{$up_fill}}" />
    </svg>

    <!--svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" viewBox="0 0 15 15" fill="none">
    <path d="M7.5 3L15 11H0L7.5 3Z"/>
</svg-->
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21" class="w-3 h-3 inline-block">
        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"  stroke="{{$down_fill}}" />
    </svg>

    <!-- svg class="inline-block" xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" viewBox="0 0 15 15" fill="none">
    <path d="M7.49988 12L-0.00012207 4L14.9999 4L7.49988 12Z"/>
</svg -->
</div>
</div>
