<?php

namespace App\Controller;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse; // on ajoute la classe de réponse json
use Psr\Log\LoggerInterface; // Important de récupérer la classe pour l'utiliser dans nos fichiers
use Twig\Environment;
use App\Service\RandomHelper; // Ne pas oublier de use le service
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserController extends AbstractController
{
    /**
     * @Route("/isRegistered", name="isRegisteredPage")
     **/
    public function register(EntityManagerInterface $em, Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();

        $user->setUsername($request->get('username'))
                ->setEmail($request->get('email'))
            ->setPassword($request->get('password')
            );



        $em->persist($user);
        $em->flush();

        return $this->render('isRegistered.html.twig', [
            'title' => 'Bienvenue  ' . $user->getUsername() ]);


    }

}