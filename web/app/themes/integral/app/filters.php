<?php

/**
 * Theme filters.
 */

namespace App;

use DOMDocument;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
* Filters the next, previous and submit buttons.
* Replaces the form's <input> buttons with <button> while maintaining attributes from original <input>.
*
* @param string $button Contains the <input> tag to be filtered.
* @param object $form Contains all the properties of the current form.
*
* @return string The filtered button.
*/

add_filter( 'gform_submit_button', function($button, $form) {
    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $button);

    $input = $dom->getElementsByTagName('input')->item(0);
    $newButton = $dom->createElement('button');

    foreach ($input->attributes as $attribute) {
        $newButton->setAttribute($attribute->name, $attribute->value);
    }

    $outerSpan = $dom->createElement('span');
    $innerSpan = $dom->createElement('span', $input->getAttribute('value'));
    $input->removeAttribute('value');

    $outerSpan->appendChild($innerSpan);
    $newButton->appendChild($outerSpan);

    $input->parentNode->replaceChild($newButton, $input);

    return $dom->saveHtml($newButton);
}, 10, 2 );
