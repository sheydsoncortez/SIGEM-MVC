<?php
/**
 * Created by PhpStorm.
 * User: mikmi
 * Date: 29/10/2018
 * Time: 21:17
 */

namespace app\controllers;

use app\classes\Escola;
use app\core\Controller;
use app\models\EscolaModel;


class EscolaController extends Controller
{

    public function __contruct()
    {

    }

    public function index()
    {
        $this->load("admin");
    }






}