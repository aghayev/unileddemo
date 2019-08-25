<?php

class UniledController extends BaseController {

    public function task1()
    {

        $data = array('name'=>"Virat Gandhi");

        Mail::send('emails.task2',$data,function($message){
            $message->to('imran.aghayev@hotmail.co.uk')->subject("Email Testing with Laravel");
            $message->from('imran.aghayev@hotmail.co.uk','Creative Losser Hopeless Genius');
        });

        return View::make('uniled.task1');
    }

    public function task2()
    {
        return View::make('uniled.task2');
    }
}