# Super Simple (SVG) Image Placeholders

## Introduction
This package is designed to allow the creation of image placeholders with minimal fuss by providing data URIs to be substituted into an img or source's `src` or `srcset` attributes.

The aim is to create a placeholder that meets the following criteria:
- Behaves exactly like a genuine image when styled and resized.
- Can be used when developing offline.
- Does not require additional JavaScript introduced into the page.
- Keeps data URI size to a minimum.

The only option right now is to use SVG for this.

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

## Support
This will hit v1.0.0 once extensive browser testing has been completed. Currently known to behave like an img on (modern)
- Chrome
- Safari
- Firefox

## Alternatives
If you require more feature rich placeholders, and are able to add JavaScript into your page, I suggest the fantastic [Holder.js](http://holderjs.com/).


