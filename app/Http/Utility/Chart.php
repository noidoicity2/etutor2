<?php


namespace App\Http\Utility;


class Chart
{
    public $label;
    public  $y;
    public function __construct($label, $y)
    {
        $this->label = $label;
        $this->y = $y;

    }


}
