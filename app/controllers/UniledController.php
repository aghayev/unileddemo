<?php

class UniledController extends BaseController {

    public function task1()
    {
        return View::make('uniled.task1');
    }

    public function task2()
    {
        return View::make('uniled.task2');
    }

    public function sendtoafriend()
    {
        $model = new Sendtoafriend();
        $model->name = Input::get('name');
        $model->friend_name = Input::get('friend_name');
        $model->friend_email = Input::get('friend_email');
        $model->save();

        Mail::send('emails.task2',Input::all(), function($message) {
            $message->to(Input::get('friend_email'))->subject("Uniled Demo");
            $message->from('imran.aghayev@hotmail.co.uk','Uniled Demo');
        });
    }
}