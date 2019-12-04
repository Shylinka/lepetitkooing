<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Annonce;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse; // on ajoute la classe de réponse json
use Psr\Log\LoggerInterface; // Important de récupérer la classe pour l'utiliser dans nos fichiers
use Twig\Environment;

//use App\Service\RandomHelper; // Ne pas oublier de use le service

use App\Security\LoginFromAuthenticator;

class AnnonceController extends AbstractController
{

//    /**
//     * @Route("/createannonce", name="createannoncepage")
//     **/
//    public function createannonce()
//    {
//        return $this->render('createannoncepage.html.twig', [
//            'title' => 'coucouuuuu'
//        ]);
//    }
    /**
     * @Route("/createannonce", name="createannoncepage")
     **/
    public function createannoncepage()
    {
        return $this->render('createannoncepage.html.twig', [
            'title' => 'Nouvelle annonce'
        ]);
    }

    /**
     * @Route("/mesannonces", name="mesannoncespage")
     **/
    public function mesannoncespage()
    {
        $id = $this->getUser()->getId();
        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonces = $repository->findBy(['seller'=> $id]);

        return $this->render('mesannoncespage.html.twig', [
            'title' => 'Gérer mes annonces',
            'annonces' => $annonces
        ]);
    }

    /**
     * @Route("/annonceCreee", name="annoncecreeepage")
     **/
    public function createannonce(EntityManagerInterface $em, Request $request)
    {
        $user = new User();
        $user=$this->getUser();

        $annonce = new Annonce();

        $annonce->setCategory($request->get('category'))
            ->setTitle($request->get('title'))
            ->setDescription($request->get('description'))
            ->setPrice($request->get('price'))
            ->setSeller($this->getUser());


        //$annonce->setSeller($user);
        $this->getUser()->addAnnonce($annonce);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->persist($annonce);
        $em->flush();


        return $this->render('annonceCreee.html.twig', [
            'title' => 'Bravo, tu viens de poster une nouvelle annonce !'
        ]);




        //return $this->redirectToRoute('annoncespage');

//        $em->persist($annonce);
//        $em->flush();

//        return $this->render('isRegistered.html.twig', [
//            'title' => 'Bienvenue  ' . $user->getUsername() ]);

        //$user = new User();
//      $user->setName('Computer Peripherals');



//        return $this->render('annoncespage.html.twig',['Saved new product with id: '.$annonce->getTitle()
//            .' and new category with id: '.$user->getUsername()]
////            'createannoncepage.html.twig', [
////            'title' => 'Créer une annonce']
//);
    }


    /**
 * @Route("/annonces", name="annoncespage")
 **/
    public function annoncespage()
    {
        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonces = $repository->findAll();

        return $this->render('annoncesPage.html.twig', [
            'title' => $this->getUser()->getUsername(),
            'annonces'=>$annonces,
            //'user'=>$annonces->getSeller()->getUsername()
        ]);
    }

    /**
     * @Route("/modifierAnnonce/{annonceId}", name="modifierAnnonce")
     **/
    public function modifierannonce($annonceId)
    {


        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonce = $repository->findOneBy(['id' => $annonceId]);

        return $this->render('modifierAnnonce.html.twig', [
            'title' => $this->getUser()->getUsername(),
            'annonce'=> $annonce
        ]);
    }

    /**
     * @Route("/newAnnonce/{annonceId}", name="newAnnonce")
     **/
    public function newAnnonce(Request $request, EntityManagerInterface $em, $annonceId) {
        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonce = $repository->findOneBy(['id' => $annonceId]);

        $annonce->setCategory($request->get('category'))
            ->setTitle($request->get('title'))
            ->setDescription($request->get('description'))
            ->setPrice($request->get('price'));

        $em->persist($this->getUser());
        $em->flush();

        return $this->redirectToRoute('profilpage');

    }

    /**
     * @Route("/supprimerAnnonce/{annonceId}", name="supprimerAnnonce")
     **/
    public function supprimerAnnonce($annonceId, EntityManagerInterface $em)
    {
        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonce = $repository->findOneBy(['id' => $annonceId]);

        $em->remove($annonce);
        $em->flush();

        return $this->redirectToRoute('profilpage');
    }

//
//    /**
//     * @Route("/annoncesdunuser", name="annoncesdunuserpage")
//     **/
//    public function annoncesdunuser()
//    {
////        $repository = $this->getDoctrine()->getRepository(Annonce::class);
//        $annoncesDunUser =
//
//        return $this->render('annoncesDunUser.html.twig', [
//            'user' => $this->getUser()->getUsername(),
//
//            //'user'=>$annonces->getSeller()->getUsername()
//        ]);
//    }

//    public function index()
//    {
//        $category = new Category();
//        $category->setName('Computer Peripherals');
//
//        $product = new Product();
//        $product->setName('Keyboard');
//        $product->setPrice(19.99);
//        $product->setDescription('Ergonomic and stylish!');
//
//        // relates this product to the category
//        $product->setCategory($category);
//
//        $entityManager = $this->getDoctrine()->getManager();
//        $entityManager->persist($category);
//        $entityManager->persist($product);
//        $entityManager->flush();
//
//        return new Response(
//            'Saved new product with id: '.$product->getId()
//            .' and new category with id: '.$category->getId()
//        );
//    }


}