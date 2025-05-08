<?php
return [
    /*
     * Your Telegram Bot API Token.
     */
    'bot_token' => env('TELEGRAM_BOT_TOKEN'),

    /*
     * Webhook URL configuration
     */
    'webhook_url' => env('TELEGRAM_WEBHOOK_URL', null),

    /*
     * Other configurations can remain as default.
     */
];
