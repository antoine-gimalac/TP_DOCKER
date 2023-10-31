<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Repository\UserRepository;

class SetupController extends AbstractController
{
    #[Route('/setup', name: 'app_setup')]
    public function index(UserRepository $userRepo): Response
    {
        return $this->render('setup/index.html.twig', [
            'user' => $userRepo->findAll(),
        ]);
    }

    #[Route('/setup/delete/{id}/', name: 'user_delete')]
    public function deleteUser(UserRepository $userRepo, EntityManagerInterface $entityManager, $id){

        $user = $userRepo->find($id);
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_setup');
    }

    #[Route('/setup/modif/{id}/', name: 'user_modif')]
    public function modifUser(UserRepository $userRepo, EntityManagerInterface $entityManager, $id){

        $user = $userRepo->find($id);
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('app_setup');
    }
}
