<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use Modules\IssueReporter\Http\Controllers\SomeController;
use App\Http\Controllers\IssueController;


Route::get('/home', function () {
    return view('home', [
    'jobs' => [
        [
            'description'=> 'CivicFix is your community-powered platform designed to make your neighborhood better, safer, and more responsive. Whether it’s a pothole on your street, a broken streetlight, or garbage collection issues — CivicFix empowers every citizen to report it.',
            'report' => 'Click <a href="/report-issue" style="color:green">Submit Issue</a> to submit an issue.'
        ],
        [
            'description'=> 'What Can Citizens Do on CivicFix?',
            'report' => '-Easily submit local issues such as:<br> 
                        - Damaged roads or sidewalks<br> 
                        - Streetlight outages<br> 
                        - Water leakage or sewer problems<br> 
                        - Garbage overflow'
        ]
    ]
]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/report-issue', [IssueController::class, 'create'])->name('report.issue');
Route::post('/report-issue-submit', [IssueController::class, 'store'])->name('report.issue.submit');      


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});


require __DIR__.'/settings.php';
