# Bootstrap 4 theme for concrete5

This is a starter theme for concrete5 built on top of Bootstrap 4.

The purpose of this theme is not to be a fully fledged ready theme for
concrete5. It is supposed to serve as a starting point for building further
themes.

## Using SCSS

Bootstrap 4 is built on SCSS which means that the CSS filed in this theme are
using SCSS.

Traditionally, concrete5 makes you use Less for the CSS files but there is an
add-on available that allows you to use any possible preprocessing language
within concrete5.

This add-on is called [Asset Pipeline](https://github.com/mainio/c5_asset_pipeline).

You will need to install that add-on in order to use this theme.

## Installation

1. Install the [Asset Pipeline](https://github.com/mainio/c5_asset_pipeline) add-on.
2. Download or clone this repository and extract it into the /packages folder
   of your concrete5 installation.
3. Rename the folder to `theme_bootstrap4_starter`.
4. Open up your web browser and navigate to the Dashboard of the website.
   Install the add-on through the `Extend` view of the dashboard.
5. Apply this theme to be used for the site through the `Pages & Themes` view.

## Building on this theme

As mentioned, this theme is meant to be used primarily as a starting point
theme and not a theme you would use as-is on your site. To start a new theme
based on this theme, please follow the following steps:

1. Download or clone this repository and extract it some place you can find it
   from.
2. Copy the folder under the `themes` folder named `bootstrap4_starter` to your
   `application/themes` folder.
3. Rename the theme with a name more suitable to your project (e.g.
   `your_theme`).
4. Open up the `page_theme.php` from the theme folder and do a couple of
   changes to that file:
     * Change the namespace to `Application\Theme\YourTheme`, please note that
       the name you defined for the theme folder defines also this namespace.
       Check concrete5 documentation for more details.
     * Change all other references to `bootstrap4_starter` into `your_theme`
       (according to the theme folder's name). There are e.g. some JavaScript
       paths that need to be changed.

Please also note that when building on this theme, you will also need to have
the [Asset Pipeline](https://github.com/mainio/c5_asset_pipeline) add-on
installed in concrete5 because this relies on it.
