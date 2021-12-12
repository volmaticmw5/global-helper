<?php
namespace volmaticmw5\GlobalHelper;

use App\Http\Controllers\Controller;

class Sorter extends Controller
{
    public static function sortMultiDimArrayByValue(array &$array, string $valueName, $dir = SORT_ASC)
    {
        $result = [];
        foreach ($array as $key => $row) {
            $result[$key] = $row[$valueName];
        }

        array_multisort($result, $dir, $array);

        return $result;
    }
}
?>