<div class="card">
    <div class="card-header">
        <div class="card-header-icon">
            <img src="{{ plugin_asset('dofus', 'img/hub/window_border_icon_background.png') }}" alt="">
            <img src="{{ plugin_asset('dofus', 'img/hub/icon__0029_Caracteristiques.png') }}" alt="">
        </div>
        <div class="card-title">Caractéristiques</div>
    </div>
    <div class="card-body market--caracteristique">
        <div class="market--caracteristique-player">
            <img title="{{$marketListing->character->Name}}" src="{{$marketListing->character->getAvatarUrl()}}" alt=""
                srcset="">
            <div class="market--caracteristique-player-right">
                <p>{{$marketListing->character->Name}}</p>
                <div class="market--separator-grey">
                    <img src="{{plugin_asset('dofus', "img/hub/window_separator_black_horizontal.png")}}" alt="">
                </div>
                @php
                $level = get_level_by_xp($marketListing->character->Experience);
                @endphp
                <p>Niveau {{$level}} @if ($level == 'Omega') - {{$marketListing->character->PrestigeRank}} @endif</p>
                <div class="market--separator-grey">
                    <img src="{{plugin_asset('dofus', "img/hub/window_separator_black_horizontal.png")}}" alt="">
                </div>
                <p>
                    <img src="{{plugin_asset('dofus', "img/alignment/{$marketListing->character->AlignmentSide}.png")}}"
                        alt="" srcset="">
                    -> {{$marketListing->character->Honor}}
                </p>
            </div>
        </div>
        <div class="market--separator-green">
            <img src="{{plugin_asset('dofus', "img/hub/window_separator_green_horizontal.png")}}" alt="">
        </div>
        <ul class="market--caracteristique-stats">
            <li>
                <img src="{{plugin_asset('dofus', "img/characteristics/tx_health.png")}}" alt="">
                Points de vie (PV) <span>{{$marketListing->character->BaseHealth }}</span>
            </li>
            <li>
                <img src="{{plugin_asset('dofus', "img/characteristics/tx_actionPoints.png")}}" alt="">
                Points d'action (PA) <span>{{$marketListing->character->AP }}</span>
            </li>
            <li>
                <img src="{{plugin_asset('dofus', "img/characteristics/tx_movementPoints.png")}}" alt="">
                Points de mouvement (PM) <span>{{$marketListing->character->MP }}</span>
            </li>
        </ul>
        <div class="market--separator-green">
            <img src="{{plugin_asset('dofus', "img/hub/window_separator_green_horizontal.png")}}" alt="">
        </div>
        <ul class="market--caracteristique-elements">
            <x-stat-component name="Vitalité" image="tx_vitality" :baseStat="$marketListing->character->Vitality"
                :permanentStat="$marketListing->character->PermanentAddedVitality" stuffStat="0" separator="0" />
            <x-stat-component name="Sagesse" image="tx_wisdom" :baseStat="$marketListing->character->Wisdom"
                :permanentStat="$marketListing->character->PermanentAddedWisdom" stuffStat="0" separator="1" />
            <x-stat-component name="Force" image="tx_strength" :baseStat="$marketListing->character->Strength"
                :permanentStat="$marketListing->character->PermanentAddedStrength" stuffStat="0" separator="1" />
            <x-stat-component name="Intelligence" image="tx_intelligence"
                :baseStat="$marketListing->character->Intelligence"
                :permanentStat="$marketListing->character->PermanentAddedIntelligence" stuffStat="0" separator="1" />
            <x-stat-component name="Chance" image="tx_chance" :baseStat="$marketListing->character->Chance"
                :permanentStat="$marketListing->character->PermanentAddedChance" stuffStat="0" separator="1" />
            <x-stat-component name="Agilité" image="tx_agility" :baseStat="$marketListing->character->Agility"
                :permanentStat="$marketListing->character->PermanentAddedAgility" stuffStat="0" separator="1" />
        </ul>
    </div>
</div>
