<?php

namespace Dmnc\ImagePlaceholders;

/**
 * Create data URIs for SVG placeholders.
 *
 *
 *
 * Super simple currently just supporting width, height and colour.
 *
 * @author Dom Morgan <dom@d3r.com>
 */
class Placeholder
{
    public static function src(...$params)
    {
        $placeholder = new static(...$params);
        return (string) $placeholder;
    }

    /**
     * CSS compatible colour
     *
     * @var string
     */
    private $colour;

    /**
     * Image width
     *
     * @var integer
     */
    private $width;

    /**
     * Image height
     *
     * @var integer
     */
    private $height;

    /**
     * Create an immutable placeholder
     *
     * @param  int $width in pixels
     * @param  int $height in pixels
     * @param  string $colour CSS compatible
     * @author Dom Morgan <dom@d3r.com>
     */
    public function __construct(int $width, int $height, string $colour = "#aaa")
    {
        $this->width = $width;
        $this->height = $height;
        $this->colour = $colour;
    }

    /**
     * Create a data URI from the current settings
     *
     * @return string
     * @author Dom Morgan <dom@d3r.com>
     */
    public function __toString()
    {
        return "data:"
            . "image/svg+xml"
            . ";base64,"
            . base64_encode($this->svg())
            ;
    }

    /**
     * The unencoded SVG
     *
     * @return string
     * @author Dom Morgan <dom@d3r.com>
     */
    public function svg(): string
    {
        return '<svg xmlns="http://www.w3.org/2000/svg"'
            . ' width="' . $this->width . '"'
            . ' height="' . $this->height . '"'
            . ' viewBox="0 0 1 1"'
            . ' preserveAspectRatio="none"'
            . '>'
            . '<rect width="1" height="1" fill="' . $this->colour . '"/>'
            . '</svg>'
            ;
    }
}
