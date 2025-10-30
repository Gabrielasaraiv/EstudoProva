<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Usuarios\Create;
use App\Livewire\Usuarios\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');

Route::get('/usuario/cadastro', Create::class)->name('usuario.create');

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/logout', Logout::class)->name('logout');
