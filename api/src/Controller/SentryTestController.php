<?php
namespace App\Controller;

use App\Dto\SentryTestOutput;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class SentryTestController
{
    public function __construct(private LoggerInterface $logger) {}

    public function __invoke(): SentryTestOutput
    {
        $this->logger->error('Sentry test: something went wrong');


        $output = new SentryTestOutput();
        $output->message = 'Log sent to Sentry (and response returned)';

        return $output;
    }
}
