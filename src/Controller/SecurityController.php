<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils,Request $request): Response
    {
        
        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
            //error message
            'error' => $authenticationUtils->getLastAuthenticationError(),
            'last_username'=>$authenticationUtils->getLastUsername(),
        ]);
        dd($request->query->all());
        
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): Response
    {
        throw new Exception('logout ! should never be reached.');   
    }
}
