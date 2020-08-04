<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ApiController extends AbstractController
{
    /**
     * @Route("/api", methods={"GET"})
     */
    public function handleGetApi(UserInterface $user)
    {
        $data = ['message' => 'Hello from ' . $user->getUsername()];

        return $this->json($data, 200);
    }
}
