<?php


namespace App\Classes;


use App\Interfaces\SaveDataInterface;
use App\Models\Feedback;


class SaveFeedbackToDb implements SaveDataInterface
{

    /**
     * @param Array $validate
     */
    public static function saveData($request)
    {
        Feedback::create($request);
    }
}
