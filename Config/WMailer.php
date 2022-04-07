<?php

namespace WMailer\Config;

use CodeIgniter\Config\BaseConfig;

class WMailer extends BaseConfig {
    public $wTitle = 'Site Title';
    public $wSenderMail = 'admin@admin.com';
    public $wSenderName = 'Site Admin';
    public $replyTo = 'admin@admin.com';
}