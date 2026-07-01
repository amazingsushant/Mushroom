# Codex Task: Production Rebuild for www.myquickresolve.com

## Objective
Rebuild this repository into a professional, production-ready HP-style products catalog website for `www.myquickresolve.com`.

The final result must look like a premium 2026 corporate product catalog, not a childish landing page.

## Business Context
The site is for a USA-facing HP products catalog experience. It should help visitors browse HP printers, HP laptops, and HP desktops, with clean product cards, images, prices where available, descriptions, and product details.

## Frontend Requirements

### Header
- Use only the provided HP-style logo image in the header.
- Do not add extra `HP` text next to the logo.
- Remove the separate `Shop` page/tab.
- Keep header typography small, clean, corporate, and professional.
- Keep navigation minimal.

### Home Page
- Keep the approved home page structure exactly as provided by the project owner.
- Do not add unnecessary oversized hero blocks.
- Do not add support tabs/pages such as Printer Support, Laptop Support, or Desktop Support.
- Keep the page focused on product categories and product browsing.

### Category Sections
Create clean sections for:

1. HP Printers
2. HP Laptops
3. HP Desktops

Each section must have a relevant category image and list only matching products.

### Product Cards
Each product card should display:

- Product image
- Product name
- SKU / product number
- Category
- Subcategory when available
- Short description
- Price when present in XML
- `Request Price` when no XML price is present
- Button or link to view product details
- Add to Cart button when a valid price exists
- Request Price / Request Quote button when no valid price exists

### Product Details
Product detail pages or modals should display:

- Product image gallery when available
- Product name
- SKU
- Description / overview
- Category and subcategory
- Specifications
- Price or `Request Price`
- Add to Cart button for priced products
- Request Quote button for products without prices

## Cart and Payment Requirements

Add a professional cart and checkout flow, but make payment gateway activation configurable for later production integration.

### Cart
- Add cart functionality for products with valid XML pricing.
- Cart should support quantity update, remove item, subtotal, estimated tax placeholder, and total.
- Products without pricing must not be purchasable directly; show `Request Price` or `Request Quote` instead.
- Add cart icon/summary in the header only if it does not make the header look crowded.
- Keep checkout pages professional and responsive.

### Payment Options
Support configurable checkout payment methods:

- PayPal
- Visa
- Mastercard
- American Express
- Other major cards supported by the selected payment processor

### Integration Rule
- Do not hardcode live payment credentials.
- Add placeholder configuration fields for PayPal client ID / secret or payment links.
- Add placeholder configuration fields for Stripe or another card processor.
- Use sandbox/test mode by default.
- Add clear documentation explaining where to paste live PayPal, Stripe, or payment-link credentials later.
- If direct payment API integration is not fully implemented, create a clean `Pay Now` / `Checkout` button area where PayPal, Stripe, or hosted payment links can be connected later.

### WordPress Payment Option
For WordPress, prefer WooCommerce compatibility if practical:

- Products with prices can be synced as WooCommerce products or rendered with cart-compatible buttons.
- Payment should be compatible with WooCommerce PayPal Payments and WooCommerce Stripe Gateway.
- Products without prices should show `Request Price`, not Add to Cart.

### PHP Payment Option
For standalone PHP:

- Implement session-based cart.
- Add checkout page.
- Add placeholder payment configuration file such as `config/payments.example.php`.
- Add PayPal/Stripe integration placeholders without live keys.

### HTML Payment Option
For static HTML preview:

- Add demo cart UI only.
- Use localStorage for preview cart if needed.
- Mark payment buttons as demo placeholders.

## Data Import Requirements

### HP CAP XML Import
Build a reliable importer for HP CAP XML catalog files.

The importer must extract:

- Product name
- Product number / SKU
- Product images from XML image URLs
- List price or reseller/catalog price when present
- Product overview / description
- Category
- Subcategory
- Technical specifications

### ZIP Import
- Support ZIP files containing XML files.
- Import all XML files at once.
- Log total imported, updated, skipped, and failed products.
- Detect duplicates by SKU/product number.
- If `.7z` import is implemented, only support it when the server has `7z` or `p7zip` installed; otherwise show a clear error.

### Category Classification
Products must be classified correctly:

- Printers: printer, LaserJet, OfficeJet, DeskJet, ENVY printer, PageWide, inkjet, multifunction printer, MFP.
- Laptops: laptop, notebook, EliteBook, ProBook, Pavilion laptop, Spectre, Envy laptop, Omen laptop, ZBook.
- Desktops: desktop, tower, mini, workstation, all-in-one, AIO, EliteDesk, ProDesk, Z workstation.
- Monitors and accessories should not appear under printers, laptops, or desktops unless specifically requested.

## Deliverables
Create these folders:

```text
/html-version/
/php-version/
/wordpress-version/
/wordpress-plugin/
```

### HTML Version
Static preview version with sample imported product JSON.

### PHP Version
Standalone dynamic version with:

- XML ZIP importer
- Product data storage
- Search
- Filters
- Pagination
- Category pages or sections
- Session cart
- Checkout page
- PayPal/major card integration placeholders

### WordPress Version
Theme-ready version for WordPress deployment.

### WordPress Plugin
Plugin should provide:

- Admin CAP XML ZIP importer
- Product database table or custom post type
- Cart/checkout compatibility
- WooCommerce compatibility where practical
- Shortcodes:
  - `[hp_products_home]`
  - `[hp_products_catalog]`
  - `[hp_products_category category="printers"]`
  - `[hp_products_category category="laptops"]`
  - `[hp_products_category category="desktops"]`
  - `[hp_products_cart]`
  - `[hp_products_checkout]`

## Design Quality

- Premium 2026 corporate catalog look.
- Clean white/blue HP-style design.
- HD product cards.
- Proper spacing.
- Responsive for USA desktop, laptop, tablet, and mobile screens.
- Use smaller, professional header fonts.
- No fake claims.
- No fake prices.
- No placeholder product images when real image URLs exist.
- Use lazy loading for images.
- Use accessible HTML and ARIA where appropriate.
- Optimize for performance and SEO.
- Cart and checkout must look premium, secure, and professional.

## Documentation Required
Create:

- `README.md`
- `IMPORT_GUIDE.md`
- `DEPLOYMENT_CHECKLIST.md`
- `PAYMENT_SETUP.md`
- `CHANGELOG.md`

## Acceptance Criteria

The rebuild is complete only when:

- Home page matches the approved structure.
- Shop page/tab is removed.
- Header uses only the logo, no extra HP text.
- Printers show only printer products.
- Laptops show only laptop products.
- Desktops show only desktop products.
- Product images load from XML image URLs.
- Price appears only when available from XML.
- Missing price shows `Request Price`.
- Add to Cart appears only for products with valid prices.
- Products without prices cannot be purchased directly.
- Cart page works.
- Checkout page has PayPal and major-card payment placeholders.
- Payment credentials are configurable and not hardcoded.
- XML ZIP importer works and logs results.
- WordPress plugin activates without fatal errors.
- PHP version runs independently.
- HTML version previews cleanly.
- Layout is responsive across screen sizes.

## Production Target
Final deployment target:

```text
www.myquickresolve.com
```

Test first on:

```text
staging.myquickresolve.com
```