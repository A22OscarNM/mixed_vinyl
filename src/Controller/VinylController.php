<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class VinylController{
    
    #[Route('/')]

    public function homepage(){
        return new Response('Title: PB and Jams'); 
    }
    
    #[Route('/browse/{salada}')]
    public function browse(string $salada = null): Response{
        if($salada){
            $title = 'James, '. u(str_replace('-', ' ', $salada))->title(true).' James';
        }else{
            $title = 'Main';
        }
        

        return new Response($title);
    }

}
?>