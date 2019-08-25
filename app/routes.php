<?php

Route::get('/', 'UniledController@task1');

Route::get('/task1', 'UniledController@task1');

Route::get('/task2', 'UniledController@task2');

Route::post('/sendtoafriend', 'UniledController@sendtoafriend');
