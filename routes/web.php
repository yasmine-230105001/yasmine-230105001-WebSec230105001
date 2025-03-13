<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/multable', function () {
    return view('multable');
});

Route::get('/even', function () {
    return view('even');
});

Route::get('/prime', function () {
    return view('prime');
});



Route::get('/transcript', function () {     
    $student = [
        'name' => 'Malak',
        'id' => '230104846',
        'department' => 'Network & Cybersecurity',
        'courses' => [
            ['name' => 'Web Security', 'grade' => 'A'],
            ['name' => 'Network Management', 'grade' => 'A+'],
            ['name' => 'Digital Forensics', 'grade' => 'A-'],
            ['name' => 'Project I', 'grade' => 'A+'],
            ['name' => 'Linux & shell programming', 'grade' => 'A'],

        ]
    ];

    return view('transcript', ['student' => $student]);
});

Route::get('/products', function () {
    $products = [
        [
            'name' => 'Wireless Mouse',
            'image' => 'mouse.jpg', 
            'price' => '$25',
            'description' => 'Ergonomic wireless mouse with smooth tracking.'
        ],
        [
            'name' => 'Mechanical Keyboard',
            'image' => 'keyboard.jpg',
            'price' => '$80',
            'description' => 'RGB mechanical keyboard with blue switches.'
        ],
        [
            'name' => 'Gaming Headset',
            'image' => 'headset.jpg',
            'price' => '$60',
            'description' => 'Surround sound gaming headset with noise cancellation.'
        ],
    ];

    return view('products', ['products' => $products]);
});


Route::get('/minitest', function () {
    $bill = [
        ['item' => 'Milk', 'quantity' => 2, 'price' => 1.50],
        ['item' => 'Bread', 'quantity' => 1, 'price' => 2.00],
        ['item' => 'Eggs', 'quantity' => 12, 'price' => 0.20],
        ['item' => 'Butter', 'quantity' => 1, 'price' => 3.50],
    ];

    return view('minitest', ['bill' => $bill]);
});


Route::get('/calculator', function () {
    return view('calculator');
});


Route::get('/calculator', function () {
    $courses = [
        ['code' => 'CET232', 'title' => 'Web & Security Technologies', 'credit' => 3],
        ['code' => 'CET233', 'title' => 'Digital Forensics Fundamental', 'credit' => 3],
        ['code' => 'CET262', 'title' => 'Network Operation & Management', 'credit' => 4],
        ['code' => 'MTH202', 'title' => 'Advanced Mathematics', 'credit' => 3],
        ['code' => 'ENG101', 'title' => 'English Composition', 'credit' => 2]
    ];

    return view('calculator', ['courses' => $courses]);
});


