<?php

namespace App\Controller\Api;

use App\Service\SecurityAlertService;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Method({"POST"})
     * @Route("/api/updateSecurityAlerts")
     *
     * @param SecurityAlertService $alertService
     * @param LoggerInterface $logger
     *
     * @return JsonResponse
     */
    public function updateSecurityAlerts(
        SecurityAlertService $alertService,
        LoggerInterface $logger
    ) {
        try {
            $alertService->updateList();
            $logger->info('Security Alerts was updated.');
            return new JsonResponse();
        } catch (\Exception $e) {
            $logger->critical($e->getMessage(), $e->getTrace());
            return new JsonResponse('An error was encountered', 500);
        }
    }
}