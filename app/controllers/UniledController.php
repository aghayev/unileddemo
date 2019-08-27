<?php

/**
 * Class UniledController
 */
class UniledController extends BaseController
{

    /**
     * Task 1
     *
     * @return mixed
     */
    public function task1()
    {
        return View::make('uniled.task1');
    }

    /**
     * Task 2
     *
     * @return mixed
     */
    public function task2()
    {
        return View::make('uniled.task2');
    }

    /**
     * Send to a friend
     */
    public function sendtoafriend()
    {
        // get all request data
        $inputs = Input::all();

        // build validation rules
        $rules = array(
            'name' => array('required'),
            'friend_name' => array('required'),
            'friend_email' => array('required', 'email'),
        );

        // create validator instance
        $validation = Validator::make($inputs, $rules);

        //check if inputs valid
        if ($validation->passes()) {

            //save data to db and send email
            $model = new Sendtoafriend();
            $model->name = $inputs['name'];
            $model->friend_name = $inputs['friend_name'];
            $model->friend_email = $inputs['friend_email'];
            $model->save();

            Mail::send('emails.task2', $inputs, function ($message) {
                $message->to(Input::get('friend_email'))->subject("Uniled Demo");
                $message->from('demo@hotmail.co.uk', 'Uniled Demo');
            });

            return Redirect::to('task2')->withSuccess('success');
        }

        //return to form form page with errors
        return Redirect::to('task2')->withErrors($validation);
    }
}