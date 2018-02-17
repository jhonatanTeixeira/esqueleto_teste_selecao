<?php

namespace App\Action;

use App\Domain\Model\Hello;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;

class HelloAction
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    
    /**
     * @var Twig
     */
    private $twig;
    
    public function __construct(EntityManagerInterface $entityManager, Twig $twig)
    {
        $this->entityManager = $entityManager;
        $this->twig          = $twig;
    }
    
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        $hello = $this->entityManager->find(Hello::class, $request->getQueryParams()['id'] ?? 1);
        
        return $this->twig->render($response, 'hello.twig', [
            'name' => $hello->getName()
        ]);
    }
}
