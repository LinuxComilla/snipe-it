---
currentMenu: composer
---
# Install Dependencies with Composer

Composer is a package manager for PHP that allows us to manage the dependencies for the various vendor packages we utilize in Snipe-IT. Vendor packages are PHP libraries that someone else wrote, and that we use in Snipe-IT to help make it awesome.

These are not the same thing as the [system requirements](../requirements.html), which are technologies that the server itself needs in order to run Snipe-IT (such as a database, etc).

## <i class="fa fa-linux"></i> Linux / OSX

It is not required to install composer globally, however if you wish to, you can find instructions on how to do so on [the Composer website](https://getcomposer.org/doc/00-intro.md#globally).

```bash
cd <install-dir>
curl -sS https://getcomposer.org/installer | php
php composer.phar install --no-dev --prefer-source
```

### For global composer installations

```bash
cd <install-dir>
composer install --no-dev --prefer-source
```

## <i class="fa fa-windows"></i> Windows

- [Download Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe) from the Composer website.
- Open `C:\inetpub\wwwroot\snipe-it` in Windows Explorer
- Right click and select `Composer Install`. This will install the dependencies.