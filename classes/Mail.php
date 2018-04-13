<?php

class Mail
{
    private $to;
    private $subject;
    private $template;
    private $data;
    private $header;

    /**
     * Mail constructor.
     * @param $to
     * @param $subject
     * @param $template
     * @param $data
     * @param $header
     */
    public function __construct($to, $subject, $template, $data , $header = null)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->template = $template;
        $this->data = $data;

        if ($header === null) {
            $this->header = 'From: webmaster@example.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        }
        else {
            $this->header = $header;

        }
    }


    public function sendMail() {
        mail($this->to,
            $this->subject,
            $this->template,
            $this->header
            );
    }

}