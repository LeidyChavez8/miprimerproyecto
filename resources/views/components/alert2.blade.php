<div{{$attributes->merge(['class=> p-4 mb-4 text-sm rounded-lg '.$class])}} role="alert">
    <span class="font-medium"> {{$title ??'info alert!'}}</span> {{ $slot }}   
</div>