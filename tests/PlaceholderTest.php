<?php

namespace Dmnc\ImagePlaceholders\Tests;

use PHPUnit\Framework\TestCase;
use Dmnc\ImagePlaceholders\Placeholder;

/**
 * Super simple tests for super simple placeholders
 *
 * @author  Dom Morgan <dom@d3r.com>
 */
class PlaceholderTest extends TestCase
{
    /**
     * Check the SVG comes out as expected.
     *
     * @author Dom Morgan <dom@d3r.com>
     */
    public function testSvg()
    {
        $placeholder = new Placeholder(150, 100, "#f00");

        $this->assertSame(
            '<svg xmlns="http://www.w3.org/2000/svg"' .
            ' width="150" height="100" viewBox="0 0 1 1"' .
            ' preserveAspectRatio="none">' .
            '<rect width="1" height="1" fill="#f00"/></svg>',
            $placeholder->svg()
        );
    }

    /**
     * Check that the data uri also looks moderately sensible.
     *
     * @author Dom Morgan <dom@d3r.com>
     */
    public function testToString()
    {
        $placeholder = new Placeholder(150, 100, "#f00");

        $this->assertSame(
            'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcm' .
            'cvMjAwMC9zdmciIHdpZHRoPSIxNTAiIGhlaWdodD0iMTAwIiB2aWV3Qm94PSIwID' .
            'AgMSAxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48cmVjdCB3aWR0aD0iMS' .
            'IgaGVpZ2h0PSIxIiBmaWxsPSIjZjAwIi8+PC9zdmc+',
            (string) $placeholder
        );
    }
}
