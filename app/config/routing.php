<?php
// Default
App::get('/default/index/([\S]+)', function (){});
App::get('/default/detail', function (){});

// User
App::get('/user/index', function (){});
App::get('/user/detail', function (){});