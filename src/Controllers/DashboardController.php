<?php

namespace cahyadsn\ci4basic\Controllers;

/**
 * Class DashboardController.
 */
class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('cahyadsn\ci4basic\Views\dashboard', $data);
    }
}
