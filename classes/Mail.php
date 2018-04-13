<?php

class Mail
{
    private $to;
    private $subject;
    private $template;
    private $header;

    /**
     * Mail constructor.
     * @param $to
     * @param $subject
     * @param $template
     * @param $header
     */
    public function __construct($to, $subject, $template, $header = null)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->template = $template;

        if ($header === null) {
            $this->header = 'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        }
        else {
            $this->header = $header;

        }
    }


    public function sendMail($to, $subject, $template, $header) {

    }

}