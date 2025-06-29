<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dato['titulo'] = 'Inicio';

        echo view('front/header', $dato);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }
    
    public function quienes_somos()
    {
        $dato['titulo'] = 'Quienes Somos';

        echo view('front/header' , $dato);
        echo view('front/navbar');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }

    public function acerca_de()
    {
        $dato['titulo'] = 'Acerca de';

        echo view('front/header', $dato);
        echo view('front/navbar');
        echo view('front/acerca_de.php');
        echo view('front/footer');
    }

}
