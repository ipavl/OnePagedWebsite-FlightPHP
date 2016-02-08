OnePagedWebsite-FlightPHP
=========================

A PHP port of [OnePagedWebsite](https://github.com/ipavl/OnePagedWebsite-jinja) built with [FlightPHP](http://flightphp.com/).

Set up
------

1. Point your webserver's webroot to `/public`
2. Visit `http://localhost` (or wherever your site is accessible from)
3. Edit the created `db.sqlite3` file to add projects (see the [Database](#database) section below for details)
4. Set `SITE_NAME` in `app/config.php`

By default, there is only a "Project" model, but the app can easily be extended to support other models if desired.

Database
--------

For the **Project** table, the following apply:

* `date` should be a string in the format of `YYYY-MM-DD`. The day (`DD`) portion is ignored when rendered on the page, but could be used to fine-tune the ordering of projects
* `tags` should be a comma-delimited string of tags, e.g. `php,flightphp`
