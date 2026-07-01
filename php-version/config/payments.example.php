<?php
/**
 * Example payment configuration for MyQuickResolve / HP Products Catalog.
 *
 * IMPORTANT:
 * - Copy this file to payments.php on the production server.
 * - Never commit live credentials to GitHub.
 * - Start with sandbox/test mode.
 */

return [
    'mode' => 'sandbox', // sandbox | live

    'paypal' => [
        'enabled' => false,
        'client_id' => 'PASTE_PAYPAL_CLIENT_ID_HERE',
        'client_secret' => 'PASTE_PAYPAL_SECRET_HERE',
        'currency' => 'USD',
    ],

    'cards' => [
        'enabled' => false,
        'processor' => 'stripe', // stripe | hosted_link | other
        'supported_brands' => ['visa', 'mastercard', 'amex'],
        'stripe_publishable_key' => 'PASTE_STRIPE_PUBLISHABLE_KEY_HERE',
        'stripe_secret_key' => 'PASTE_STRIPE_SECRET_KEY_HERE',
        'currency' => 'USD',
    ],

    'hosted_payment_links' => [
        'enabled' => false,
        'paypal_link' => '',
        'card_payment_link' => '',
    ],
];
