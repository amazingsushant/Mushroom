# MyQuickResolve HP Products Catalog

This repository is prepared for a Codex production rebuild of `www.myquickresolve.com`.

## Project Goal
Build a professional 2026 responsive HP-style products catalog website for the USA market.

The site should present HP product categories cleanly:

- HP Printers
- HP Laptops
- HP Desktops

The website should use the provided HP-style logo only in the header, keep the home page structure as approved, remove the separate Shop page/tab, and display dynamic product catalog data imported from HP CAP XML files.

## Required Versions
Codex should create and maintain these separate deliverables:

```text
/html-version/
/php-version/
/wordpress-version/
/wordpress-plugin/
```

## Key Rules

- Do not use placeholder product cards.
- Do not mix product categories.
- Printers must appear only under printers.
- Laptops must appear only under laptops.
- Desktops must appear only under desktops.
- Product images must come from CAP XML image URLs when available.
- Prices must come from XML only when available.
- If no price exists, show `Request Price`.
- Do not falsely claim this is the official HP corporate website.
- Use safe wording such as `HP products catalog`, `HP products store`, or `HP product selection`.

## Next Step for Codex
Open `CODEX_TASK.md` and rebuild the production website according to the instructions.