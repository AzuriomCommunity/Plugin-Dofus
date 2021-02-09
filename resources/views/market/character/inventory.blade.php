<div class="card">
    <div class="card-header">
        <div class="card-header-icon">
            <img src="{{ plugin_asset('dofus', 'img/hub/window_border_icon_background.png') }}" alt="">
            <img src="{{ plugin_asset('dofus', 'img/hub/icon__0027_Inventaire.png') }}" alt="">
        </div>
        <div class="card-title">équipement</div>
    </div>
    @php
        $items = $marketListing->character->items->mapWithKeys(function($item){
            return [$item->Position => $item];
        })->all();
    @endphp
    <div class="card-body p-0 market--equipement">
        <div class="market--inventory">
            @foreach ( $items as $key => $item)
                @php
                    $image_url = $item->getImageUrl();
                    $extra = $item->effects();
                @endphp
                <div class="market--inventory-slot-{{$key}}">
                    
                        <img src="{{ plugin_asset('dofus', 'img/inventory/slot_dark_background_full.png') }}" alt="slot_dark_background_full">
                        <a href="#" data-html="true" data-placement="right" data-toggle="tooltip"
                            title="
                                    <div class='tooltip--inventory'>
                                        <div class='tooltip--inventory-effect'>
                                            Effets
                                            <ul>
                                                @foreach ($extra->effects as $effect)
                                                    <li>
                                                        {{ $effect->getFormatedCharacteristic() }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                ">
                            <img class="icon is-icon" src="{{$image_url}}" alt="">
                        </a>
                </div>
            @endforeach
            @for($i=0; $i <= 16; $i++)
                @php
                    $itemEmpty=[
                        0 => "icon_slot_collar_inventory",
                        1 => "icon_slot_weapon_inventory",
                        2 => "icon_slot_ring_inventory",
                        3 => "icon_slot_belt_inventory",
                        4 => "icon_slot_ring_inventory",
                        5 => "icon_slot_shoe_inventory",
                        6 => "icon_slot_helmet_inventory",
                        7 => "icon_slot_cape_inventory",
                        8 => "icon_slot_pet_inventory",
                        9 => "icon_slot_dofus_inventory",
                        10 => "icon_slot_dofus_inventory",
                        11 => "icon_slot_dofus_inventory",
                        12 => "icon_slot_dofus_inventory",
                        13 => "icon_slot_dofus_inventory",
                        14 => "icon_slot_dofus_inventory",
                        15 => "icon_slot_shield_inventory",
                        16 => "icon_slot_companon_inventory",
                    ];
                @endphp
                @if(!isset($items[$i]))
                    <div class="market--inventory-slot-{{$i}}">
                        <img
                            src="{{ plugin_asset('dofus', 'img/inventory/slot_dark_background_empty.png') }}"
                            alt="">
                        <a href="#" data-html="true" data-placement="right" data-toggle="tooltip"
                           title="<span class='color-red'>Vide</span>">
                            <img class="icon"
                                 src="{{ plugin_asset('dofus', 'img/inventory/'.$itemEmpty[$i].'.png') }}"
                                 alt="">
                        </a>
                    </div>
                @endif
            @endfor

            <div class="market--inventory-slot-player market--inventory-base">
                <div class="market--inventory-base-top">

                </div>
                <div class="market--inventory-base-bottom">
                    <button class="market--inventory-base-bottom-left">
                        <img
                            src="{{ plugin_asset('dofus', 'img/inventory/btn_arrow_turn_character_normal.png') }}"
                            alt="">
                    </button>
                    <img src="{{ plugin_asset('dofus', 'img/inventory/base_character_sprite.png') }}"
                         alt="">
                    <button class="market--inventory-base-bottom-right">
                        <img
                            src="{{ plugin_asset('dofus', 'img/inventory/btn_arrow_turn_character_normal.png') }}"
                            alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>