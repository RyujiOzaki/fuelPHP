<?php

class Controller_Osu0413 extends Fuel\Core\Controller
{
    public static function action_index()
    {
        $data = array();
        $data['title'] = '2013年4月13日（土曜日）';
        return View::forge('osu0413', $data);
    }
}

?>