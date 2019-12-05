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
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
//use App\Service\RandomHelper; // Ne pas oublier de use le service

use App\Security\LoginFromAuthenticator;

class APIController extends AbstractController
{

    /**
     * @Route("/api/toutesAnnonces", name="apiToutesAnnonces")
     **/
    public function apiToutesAnnonces()
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];

        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonces = $repository->findAll();

        $jsonContent = $serializer->serialize($annonces, 'json', [AbstractNormalizer::IGNORED_ATTRIBUTES => ['seller']]);

        return new JsonResponse($jsonContent);
    }

    /**
     * @Route("/api/annonce/{annonceId}", name="apiAnnonce")
     **/
    public function apiAnnonce($annonceId)
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];

        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonce = $repository->findOneBy(['id' =>$annonceId]);

        $jsonContent = $serializer->serialize($annonce, 'json', [AbstractNormalizer::IGNORED_ATTRIBUTES => ['seller']]);

        return new JsonResponse($jsonContent);
    }

    /**
     * @Route("/api/annonces/{categorie}", name="apiAnnonceCategorie")
     **/
    public function apiAnnonceCategorie($categorie)
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];

        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);

        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonce = $repository->findBy(['category' =>$categorie]);

        $jsonContent = $serializer->serialize($annonce, 'json', [AbstractNormalizer::IGNORED_ATTRIBUTES => ['seller']]);

        return new JsonResponse($jsonContent);
    }

}