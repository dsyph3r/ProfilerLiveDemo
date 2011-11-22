ProfilerLiveDemo
================

## Overview

Demo project for the [ProfileLiveBundle](https://github.com/dsyph3r/ProfilerLiveBundle)
for Symfony2

![profiler_live_bundle](https://github.com/dsyph3r/ProfilerLiveDemo/raw/master/src/Profiler/DemoBundle/Resources/public/images/screenshot.jpg)

## Installing

 1. Clone the repository
 2. Rename 'app/parameters.ini.dist' to 'app/parameter.ini'
 3. Run 'php bin/vendors install' to install all the required vendors
 4. Install the assets with 'php app/console assets:install web'

If you want to see the Doctrine Profiler information being displayed you need to
configure and create the database as follows:

 1.  Update 'database_' parameters in the config file 'app/parameter.ini'
 2. Create the database with 'php app/console doctrine:database:create'
 3. Update schema with 'php app/console doctrine:schema:create'

## Usage

When you have correclty installed and configured the application point your
browser to 'app_dev.php/'. You should see a simple demo screen. Click the 'Launch
Profiler' button at the top to open the profiler in a new tab. When clicking the
other buttons on the demo page you will see the profiler updating in realtime
with information regarding the responses, requests, etc.