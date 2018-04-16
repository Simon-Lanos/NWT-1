<?php

class Mail
{
    private $to;
    private $subject;
    private $content;
    private $header;

    /**
     * Mail constructor.
     * @param $to
     * @param $subject
     * @param $content
     * @param $header
     */
    public function __construct($to, $subject, $content, $header = null)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->content = $content;

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

        try {
        mail($this->to,
            $this->subject,
            $this->content,
            $this->header
            );
        $return = true;
        }
        catch (Exception $exception) {
            echo $exception->getMessage();
            $return = false;
        }

        return $return;
    }
}