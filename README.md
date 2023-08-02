# TL;TR

This is a wordpress Elementor media validation plugin

## Install

### vscode

Update .vscode/settings.json with :

```
{
    "intelephense.files.maxSize": 3000000,
    "intelephense.stubs": [
        "apache",
        "bcmath",
        "bz2",
        "calendar",
        "com_dotnet",
        "Core",
        "ctype",
        "curl",
        "date",
        "dba",
        "dom",
        "enchant",
        "exif",
        "FFI",
        "fileinfo",
        "filter",
        "fpm",
        "ftp",
        "gd",
        "gettext",
        "gmp",
        "hash",
        "iconv",
        "imap",
        "intl",
        "json",
        "ldap",
        "libxml",
        "mbstring",
        "meta",
        "mysqli",
        "oci8",
        "odbc",
        "openssl",
        "pcntl",
        "pcre",
        "PDO",
        "pdo_ibm",
        "pdo_mysql",
        "pdo_pgsql",
        "pdo_sqlite",
        "pgsql",
        "Phar",
        "posix",
        "pspell",
        "readline",
        "Reflection",
        "session",
        "shmop",
        "SimpleXML",
        "snmp",
        "soap",
        "sockets",
        "sodium",
        "SPL",
        "sqlite3",
        "standard",
        "superglobals",
        "sysvmsg",
        "sysvsem",
        "sysvshm",
        "tidy",
        "tokenizer",
        "xml",
        "xmlreader",
        "xmlrpc",
        "xmlwriter",
        "xsl",
        "Zend OPcache",
        "zip",
        "zlib",
        "wordpress"
    ]
}
```

### wordpress stub

This [project](https://github.com/php-stubs/wordpress-stubs) provides stub declarations for WordPress core functions, classes and interfaces . Needed for plugin development.

```bash
composer require --dev php-stubs/wordpress-stubs
```

### Elementor plugin

Check [configuration page](https://developers.elementor.com/docs/cli/composer/#install-elementor) for installation.

Please use Local console for Elementor plugin activation because wp-cli is mandatory :

```bash
wp plugin activate elementor
```
