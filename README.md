# twentyeleven-twist

This is a custom theme based on TwentyEleven. Not a child theme - it doesn't import anything from other themes.

## Typography

### Fonts

Warnock-pro for blog. Then sub for a [Palatino variant](https://practicaltypography.com/palatino-alternatives.html#)

Venetian is most classical looking, but it's not the right vibe for this site. A faint neo-renaissance vibe is more appropriate.

## Stylesheets

Scripts expose a light/dark switch in the WP dashboard, which toggles the use of dark.css. dark.css overwrites certain color values in style.css.

style.css has most of the style choices.

## PHP structure files

Define the structure of different page types. Define how to read from the database. Tag elements with classes and IDs.

## Widgets

Self-contained; ideally you don't have to use style.css to tweak widget appearances.

## Layout

### Mobile handling
The big layout change happens at sub-800px width: the sidebar pushed under. single-post header images get cropped shorter.

The Mobile Menu Options widget activates at 800px, but only on devices that are detected to be mobile. This widget adds the sticky mobile hamburger menu, and hides the original site title and nav menu. It adds an aesthetic bottom border to the header image (appearing in place of the nav menu).