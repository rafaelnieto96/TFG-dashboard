<?php

namespace App\Controller;

use App\Service\PostService;
use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Exception;

/**
 * @Route("posts", name="posts_")
*/
class PostController extends AbstractController
{
    private $postService;

    public function __construct(PostService $postService) {
        $this->postService = $postService;
    }

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $posts = $this->postService->getPostsList();

        return $this->render('posts/index.html.twig', [
            'items' => $posts,
        ]);
    }

    /**
     * @Route("/new", name="new")
     */
    public function new(Request $request): Response
    {
        $form = $this->createForm(PostType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $post = $this->postService->createPost($formData);

            return $this->redirectToRoute('posts_index');
        }

        return $this->render('posts/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Request $request, $id): Response
    {
        $item = $this->postService->getOnePost($id);

        $form = $this->createForm(PostType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $post = $this->postService->updatePost($id, $formData);

            return $this->redirectToRoute('posts_index');
        }

        return $this->render('posts/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="delete")
     */
    public function delete(Request $request, $id): Response
    {
        try {
            $this->postService->delete($id);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
        return $this->redirectToRoute('posts_index');
    }
}
