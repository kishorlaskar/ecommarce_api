<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use function Symfony\Component\Translation\t;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
               'name'=>$this->name,
               'description'=>$this->detail,
               'stock'=>$this->stock,
               'discount'=>$this->discount,
                'Image'=>$this->product_image
            ];
    }
}
