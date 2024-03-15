<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    // Vista del controlador
    // private $view = 'Panel\dashboard';

    // private function cargar_datos()
    // {
    //     $datos = array();

    //     // Informacion del sistema
    //     $datos['nombre_pagina'] = 'Dashboard';
    //     // Peticiones SQL
    //     return $datos;
    //     // Breadcrumb
    // }

    // private function crear_vista($vista = '', $contenido = array())
    // {
    //     return view($vista, $contenido);
    // }

    public function index(): string
    {
        mensaje("tittle", "mmm", 2);
        return view('Panel/dashboard');
    }
}
