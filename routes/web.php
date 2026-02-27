<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {  return view('portfolio'); });

Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('portfolio.projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');

Route::get('/projects/cmm-task-app', function () { return view('projects.cmm_project');})->name('projects.cmm');
Route::get('/projects/izone-fitness-center', function () { return view('projects.izone_fitness_center');})->name('projects.izone');
Route::get('/projects/exen-limited', function () { return view('projects.Exen_Limited');})->name('projects.exen-limited');
Route::get('/projects/gormahia-fc', function () { return view('projects.gormahia_fc');})->name('projects.gormahia-fc');

