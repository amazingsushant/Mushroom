# Deployment Checklist for www.myquickresolve.com

## Before Deployment

- Confirm final website has been tested on staging.
- Confirm the HP-style logo displays correctly.
- Confirm no extra `HP` text appears beside the logo.
- Confirm the separate Shop page/tab has been removed.
- Confirm only product category sections remain.
- Confirm category sections display:
  - HP Printers
  - HP Laptops
  - HP Desktops

## Product Catalog Checks

- Import latest HP CAP XML ZIP.
- Confirm product count after import.
- Confirm printer products show only under HP Printers.
- Confirm laptop products show only under HP Laptops.
- Confirm desktop products show only under HP Desktops.
- Confirm monitors/accessories are not mixed into those categories.
- Confirm images load from HP CAP image URLs.
- Confirm missing prices show `Request Price`.
- Confirm fake prices are not displayed.

## Responsive Testing

Test on:

- 1366px laptop
- 1440px desktop
- 1920px desktop
- iPad/tablet width
- iPhone/mobile width
- Android/mobile width

## WordPress Deployment

- Upload theme/plugin ZIP.
- Activate plugin.
- Run importer with XML ZIP.
- Add shortcodes to pages as needed.
- Test frontend catalog.
- Check PHP error logs.

## PHP Standalone Deployment

- Upload `/php-version/` files to hosting.
- Ensure writable storage/database folder.
- Upload XML ZIP through importer.
- Confirm product JSON/database is generated.
- Test search/filter/pagination.

## SEO Checks

- Page titles are clean.
- Product category pages are indexable.
- Product cards have meaningful alt text.
- Images use lazy loading.
- No duplicate placeholder text across all products.

## Launch

Use staging first:

```text
staging.myquickresolve.com
```

After testing, deploy to:

```text
www.myquickresolve.com
```