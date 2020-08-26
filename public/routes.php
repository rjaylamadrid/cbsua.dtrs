<?php
use NoahBuscher\Macaw\Macaw;

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

Macaw::dispatch();