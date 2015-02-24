<?php
class DemoComposer
{
    public function compose($view)
    {
        $view->with('demo123', 'data demo 123 call');
        $view->with('title', 'Demo Controller- View - With Laravel Framework');
    }
}