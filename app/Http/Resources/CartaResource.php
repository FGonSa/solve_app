<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartaResource extends JsonResource{

    public function toArray($request){
        // return [
        //     "siglas" => $this->sigles,
        // ];
        return parent::toArray($request);

    }
}

?>
