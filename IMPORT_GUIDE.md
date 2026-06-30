# HP CAP XML Import Guide

## Purpose
This guide explains how product data should be imported from HP CAP XML files into the website catalog.

## Supported Import Format
Preferred production format:

```text
products.zip
└── many XML files
```

The importer should process all XML files inside the ZIP at once.

## 7z Archives
Some HP CAP feeds may arrive as `.7z` archives. Production hosting may not support `.7z` extraction by default.

Recommended workflow:

1. Extract `.7z` locally using 7-Zip or WinRAR.
2. Recompress the XML files into a standard `.zip` file.
3. Upload the ZIP through the importer.

If `.7z` support is added, the importer must first verify that the server has `7z` or `p7zip` installed.

## Required Fields to Extract
Codex should implement flexible extraction for different CAP XML node structures.

Extract:

- Product name
- Product number / SKU
- Product category
- Product subcategory
- Product image URL
- Product overview
- Short description
- Long description
- List price / reseller price when available
- Technical specifications

## Pricing Rule
Never invent pricing.

If the XML contains a valid price, display it.

If the XML does not contain a valid price, display:

```text
Request Price
```

## Image Rule
Use official image URLs from the CAP XML feed when available.

If image URLs are missing, use a clean neutral placeholder only as a fallback.

## Duplicate Detection
Use SKU/product number as the primary unique key.

When importing:

- Existing SKU found: update product.
- New SKU found: insert product.
- Invalid XML: skip and log error.

## Import Log
The importer should show:

- Total XML files scanned
- Products imported
- Products updated
- Products skipped
- Products failed
- Error log download

## Category Mapping

### Printers
Keywords:

```text
printer, laserjet, officejet, deskjet, envy printer, pagewide, inkjet, multifunction printer, mfp
```

### Laptops
Keywords:

```text
laptop, notebook, elitebook, probook, pavilion laptop, spectre, envy laptop, omen laptop, zbook
```

### Desktops
Keywords:

```text
desktop, tower, mini, workstation, all-in-one, aio, elitedesk, prodesk, z workstation
```

### Exclusions
Do not show monitors, accessories, ink, toner, cables, docks, bags, warranties, or service products under Printers, Laptops, or Desktops unless explicitly requested.