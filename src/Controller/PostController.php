<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    private $repoPost;
    private $repoCategory;

    public function __construct(PostRepository $repoPost, CategoryRepository $repoCategory) {
        $this->repoPost = $repoPost;
        $this->repoCategory = $repoCategory;
    }
    /**
     * @Route("/posts", name="posts")
     */
    public function index(): Response
    {
        $posts = $this->repoPost->findAll();
        $categories = $this->repoCategory->findAll();
        $allPosts = $this->repoPost->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts,
            'categories' => $categories,
            'allPosts' => $allPosts,
        ]);
    }

    /**
     * @Route("/show/{id}", name="show")
     */
    public function show($id): Response
    {
        $post = $this->repoPost->find($id);

        if (!$post) {
            return $this->redirectToRoute("posts");
        }

        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * @Route("/showPosts/{id}", name="show_posts")
     */
    public function showPosts(?Category $category): Response
    {
        if ($category) {
            $posts = $category->getPosts()->getValues();
        } else {
            return $this->redirectToRoute('posts');
        }

        $categories = $this->repoCategory->findAll();
        $allPosts = $this->repoPost->findAll();

        return $this->render('post/index.html.twig', [
            'posts' => $posts,
            'categories' => $categories,
            'allPosts' => $allPosts,
        ]);
    }
}
