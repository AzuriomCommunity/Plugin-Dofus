<?php

namespace Azuriom\Plugin\Dofus\Models;

use Azuriom\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Azuriom\Models\Traits\HasTablePrefix;

class CharacterItem extends Model
{
    use HasTablePrefix;

    /**
     * The table prefix associated with the model.
     *
     * @var string
     */
    protected $prefix = 'dofus_';

    protected $connection = 'dofus_world';

    protected $table = 'characters_items';

    public function getImageUrl() {
        if(Storage::exists("dofus/items/{$this->ItemId}.png")) {
            return Storage::url("dofus/items/{$this->ItemId}.png");
        } else {
            $url = [
                "https://fr.dofus.dofapi.fr/equipments/{$this->ItemId}",
                "https://fr.dofus.dofapi.fr/weapons/{$this->ItemId}",
                "https://fr.dofus.dofapi.fr/pets/{$this->ItemId}",
                "https://fr.dofus.dofapi.fr/mouts/{$this->ItemId}",
            ];

            foreach ($url as $value){
                $response = Http::get($value);

                if ($response->ok()){
                    $json = $response->json();
                    // $image = file_get_contents($json['imgUrl']); Todo : cache file on local storage
                    // Storage::put("dofus/items/{$this->ItemId}.png", $image);
                    return $json['imgUrl'];
                }
            }
        }
    }

    public function effects()
    {
        return dofus_deserialize_stuff_effects($this->SerializedEffects);
    }
}