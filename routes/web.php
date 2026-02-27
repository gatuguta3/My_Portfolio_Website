<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {  return view('portfolio'); })->name('homepage');

Route::get('/about', [PortfolioController::class, 'about'])->name('portfolio.about');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('portfolio.projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');

Route::get('/projects/e-learning-platform', function () { return view('projects.cmm_project');})->name('projects.cmm');
Route::get('/projects/gym-management-system', function () { return view('projects.izone_fitness_center');})->name('projects.izone');
Route::get('/projects/exen-limited-e_commerce-platform', function () { return view('projects.Exen_Limited');})->name('projects.exen-limited');
Route::get('/projects/gormahia-fc-mobile-application', function () { return view('projects.gormahia_fc');})->name('projects.gormahia-fc');

