<?php
namespace volmaticmw5\GlobalHelper;

use App\Http\Controllers\Controller;

class Converter extends Controller
{
    public static function ArrayToObject(array $array, $outObject = false)
    {
        return $outObject ? (object)json_decode(json_encode($array)) : json_decode(json_encode($array));
    }

    public static function ObjectToArray(object $obj)
    {
        return json_decode(json_encode($obj), true);
    }
}
?>