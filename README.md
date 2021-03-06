Network Status Page - 0.2.6
===================

Designed to monitor a local server and network with forecast.io, Plex, and pfSense integration.

Original Project: (The live site might be dead :( )
[Live site][ls]

[Plex forum thread][pft]

[ls]: http://d4rk.co/
[pft]: http://forums.plexapp.com/index.php/topic/84856-network-status-page/

As a suggestion from another GitHub user, I have created some Gitter chat rooms for my projects, here is the link for this one:

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/scytherswings/Network-Status-Page?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=body_badge)

I'm going to concentrate on this project much less as I plan to make a new project using Ruby on Rails. It will be a while before my new project reaches feature parity so this should work for the time being.

Here's the new project page:
[Plex-Board](https://github.com/scytherswings/Plex-Board)

###Features
---------------
* Responsive web design viewable on desktop, tablet and mobile web browsers 

* Designed using [Bootstrap 3][bs]

* Uses jQuery to provide near real time feedback

* Displays the following:
	* currently playing items from Plex Media Server
	* current network bandwidth from pfSense
	* current ping to ip of your choosing, e.g. Google DNS
	* online / offline status for custom services
	* minute by minute weather forecast from forecast.io
	* server load
	* total disk space for all hard drives

* Now Playing section adjusts scrollable height on the fly depending on browser window height


[bs]: http://getbootstrap.com


###Screenshots
---------------
![alt tag](http://d.pr/i/1hfF8+)

![alt tag](http://d.pr/i/1eTEu+)


###Requirements
---------------
* [Plex Media Server][pms] (v0.9.8+) and a [myPlex][pp] account `These are both free.`
* The weather sidebar requires a [forecast.io API key][fcAPI] `Free up to 1000 calls/day.`
* Web server that supports php (apache, nginx, XAMPP, WampServer, EasyPHP, lighttpd, etc)
* PHP 5.4

**Note:** While this project is written with OS X in mind, it can very easily be adapted to run on linux or windows by rewriting the functions that don't work on those platforms.

[pms]: https://plex.tv
[pp]: https://plex.tv/subscription/about
[fcAPI]: https://developer.forecast.io


###Optional
---------------
* A few functions are written to be used with the following software but they are optional:
	* [SABnzbd+][sab]
	* [pfSense][pfs]

[sab]: http://sabnzbd.org
[pfs]: http://www.pfsense.org


###Configuration
---------------
* To configure the location of your config.ini script, edit the path to the directory of the config.ini file that is set in /assets/php/functions.php
* You should put the config.ini file outside your web root directory to limit access.
* Create the caches and caches/thumbnails folder under the assets folder. I might make a deployment script to handle things like config files and folder creation. Make sure to give ownership to the user that is running your webserver. For apache users this is usually www-data.
	* the path should be something like: /var/www/html/assets/caches
	* and: /var/www/html/assets/caches/thumbnails
