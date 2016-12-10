# jxtools
JxTools - a JavaScript utility library for phpBB

## Installation

Copy the extension to phpBB/ext/javiexin/jxtools

Go to "ACP" > "Customise" > "Extensions" and enable the "jxtools" extension.

## License

[GPLv2](license.txt)

# Examples of use cases: attributes to use in a DOM element

# Remove the #poll_max_options dl ancestor, then delete this element
jxdom-target = '#poll_max_options';
jxdom-closest = 'dl';
jxdom-action = 'remove';

# Replace the dl ancestor of a #poll_length element directly under a label with the contents of this element
jxdom-target = 'label > #poll_length';
jxdom-closest = 'dl';
jxdom-action = 'replace';

# Insert the contents of this element before the first direct child of the closest td ancestor
jxdom-closest = 'td';
jxdom-find = '> :first-child';
jxdom-action = 'before';

# Insert the contents of this element after the last direct child of the encosing div.inner ancestor
jxdom-closest = 'div.inner';
jxdom-find = '> :last-child';
jxdom-action = 'after';

# Append the contents of this element to the a.avatar element under the enclosing div.avatar-container
jxdom-closest = 'div.avatar-container';
jxdom-find = 'a.avatar';
jxdom-action = 'append';

# Remove the dd.poll_option_select element under the element identified with the data-poll-option-id attribute value specified
jxdom-target = '[data-poll-option-id={poll_option.POLL_OPTION_ID}]';
jxdom-find = 'dd.poll_option_select';
jxdom-action = 'remove';

# Insert the contents of this element after the first direct child of the element identified with the data-poll-option-id attribute value specified
jxdom-target = '[data-poll-option-id={poll_option.POLL_OPTION_ID}]';
jxdom-find = '> :first-child';
jxdom-action = 'after';

# Replace the fieldset.polls element under #preview with the contents of this element
jxdom-target = '#preview fieldset.polls';
jxdom-action = 'replace';


