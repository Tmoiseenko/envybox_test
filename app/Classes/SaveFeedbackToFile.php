<?php


namespace App\Classes;


use App\Interfaces\SaveDataInterface;
use Carbon\Carbon;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class SaveFeedbackToFile implements SaveDataInterface
{
    public static function saveData($request)
    {
        $orderLog = new Logger('feedback');
        $orderLog->pushHandler(
            new StreamHandler(storage_path('logs/feedback-'.Carbon::now()->toDateString().'.log')
            ), Logger::INFO);
        $orderLog->info('Feedback', $request);
    }
}
