<?php

declare(strict_types = 1);

namespace App\Controller;

use App\Repository\PostRepository;
use App\Services\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="homepage", methods={"GET"})
     * @param Paginator $paginator
     * @param PostRepository $postRepository
     * @return Response
     */
    public function index(Paginator $paginator, PostRepository $postRepository): Response
    {
        $page = $paginator->getPage();

        $postId = $postRepository->getId();

        return $this->json([
            'id' => $postId,
            'page' => $page,
        ]);
    }
}
