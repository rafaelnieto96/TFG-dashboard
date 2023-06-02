<?php

namespace App\Controller;

use App\Service\NotificationService;
use App\Form\NotificationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Exception;

/**
 * @Route("notifications", name="notifications_")
*/
class NotificationController extends AbstractController
{
    private $notificationService;

    public function __construct(NotificationService $notificationService) {
        $this->notificationService = $notificationService;
    }

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $notifications = $this->notificationService->getNotificationsList();

        return $this->render('notifications/index.html.twig', [
            'items' => $notifications,
        ]);
    }

    /**
     * @Route("/new", name="new")
     */
    public function new(Request $request): Response
    {
        $form = $this->createForm(NotificationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $notification = $this->notificationService->createNotification($formData);

            return $this->redirectToRoute('notifications_index');
        }

        return $this->render('notifications/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Request $request, $id): Response
    {
        $item = $this->notificationService->getOneNotification($id);

        $form = $this->createForm(NotificationType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $notification = $this->notificationService->updateNotification($id, $formData);

            return $this->redirectToRoute('notifications_index');
        }

        return $this->render('notifications/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="delete")
     */
    public function delete(Request $request, $id): Response
    {
        try {
            $this->notificationService->delete($id);
        } catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
        return $this->redirectToRoute('notifications_index');
    }
}
