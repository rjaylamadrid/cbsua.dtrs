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
Macaw::get('/employees/profile/(:any)', 'Employees@show');
Macaw::get('/employees/profile/(:any)/(:any)', 'Employees@show');


Macaw::dispatch();