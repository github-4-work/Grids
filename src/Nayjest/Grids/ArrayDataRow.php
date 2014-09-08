<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.05.14
 * Time: 16:18
 */

namespace Nayjest\Grids;


class ArrayDataRow extends DataRow
{

    protected function extractCellValue($field_name)
    {
        if (strpos($field_name, '.') !== false) {
            $parts = explode('.', $field_name);
            $res = $this->src;
            foreach($parts as $part) {
                if (isset($res[$part])) {
                    $res = $res[$part];
                } else {
                    return $res;
                }
            }
            return $res;
        } else {
            return $this->src[$field_name];
        }
    }
} 