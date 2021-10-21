<?php

namespace AcMarche\Signature;

require_once 'vendor/autoload.php';

use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

// create instance
$cssToInlineStyles = new CssToInlineStyles();

$html = file_get_contents('signature.html');
$css = file_get_contents('dist/tailwind.css');
// output
$compiled = $cssToInlineStyles->convert(
    $html,
    $css
);

echo $compiled;
