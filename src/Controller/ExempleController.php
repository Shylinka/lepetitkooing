<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse; // on ajoute la classe de réponse json
use Psr\Log\LoggerInterface; // Important de récupérer la classe pour l'utiliser dans nos fichiers
use Twig\Environment;
//use App\Service\RandomHelper; // Ne pas oublier de use le service
use App\Security\LoginFromAuthenticator;

class ExempleController extends AbstractController
{
    public $nbRandom;
    public $arrayPrenoms = array("Claire","Carole","Kiki", "Tritri", "Krikri", "Jean-Charles", "Alix", "Gusgus", "Toitoine", "Peppa");
    public $arrayNom = array("Duguey","Granger","Rourou", "Gege", "Garnier", "The Pow", "Boniot", "Giraudier", "Dousse", "Pig");
    public $arrayVerbe = array("a mangé", "a tué", "a marché sur", "s'est fait écraser par");
    public $arrayCOD = array("ma grand mère", "mon chien", "mon réveil", "une voiture", "Winnie");

    /**
     * @Route("/", name="homepage") // ajout d'une propriété name
     **/
    public function index(/*LoggerInterface $logger*/) {



        return $this->render('index.html.twig', [
            'title' => 'Bienvenue !'

        ]);
    }

//    /**
//     * @Route("/login", name="loginpage")
//     **/
//    public function loginpage()
//    {
//        return $this->render('login.html.twig', [
//            'title' => 'Page de connexion'
//        ]);
//    }

    /**
     * @Route("/annonces", name="annoncespage")
     **/
    public function annoncespage()
    {
        return $this->render('annoncesPage.html.twig', [
            'title' => $this->getUser()->getUsername()
        ]);
    }

    /**
     * @Route("/annonce", name="annoncepage")
     **/
    public function annoncepage()
    {
        return $this->render('annoncePage.html.twig', [
            'title' => 'Annonce seule'
        ]);
    }

    /**
     * @Route("/monprofil", name="profilpage")
     **/
    public function profilpage()
    {
        return $this->render('profil.html.twig', [
            'title' => 'Mon profil'
        ]);
    }

    /**
     * @Route("/createannonce", name="createannoncepage")
     **/
    public function createannoncepage()
    {
        return $this->render('createannoncepage.html.twig', [
            'title' => 'Créer une annonce'
        ]);
    }

//    /**
//     * @Route("/isRegistered", name="isRegisteredPage")
//     **/
//    public function isRegisteredPage()
//    {
//        return $this->render('isRegistered.html.twig', [
//            'title' => 'Tu es inscrit petit enfant'
//        ]);
//    }

    /**
     * @Route("/registration", name="registrationpage")
     **/
    public function registrationpage()
    {
        return $this->render('register.html.twig', [
            'title' => 'Inscription'
        ]);
    }

//    public function index() {
//        $nbRandomPrenom=random_int(0,9);
//        $nbRandomNom=random_int(0,9);
//        $nbRandomVerbe=random_int(0,3);
//        $nbRandomCOD=random_int(0,4);
//
//        return $this->render('index.html.twig', [
//            'title' => 'Générateur d excuses','prenom'=> $this->arrayPrenoms[$nbRandomPrenom],
//            'nom'=> $this->arrayNom[$nbRandomNom],
//            'verbe'=> $this->arrayVerbe[$nbRandomVerbe], 'COD'=> $this->arrayCOD[$nbRandomCOD]
//        ]);

//        return $this->render('index.html.twig', ['title'=>"bonjour"]);
//    }

    /**
     * @Route("/api", name="api_index")
     **/
    public function api() { // nouvelle route
        $data = [
            'test' => 'hello world',
            "table" => ['C’est pas faux', "Une fois, à une exécution, je m'approche d'une fille. Pour rigoler, je lui fais : « Vous êtes de la famille du pendu ? »... C'était sa sœur. Bonjour l'approche !", "C’est pour ça : j’lis jamais rien. C’est un vrai piège à cons c’t’histoire-là. En plus j’sais pas lire."]
        ];

        return new JsonResponse($data);
    }



}