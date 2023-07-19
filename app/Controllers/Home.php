<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    

    public function prueba ()
    {
        echo 'hola esto es una prueba';
    }

    public function api ()
    {


        $usuarios= array (
           
            "usuario" => "Mau190",
            "nombres" => "Arturo Arequipa",
            "Ciudad" => "ecuador",
            "Direccion" => "guayaquil",
            "telefono" => "2093903020"
        );

        $producto1 = array(
            "nombre" => "Mac",
            "descripcion" => "computadora de trabajo",
            "precio" => "$200.99"
        );

        $producto2 = array(
            "nombre" => "Airpads",
            "descripcion" => "Audifonos que funcionan mediante bluetooh",
            "precio" => "$29.99"
        );

        $producto3 = array(
            "nombre" => "ps4",
            "descripcion" => "Videoconsola para probar tus juegos favoritos",
            "precio" => "$200.99"
        );

        $resultado = array($producto1, $producto2, $producto3);


        return $this->response->setJSON($resultado);

    }


    public function login(){

return view('login');
    
    }


    public function testbd()
    {

        $this->db=\Config\Database::connect();
        $query=$this->db->query("SELECT * FROM products;");
        $result=$query->getResult();
        return $this->response->setJSON($result);


        // echo "hola";
    
    }
}
