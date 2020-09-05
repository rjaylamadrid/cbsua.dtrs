<?php
use NoahBuscher\Macaw\Macaw;

$_SERVER['REQUEST_URI'] = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/");

// Landing page
Macaw::get('/', function () {
    header ("location: login");
});

// Authentication
Macaw::get('login', 'Login@index');
Macaw::post('login', 'Login@do_login');
Macaw::get('logout', function () {
    session_destroy();
    header ("location: login");
});

// Dashboard
Macaw::get('/dashboard', 'Dashboard@index');

// Employees
Macaw::get('/employees', 'Employees@index');
Macaw::get('/employees/profile/(:any)', 'Employees@profile');
Macaw::get('/employees/update/(:any)', 'Employees@update');
Macaw::get('/employees/profile/(:any)/(:any)', 'Employees@profile');
Macaw::get('/employees/update/(:any)/(:any)', 'Employees@update');

// Attendance
Macaw::get('/attendance', 'Attendance@index');
Macaw::post('/attendance', 'Attendance@do_action');
Macaw::post('/attendance/print', 'Attendance@print_preview');

Macaw::dispatch();