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
use App\Security\LoginFromAuthenticator;

class AnnonceController extends AbstractController
{
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

        $annonce->setCategory($request->get('subCategory'))
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
     * @Route("/recherche", name="recherche")
     **/
    public function recherche(Request $request){
        $category=$request->get('subCategory');
        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonces = $repository->findBy(['category' => $category]);


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

        $annonce->setCategory($request->get('subCategory'))
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

}