# Boostrap script for usigin GLPI API

This reposity aims to provide a bootstrap for using the Rest API of [GLPI](https://github.com/glpi-project/glpi).
We are using [PHP Guzzle library](http://docs.guzzlephp.org/en/latest/) to send http queries.
See [api.php](api.php) code for details.

## Prerequisites

* GLPI 9.2 (with api enabled)
* PHP >= 5.6

## Installation

* Clone this repository on your computer.
* Move the directory into your http serveur vhost
* Run ```composer install``` to pull dependencies
* Create a config.inc.php from config.inc.example file and fill parameters with your glpi instance data
