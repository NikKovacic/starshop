<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('<strong>Starshop</strong>: your monopoly-busting option');
    }
}
