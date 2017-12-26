<?php


namespace App\Service;

use App\Entity\SecurityAlert;
use App\Helper\Converter;
use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class SecurityAlertService
{

    const UPDATE_URL = 'https://www.debian.org/security/dsa';

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * SecurityAlertService constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * Update the list of SecurityAlert
     *
     * @return bool
     * @throws \RuntimeException
     */
    public function updateList(): bool
    {
        $client = new Client();
        /** @var ResponseInterface $response */
        $response = $client->get(self::UPDATE_URL);
        $content = $response->getBody()->getContents();
        $xml = simplexml_load_string($content);
        /** @var \stdClass $content */
        $content = json_decode(Converter::xmlToJson($xml));

        if (isset($content->item)) {
            foreach ($content->item as $item) {
                $existingElement = $this->em->getRepository(SecurityAlert::class)->findOneBy(['title' => $item->title]);
                if (null === $existingElement) {
                    $securityAlert = new SecurityAlert();
                    $securityAlert->setTitle($item->title);
                    $securityAlert->setDescription($item->description);
                    $securityAlert->setLink($item->link);

                    $this->em->persist($securityAlert);
                }
            }
        }

        $this->em->flush();

        return true;
    }
}