# Team23 Remove ElasticSuite Banner extension

Prevents backend notification being displayed.

## Description

The newest Smile_ElasticSuite extension versions are displaying a notification on top of the backend, which can't get
marked as read by the user. This extension prevents this banner from being displayed at all.

## Installation

Installation is done via `composer`.

### Add composer registry

```shell
composer config repositories.git.team23.de/171 '{"type": "composer", "url": "https://git.team23.de/api/v4/group/171/-/packages/composer/packages.json"}'
```

### Install package

```shell
composer require team23/module-remove-elasticsuite-banner
```

Use following commands to enable the extension:

```shell
bin/magento module:enable Team23_RemoveElasticSuiteBanner
bin/magento setup:upgrade
```
