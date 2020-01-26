<?php

namespace App\Mappers\Response;

use Illuminate\Contracts\Support\Jsonable;

abstract class ResponseMapper implements Jsonable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->toArray(), $options);
    }
}
