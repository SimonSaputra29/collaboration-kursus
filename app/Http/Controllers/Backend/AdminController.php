<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Configuration;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LoginPage()
    {
        $configuration = Configuration::first();
        return view('welcome', compact('configuration'));
    }

    public function index()
    {
        $configuration = Configuration::first();
        return view('backend.index', compact('configuration'));
    }

    public function avatars()
    {
        return view('backend.components.avatars');
    }

    public function buttons()
    {
        return view('backend.components.buttons');
    }

    public function gridSytem()
    {
        return view('backend.components.gridsystem');
    }

    public function panels()
    {
        return view('backend.components.panels');
    }

    public function notifications()
    {
        return view('backend.components.notifications');
    }

    public function sweetAlert()
    {
        return view('backend.components.sweetalert');
    }

    public function fontAwesomeIcons()
    {
        return view('backend.components.font-awesome-icons');
    }

    public function simpleLineIcons()
    {
        return view('backend.components.simple-line-icons');
    }

    public function typography()
    {
        return view('backend.components.typography');
    }

    public function sidebarStyle2()
    {
        return view('backend.sidebar-style-2');
    }

    public function iconMenu()
    {
        return view('backend.icon-menu');
    }

    public function forms()
    {
        return view('backend.forms.forms');
    }

    public function tables()
    {
        return view('backend.tables.tables');
    }

    public function dataTables()
    {
        return view('backend.tables.datatables');
    }

    public function googleMaps()
    {
        return view('backend.maps.googlemaps');
    }

    public function jsvectormap()
    {
        return view('backend.maps.jsvectormap');
    }

    public function charts()
    {
        return view('backend.charts.charts');
    }

    public function sparkline()
    {
        return view('backend.charts.sparkline');
    }

    public function widgets()
    {
        return view('backend.widgets');
    }
}
