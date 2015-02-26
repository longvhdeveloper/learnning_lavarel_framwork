<?php
class numberfilter
{
    public function filter($route, $request, $param)
    {
        if (!is_numeric($param)) {
            return 'Error';
        }
    }
}