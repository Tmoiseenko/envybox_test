<?php

namespace App\Http\Controllers;

use App\Classes\SaveFeedbackToDb;
use App\Classes\SaveFeedbackToFile;
use App\Models\Feedback;
use Carbon\Carbon;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
    public function index()
    {
        return view('form-feedback');
    }

    public function show()
    {
        return view('show-feedback', ['feedbacks' => Feedback::all()]);
    }

    public function save(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:3|max:100',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);

        $toDb = new SaveFeedbackToDb();
        $toDb->saveData($validate);

        $toFile = new SaveFeedbackToFile();
        $toFile->saveData($validate);

        flash("Ваша заявка принята");
        return back();
    }
}
