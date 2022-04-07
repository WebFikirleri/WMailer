<?php

namespace WMailer\Libraries;

class WMailer {

    public function sendMail($data)
    {
        $wConfig = Config('\WMailer\Config\WMailer');
        $email = \Config\Services::email();
        $email->setFrom($wConfig->wSenderMail, $wConfig->wSenderName);
        $email->setTo($data['to']);
        $email->setReplyTo($wConfig->replyTo);
        $email->setSubject($data['subject']);
        if (isset($data['message'])) {
            $email->setMessage($data['message']);
        } else {
            $prepData = [
                'title' => $data['title'],
                'content_1' => $data['content_1'],
                'content_2' => $data['content_2'],
                'buttonTitle' => $data['buttonTitle'],
                'buttonLink' => $data['buttonLink'],
                'facebook' => $wConfig->facebookLink,
                'twitter' => $wConfig->twitterLink,
                'instagram' => $wConfig->instagramLink,
                'linkedin' => $wConfig->linkedinLink,
            ];
            $message = $this->prepTpl($prepData);
            $email->setMessage($message);
        }
        if ($email->send(false)) {
            return true;
        } else {
            return $email->printDebugger();
        }
    }

    public function prepTpl($data)
    {
        return view('\WMailer\Views\mail_view', $data);
    }

}