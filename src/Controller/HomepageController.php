<?php

namespace App\Controller;

use App\Service\EventService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    private $eventService;

    public function __construct(EventService $eventService) {
        $this->eventService = $eventService;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        $events = $this->eventService->getEvents();
        // dd($events);
        return $this->render('homepage/index.html.twig', [
            'events' => $events,
        ]);
    }

}
