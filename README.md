# Super Simple SVG image placeholders

## Introduction
This package is designed to allow the creation of SVG placeholders with minimal fuss by providing data URIs to be substituted into an img or source's `src` or `srcset` attributes.

The aim is to create a placeholder that meets the following criteria:
- Behaves exactly like a genuine image when styled and resized.
- Can be used when developing offline.
- Does not require additional JavaScript introduced into the page.
- Keeps SVG size to a minimum.

## Installation
```
composer require dmnc/ssip
```

## Usage
Placeholders are immutable and created directly through their constructor.

```php
use Dmnc\Ssip\Placeholder;

$placeholder = new Placeholder(100, 50, "#aaa");

echo '<img src="' . $placeholder . '" alt="Stay accessible out there" />';
```

## Alternatives
If you require more feature rich placeholders, and are able to add JavaScript into your page, I suggest the fantastic [Holder.js](http://holderjs.com/).


