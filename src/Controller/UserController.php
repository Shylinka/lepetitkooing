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
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
//use App\Service\RandomHelper; // Ne pas oublier de use le service



class UserController extends AbstractController
{
    /**
     * @Route("/isRegistered", name="isRegisteredPage")
     **/
    public function register(EntityManagerInterface $em, Request $request, UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $user = new User();

        $user->setUsername($request->get('username'))
            ->setPassword($userPasswordEncoder->encodePassword($user,$request->get('password'))
            );



        $em->persist($user);
        $em->flush();

        return $this->render('isRegistered.html.twig', [
            'title' => 'Bienvenue  ' . $user->getUsername() ]);


    }

    /**
     * @Route("/changepassword", name="changepassword")
     **/
    public function changePassword(EntityManagerInterface $em, Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $user = $this->getUser();
        $oldPassword = $request->get('OldPassword');
        $checkPass = $passwordEncoder->isPasswordValid($user, $oldPassword);

//        $userActualPassword = $this->getUser()->getPassword();
//        $verifPassword = $userPasswordEncoder->encodePassword($user, $request->get('OldPassword'));
//        dum($userActualPassword);
//        dd($verifPassword);
//        die;

        if($checkPass === true){
            $user->setPassword($passwordEncoder->encodePassword($user,$request->get('NewPassword')));

            $em->persist($this->getUser());
            $em->flush();
            return $this->render('profil.html.twig', [
                'title' => 'Mon profil',
                'change' => 'Mot de passe bien changé',
                'username' => $user->getUsername(),
                'changeUsername' => ''

            ]);
        }
        else {
            return $this->render('profil.html.twig', [
                'title' => 'Mon profil',
                'change' => 'Erreur dans le mot de passe actuel'
            ]);
        }


    }

    /**
     * @Route("/changeusername", name="changeusername")
     **/
    public function changeUsername(EntityManagerInterface $em, Request $request){
            $user = $this->getUser();

            $user->setUsername($request->get('NewUsername'));

            $em->persist($user);
            $em->flush();
            return $this->render('profil.html.twig', [
                'title' => 'Mon profil',
                'change' => '',
                'changeUsername' => 'Nom bien changé',
                'username' => $user->getUsername()

            ]);


    }

//    /**
//     * @Route("/isLoged", name="isLogedPage")
//     **/
//    public function connexion(EntityManagerInterface $em, Request $request)
//    {
//        $user = new User();
//        $user->setEmail($request->get('email'))
//            ->setPassword($request->get('password'));
//
//        $kConnect = $request->get('keepConnect');
//
//        $repository = $em->getRepository(User::class);
//
//        $user = $repository->findAll();
//
//        $em->persist($user);
//        $em->flush();
//
//        return $this->render('annoncesPage.html.twig', [
//            'title' => 'Bonjour' . $user->getUsername() . ' !'
//        ]);
//    }

}