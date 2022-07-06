<?php declare(strict_types=1);

namespace App\Mailer;

use App\Entity\ConstantKeyCollection;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface as TemplatingInterface;

class SystemNotificationMailer
{
    /** @var \Swift_Mailer */
    private $consumerMailer;

    /** @var TemplatingInterface */
    private $template;

    public function __construct(\Swift_Mailer $consumerMailer, TemplatingInterface $template)
    {
        $this->consumerMailer = $consumerMailer;
        $this->template = $template;
    }

    public function sendUlustransEmail($subject, $body = []): void
    {
        $message = new \Swift_Message();
        $message
            ->setSubject($subject)
            ->setFrom('no-reply@foreo.com')
            ->setTo(ConstantKeyCollection::ULUSTRANS_MAILING_LIST)
            ->setBody(
                $this->template->render(
                    'mail/system_notification.html.twig',
                    [
                        'content' => $body,
                    ]
                ),
                'text/html'
            )
        ;

        $this->consumerMailer->send($message);
    }
}
