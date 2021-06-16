<?php

declare(strict_types=1);
namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/test")
 */
class TestController{
    /**
     * @Route(path="/", methods={"GET"})
     */
    public function index(){
        return new Response(
            json_encode([
                'somevalue'=>123,
                'somestring'=>'somestring',
            ]),
            Response::HTTP_OK,
            [
                'Content-type' =>'application/json'
            ]
        );

    }
}

?>