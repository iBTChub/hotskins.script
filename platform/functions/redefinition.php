<?php

/**
 * Remove potential script tags and event handlers from a string to prevent XSS attacks.
 *
 * @param string|null $string The input string to be sanitized.
 * @return string The sanitized string.
 */

function remove_script($string = null) {
    // Remove ASCII control characters
    $string = preg_replace('/[\\x00-\\x08\\x0B\\x0C\\x0E-\\x1F\\x7F]+/S', '', $string);

    # List of script-related keywords and event handlers to be removed

    /*
     * vbscript: A scripting language used in older versions of Internet Explorer. It's a security risk and not supported in modern browsers.
     * expression: An old CSS expression syntax used in Internet Explorer that allows for the execution of JavaScript code.
     * applet: An HTML tag used to embed Java applets (Java programs) in a web page. It's largely obsolete and can pose security risks.
     * xml: An XML data format that can be used for various purposes but can be exploited if not properly handled.
     * blink: An HTML tag that makes text blink, supported only in older browsers like Internet Explorer. It's rarely used today.
     * embed: A tag used to embed multimedia content (e.g., videos, audio) into a web page.
     * object: A tag used to embed various types of media and interactive content. It can be used to execute JavaScript code if misused.
     * frameset: An HTML tag used to define a set of frames for displaying multiple HTML documents in a single window. It's obsolete in HTML5.
     * ilayer: An old tag used in Netscape browsers for layering content. It's obsolete.
     * layer: A similar concept to , used in Netscape browsers for layering content. It's obsolete.ilayer
     * bgsound: A tag used in older versions of Internet Explorer to play background sound. It's obsolete.
     */

    $scriptKeywords = [
        'vbscript',
        'expression',
        'applet',
        'xml',
        'blink',
        'embed',
        'object',
        'frameset',
        'ilayer',
        'layer',
        'bgsound'
    ];

    /* 
     * onabort: Triggered when the user aborts the loading of an element (e.g., an image).
     * onactivate: Fired when an element is activated (e.g., clicked or selected).
     * onafterprint: Fired after the document is printed.
     * onbeforeactivate: Triggered before an element is activated.
     * onbeforecopy: Fired before the user copies the content.
     * onbeforecut: Fired before the user cuts the content.
     * onbeforepaste: Fired before the user pastes the content.
     * onblur: Fired when an element loses focus.
     * onchange: Triggered when the value of an input element changes.
     * oncontextmenu: Fired when the context menu is triggered (usually by a right-click).
     * onclick: Triggered when an element is clicked.
     * oncopy: Fired when the user copies content.
     * oncut: Fired when the user cuts content.
     * ondragstart: Fired when an element starts being dragged.
     * ondrop: Fired when an element is dropped.
     * onerror: Fired when an error occurs (e.g., when loading an image fails).
     * onfocus: Fired when an element gains focus.
     * onkeydown: Fired when a key is pressed down.
     * onkeyup: Fired when a key is released.
     * onload: Triggered when an element (e.g., image or script) finishes loading.
     * onmousedown: Fired when a mouse button is pressed down.
     * onmouseover: Triggered when the mouse pointer is moved over an element.
     * onpaste: Fired when the user pastes content.
     * onsubmit: Fired when a form is submitted.
     * onunload: Fired when the user leaves the page (e.g., by closing the browser window).
     */

    $eventHandlers = [
        'onabort',
        'onactivate',
        'onafterprint',
        'onafterupdate',
        'onbeforeactivate',
        'onbeforecopy',
        'onbeforecut',
        'onbeforedeactivate',
        'onbeforeeditfocus',
        'onbeforepaste',
        'onbeforeprint',
        'onbeforeunload',
        'onbeforeupdate',
        'onblur',
        'onbounce',
        'oncellchange',
        'onchange',
        'oncontextmenu',
        'oncontrolselect',
        'oncopy',
        'oncut',
        'ondataavailable',
        'ondatasetchanged',
        'ondatasetcomplete',
        'ondblclick',
        'ondeactivate',
        'ondrag',
        'ondragend',
        'ondragenter',
        'ondragleave',
        'ondragover',
        'ondragstart',
        'ondrop',
        'onerror',
        'onerrorupdate',
        'onfilterchange',
        'onfinish',
        'onfocus',
        'onfocusin',
        'onfocusout',
        'onhelp',
        'onkeydown',
        'onkeypress',
        'onkeyup',
        'onlayoutcomplete',
        'onload',
        'onlosecapture',
        'onmousedown',
        'onmouseenter',
        'onmouseleave',
        'onmousemove',
        'onmouseout',
        'onmouseover',
        'onmouseup',
        'onmousewheel',
        'onmove',
        'onmoveend',
        'onmovestart',
        'onpaste',
        'onpropertychange',
        'onreadystatechange',
        'onreset',
        'onresize',
        'onresizeend',
        'onresizestart',
        'onrowenter',
        'onrowexit',
        'onrowsdelete',
        'onrowsinserted',
        'onscroll',
        'onselect',
        'onselectionchange',
        'onselectstart',
        'onstart',
        'onstop',
        'onsubmit',
        'onunload'
    ];

    # Combine both lists
    $keywords = array_merge($scriptKeywords, $eventHandlers);

    # Remove each keyword from the string
    foreach ($keywords as $keyword) {
        $pattern = '/';

        # Build a pattern to match variations of the keyword with possible encoding
        for ($j = 0; $j < strlen($keyword); $j++) {
            if ($j > 0) {
                $pattern .= '(';
                $pattern .= '(&#[x|X]0([9][a][b]);?)?';
                $pattern .= '|(&#0([9][10][13]);?)?';
                $pattern .= ')?';
            }
            $pattern .= $keyword[$j];
        }

        $pattern .= '/i';
        $string = preg_replace($pattern, ' ', $string);
    }

    return $string;
}

/**
 * Sanitize user input by escaping special characters and removing scripts.
 *
 * @param string $data The input data to be sanitized.
 * @return string The sanitized data.
 */

function _filter($data) {
    return remove_script(addslashes(htmlspecialchars($data)));
}