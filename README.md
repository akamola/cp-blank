# cp-blank

*cp-blank* is a simple boilerplate theme for [ClassicPress](https://www.classicpress.net).

Note: This theme is only a starting point for your own theme. It only uses basic and some advanced features of ClassicPress.

## Features

### ClassicPress/WordPress

- 2 widget areas: sidebar, footer
  - See `functions.php`
  - Widget area token: `cpblank-widgetarea-`
- 1 menu in the header: `primary`
  - See `functions.php`
- Basic setup for theme support features
  - See `functions.php`
- Optimized markup for comments
  - See `comments.php` and `functions.php`
- Basic error 404 page
  - See `404.php`
- `is_subpage()` function to check if a page is a subpage
  - See `functions.php`
- Translation ready (i18n)
- Theme token (for i18n, etc.): `cpblank`

### HTML, CSS & Accessibility

- HTML 5 and CSS 3
- Link to RSS feeds
- Blog title isn't linked on the homepage
- Basic WIA-ARIA roles for better accessibility
- Quick jump link to the content area of a page (for better accessibility)
  - Hidden by default with CSS: `#jumper { display: none; }`
- Uses [modern-normalize](https://github.com/sindresorhus/modern-normalize) (minified)
- CSS classes on the BODY
  - See [WordPress Codex: body_class()](https://codex.wordpress.org/Function_Reference/body_class)

### Responsive Design

- Basic responsive design setup
- Responsive images in the content area
- Basic setup for dark mode support

### Social Media & SEO

- Favicon
  - Set your favicon in your root folder: `/favicon.ico`
- Apple Touch Icons
  - See `assets` folder
- [Schema.org](https://schema.org/) meta data for blog posts

### JavaScript

- Basic JavaScript file with jQuery setup
  - See `app.js`
- Enqueues JavaScript in the footer of the website for better performance

### Security & Privacy

- Hide ClassicPress version by removing the generator meta tag
- Replace the default login error message to hide any information that may could be used to crack into the system
- Setup to remove DNS prefatch and WordPress emojis from head
  - See `functions.php`

## Releases

### 1.0.0 (2024-10-26)

- Initial release based on an updated [wp-blank](https://github.com/akamola/wp-blank/)

## Authors

- Arne Kamola <arne@arne.xyz>

## License

[GNU General Public License (GPL) 2.0](https://www.gnu.org/licenses/gpl-2.0.html)
