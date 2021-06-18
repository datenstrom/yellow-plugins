<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Install 0.8.49
==============
Installiere eine brandneue, wunderbare Website. 

<p align="center"><img src="install-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Webseite installiert

Zum Installieren entpackt man eine Datei und los geht's. Der Installer überprüft zuerst ob alle Anforderungen erfüllt sind, zum Beispiel ob der Webserver funktioniert. Dann kann man ein Benutzerkonto anlegen und auswählen welche Art von Webseite man machen möchte. Der Installer löscht sich nachdem er seine Arbeit erledigt hat. [Weitere Informationen zur Installation](https://datenstrom.se/de/yellow/help/how-to-get-started).

## Wie man ein Installationspaket erstellt

Ein Installationspaket besteht aus dem Installer, Erweiterungen und zusätzlichen Dateien. Der Installer besteht aus den Dateien `install.php` und `install-languages.zip`. Du kannst [Erweiterungen](https://github.com/datenstrom/yellow-extensions/tree/master/zip) herunterladen, umbenennen und in dein `system/extensions`-Verzeichnis kopieren. Sie werden dann bei der Installation zur Auswahl angeboten.

## Beispiele

Erweiterungseinstellungen für den Installer:

~~~
Extension: Install
Version: 0.8.49
Description: Install a brand new, shiny website.
Published: 2021-05-31 11:35:00
HelpUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/install
Developer: Datenstrom and various translators
system/extensions/install.php: install.php, create, optional
system/extensions/install-languages.zip: install-languages.zip, create, optional
~~~

Erweiterungseinstellungen für den Installer, zusätzliche Dateien:

~~~
Extension: Install
Version: 0.8.49
Description: Install a brand new, shiny website.
Published: 2021-05-31 11:35:00
HelpUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/install
Developer: Datenstrom and various translators
system/extensions/install.php: install.php, create, optional
system/extensions/install-languages.zip: install-languages.zip, create, optional
system/extensions/install-blog.zip: install-blog.zip, create, optional
system/extensions/install-wiki.zip: install-wiki.zip, create, optional
content/1-home/page.md: page.md, create, optional
content/shared/page-error-404.md: page-error-404.md, create, optional
content/shared/page-new-default.md: page-new-default.md, create, optional
media/downloads/yellow.pdf: yellow.pdf, create, optional
~~~

## Einstellungen

Die Erweiterungseinstellungen findet man in der Datei `system/extensions/update-current.ini`.

## Installation

Diese Erweiterung ist Teil eines Installationspakets.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).