<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
    // fake DB stud...
    private $buses = [
        '#19 Aldersham road', // 0
        '#23 Newport road',   // 1
        '#30x Newport express'// 2
    ];

    // method = 'action'
    public function showForm() {
        return view('bus.form');
    }

    public function showInfo(Request $request) {
        $name = $request['name'];

        $message = "Hello there: $name";

        return view('bus-result', compact('name', 'message'));
    }

    public function index() {
        $buses = $this->buses;

        return view('bus.index', compact('buses'));
    }

    public function show($id) {

        // pretend database lookup
        $bus = $this->buses[$id];

        return view('bus.show', compact('bus', 'id'));
    }
}
