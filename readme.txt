=== Disable Cookbook Ratings ===
Contributors: jennettefulda
Donate link: https://www.makeworthymedia.com/plugins/
Tags: cookbook,disable,rating,ratings,recipe,recipes,food,schema
Requires at least: 4.0
Tested up to: 4.8.3
Stable tag: 1.1

Disables ratings in the Cookbook recipe plugin. WARNING! This will prevent your Google Rich Cards from being fully enhanced.

== Description ==

This plugin disables ratings in the Cookbook recipe plugin. No one can leave a rating or view existing ratings for recipes on the front-end or back-end of the site. If recipe ratings were submitted on the site before the plugin was activated, those ratings remain in the database but cannot be viewed anywhere. Please note that this will prevent your Google Rich Cards from being fully enhanced. For more information about Rich Cards, read the [post about Rich Cards on the Google Webmaster Blog](https://webmasters.googleblog.com/2016/05/introducing-rich-cards.html).

== Installation ==

1. Upload the folder 'disable-cookbook-ratings' to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it! Ratings will now be disabled in your recipes.

== Frequently Asked Questions ==

= Why would I want to disable ratings? =

Not everyone likes having their recipes rated. Sometimes people are intentionally mean and not all blog owners want to deal with trolls. Sometimes visitors substitute ingredients or make the recipe incorrectly and are surprised when that leads to bad results. Also, visitors seem more likely to leave a review if they're unhappy with the recipe than if they liked it, which might skew the accuracy of the ratings.

= Will disabling ratings affect my SEO and/or Google ranking? =

Disabling ratings will cause your Google Rich Cards from being fully enhanced. If that's important to you, don't use this plugin. For more information about Rich Cards, read the [post about Rich Cards on the Google Webmaster Blog](https://webmasters.googleblog.com/2016/05/introducing-rich-cards.html). You can monitor the status of your Rich Cards by registering your site with [Google Search Console](https://www.google.com/webmasters/tools/) and clicking on Search Appearance -> Rich Cards. This page will let you know how many of your cards are fully enhanced, enhanceable, or invalid. You can also use [Google's Structured Data Testing Tool](https://search.google.com/structured-data/testing-tool/u/0/) to check the status of a particular page on your site.

According to the Google documentation on how to format recipes, the "AggregateRating" field used by the ratings feature is recommended but not required. However, it also says "mark up as many of the recommended fields as possible to drive better engagement in Search." So you will probably get better engagement if you include the ratings, but if your recipe has a low rating that might discourage users from clicking through from Google. It's your call. If your goal is to make your recipes as Google-friendly as possible, don't use this plugin. You can [view the Google documentation on recipe markup here.](https://developers.google.com/search/docs/data-types/recipes)

= Where can I get the Cookbook plugin? =

Cookbook is an excellent recipe plugin available to purchase at [https://cookbookplugin.com/](https://cookbookplugin.com/) It was created by [WP Site Care](https://www.wpsitecare.com/) and [Feast Design Co.](https://feastdesignco.com/)

= Why did you write this plugin? =

This plugin was written by request for Shirley Braden for her blog [Gluten Free Easily](https://glutenfreeeasily.com/)

== Changelog ==

= 1.1 =
* Added more information to the description and FAQ so people are more fully aware of possible implications in Google Search.

= 1.0 =
* Original version of the plugin.