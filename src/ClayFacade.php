<?php
namespace Hadefication\Clay;

use Illuminate\Support\Facades\Facade;

class ClayFacade extends Facade
{
    /**
     * Get facade accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'clay';
    }
}
