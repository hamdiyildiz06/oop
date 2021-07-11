<?php
// Default
App::get('/');
App::get('/default/index', function (){});
App::get('/default/detail', function (){});

//App::get('/default/detail/([\d]+)', function (){});

//App::get('/default/index/([\S]+)', function (){});
//App::get('/default/detail', function (){});

// User
App::get('/user/index', function (){});
App::get('/user/detail', function (){});