<?php

namespace App\Controller;

use App\Entity\UserFormation;
use App\Form\UserFormationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/favoris')]
class FavorisController extends AbstractController
{
    #[Route('/', name: 'app_favoris_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $userFormations = $entityManager
            ->getRepository(UserFormation::class)
            ->findAll();

        return $this->render('favoris/index.html.twig', [
            'user_formations' => $userFormations,
        ]);
    }

    #[Route('/new', name: 'app_favoris_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $userFormation = new UserFormation();
        $form = $this->createForm(UserFormationType::class, $userFormation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($userFormation);
            $entityManager->flush();

            return $this->redirectToRoute('app_favoris_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('favoris/new.html.twig', [
            'user_formation' => $userFormation,
            'form' => $form,
        ]);
    }

    #[Route('/{idUser}', name: 'app_favoris_show', methods: ['GET'])]
    public function show(UserFormation $userFormation): Response
    {
        return $this->render('favoris/show.html.twig', [
            'user_formation' => $userFormation,
        ]);
    }

    #[Route('/{idUser}/edit', name: 'app_favoris_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, UserFormation $userFormation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserFormationType::class, $userFormation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_favoris_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('favoris/edit.html.twig', [
            'user_formation' => $userFormation,
            'form' => $form,
        ]);
    }

    #[Route('/{idUser}', name: 'app_favoris_delete', methods: ['POST'])]
    public function delete(Request $request, UserFormation $userFormation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$userFormation->getIdUser(), $request->request->get('_token'))) {
            $entityManager->remove($userFormation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_favoris_index', [], Response::HTTP_SEE_OTHER);
    }
}
