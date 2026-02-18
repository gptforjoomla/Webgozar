# Webgozar Module for Joomla

`mod_webgozar` is a Joomla site module that embeds Webgozar tools on your pages:

- Counter
- Poll
- Newsletter subscribe/unsubscribe form

## Joomla compatibility

- Joomla 6.x (current branch)

## Configuration

1. Install the module package in Joomla.
2. Create your tool at [webgozar.com](https://www.webgozar.com/).
3. In module settings:
   - choose **Type** (`counter`, `poll`, or `newsletter`)
   - enter the numeric **Code** from Webgozar
   - configure counter visibility and newsletter layout as needed

## Notes

- The module renders Webgozar JavaScript directly from Webgozar endpoints.
- If the code is not configured, the module outputs nothing.
