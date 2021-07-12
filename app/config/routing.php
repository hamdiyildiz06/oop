<?php
// Default
App::get('/');
App::get('/default/index', true);
App::get('/default/detail/([\d]+)', false);
App::get('/default/login', false);

//App::get('/default/detail/([\d]+)', function (){});

//App::get('/default/index/([\S]+)', function (){});
//App::get('/default/detail', function (){});

// User
App::get('/user/index', false);
App::get('/user/detail', false);