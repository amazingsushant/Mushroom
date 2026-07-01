# Payment Setup Guide

This project should support cart and checkout functionality while keeping payment credentials configurable for later production activation.

## Payment Methods to Support

- PayPal
- Visa
- Mastercard
- American Express
- Other major cards supported by the selected payment gateway

## Important Security Rule

Do not commit live payment credentials to GitHub.

Use environment variables or private hosting configuration files for:

- PayPal client ID
- PayPal secret
- Stripe publishable key
- Stripe secret key
- Hosted payment links
- Webhook signing secrets

## Pricing Rule

Only products with valid XML prices can show `Add to Cart`.

Products without prices must show:

```text
Request Price
```

or

```text
Request Quote
```

## WordPress Recommended Setup

Use WooCommerce where practical.

Recommended plugins:

- WooCommerce
- WooCommerce PayPal Payments
- WooCommerce Stripe Gateway

The HP product catalog plugin should either:

1. Sync priced products into WooCommerce products, or
2. Render cart-compatible buttons for priced products.

Products without prices should not be purchasable directly.

## PHP Standalone Setup

The PHP version should include:

```text
/php-version/cart.php
/php-version/checkout.php
/php-version/config/payments.example.php
```

The live server can copy:

```text
config/payments.example.php
```

to:

```text
config/payments.php
```

and add real credentials there.

## HTML Preview Setup

The HTML version should include demo cart behavior only.

Payment buttons in the HTML preview should be marked as placeholders until connected to a real payment processor.

## Hosted Payment Links

If payment API integration is delayed, the checkout page may include configurable hosted payment links, for example:

- PayPal payment link
- Stripe payment link
- Card processor checkout link

These links should be managed in configuration, not hardcoded across templates.

## Production Checklist

Before accepting live payments:

- Enable SSL/HTTPS.
- Use sandbox mode first.
- Test PayPal checkout.
- Test Visa card payment.
- Test Mastercard payment.
- Test American Express payment.
- Test failed payment behavior.
- Test refund behavior if supported.
- Confirm tax, shipping, and terms pages are legally reviewed.
- Move credentials outside the public web root.
- Confirm no live secrets are committed to GitHub.