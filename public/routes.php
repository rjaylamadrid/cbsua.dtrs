<?php
use NoahBuscher\Macaw\Macaw;

// Landing page
Macaw::get('/', function () {
    header ("location: login");
});

// Authentication
Macaw::get('login', 'Login@index');
Macaw::post('login', 'Login@doLogin');
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
Macaw::post('/attendance', 'Attendance@generate');
Macaw::post('/attendance/init', 'Attendance@get_attendance');

Macaw::dispatch();