<?php

namespace SON\Store\Logger;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;

class Logger implements LoggerInterface
{
    use LoggerTrait;

    private $base_dir;

    public function __construct($base_dir)
    {
        $this->base_dir = $base_dir;
    }

    public function alert($message, array $context = array())
    {
        // enviar um email avisando
        // enviar um sms avisando
        // enviar para o Slack
        // enviar para o messenger do Facebook
        $this->log(LogLevel::ALERT, $message, $context);
    }

    public function log($level, $message, array $context = array())
    {
        $message = $this->interpolate($message, $context);
        $file = $this->base_dir . '/' . $level . '.log';

        $message = date('Y-m-d H:m:s') . '- ' . $message;

        if (file_exists($file)) {
            $content = file_get_contents($file);
            $content .= PHP_EOL;
            $message = $content . $message;
        }

        file_put_contents($file, $message);
    }

    private function interpolate($message, array $context = array())
    {
        $replace = array();
        foreach ($context as $key => $val) {
            // check that the value can be casted to string
            if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) {
                $replace['{' . $key . '}'] = $val;
            }
        }

        // interpolate replacement values into the message and return
        return strtr($message, $replace);
    }
}
