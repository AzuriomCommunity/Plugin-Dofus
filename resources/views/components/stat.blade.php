
@if ($separator == "1")
<div class="market--separator-grey">
    <img src="{{plugin_asset('dofus', "img/hub/window_separator_black_horizontal.png")}}" alt="">
</div>
@endif

<li>
    <img src="{{plugin_asset('dofus', "img/characteristics/$image.png")}}" alt="">
    <span>{{$name}}</span>
    <a href="#" data-html="true" data-placement="top" data-toggle="tooltip"
        title="Base(Naturel + Permanent): {{ $baseStat}} + {{$permanentStat}}">
        {{$baseStat + $permanentStat}} (+0)</a>
</li>