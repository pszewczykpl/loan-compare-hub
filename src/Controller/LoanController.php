<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LoanController
 * @package App\Controller
 * @author Piotr Szewczyk <Piotr.Szewczyk@digitalvirgo.com>
 */
class LoanController
{
    #[Route('/')]
    public function number(): Response
    {
        return new Response('Hello');
    }
}
