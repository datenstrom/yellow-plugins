Update 0.8.12
=============
Webseite auf dem neusten Stand halten.

<p align="center"><img src="update-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/update.zip). Falls du Safari verwendest, rechtsklicke und wähle "Verknüpfte Datei laden unter".
3. Kopiere `update.zip` in dein `system/extensions`-Verzeichnis.

Die [Erweiterungsdateien](extension.ini) bitte nicht löschen, sie werden immer gebraucht.

## Wie man eine Webseite aktualisiert

Die erste Möglichkeit besteht darin, deine Webseite im [Webbrowser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) zu aktualisieren. Melde dich mit deinem Benutzerkonto an. Gehe in die Einstellungen und suche nach Aktualisierungen. Deine Webseite zeigt an, wenn Aktualisierungen verfügbar sind. Du benötigst Update-Rechte, um eine Webseite zu aktualisieren. Alle Benutzerkonten werden in der Datei `system/settings/user.ini` gespeichert.

Die zweite Möglichkeit besteht darin, deine Webseite in der [Befehlszeile](https://github.com/datenstrom/yellow-extensions/tree/master/features/command) zu aktualisieren. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php update` gefolgt von optionalen Argumenten. Du kannst die Aktualisierung bei Bedarf erzwingen. Gelöschte Dateien findest du im `system/trash`-Verzeichnis.

## Wie man eine Erweiterungen hinzufügt

Du kannst Erweiterungen als ZIP-Dateien herunterladen und hinzufügen. Du kannst Erweiterungen auch in der [Befehlszeile](https://github.com/datenstrom/yellow-extensions/tree/master/features/command) hinzufügen. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php install` gefolgt von weiteren Argumenten. Du kannst Erweiterungen auch in der Befehlszeile entfernen.

Diese Erweiterung benutzt die [cURL-Bibliothek](https://github.com/curl/curl) von Daniel Stenberg um Dateien herunterzuladen. Entwickler können die [Release-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/release) benutzen um Dateien zu verpacken.

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`UpdateExtensionUrl` = URL der Repository mit Erweiterungen  
`UpdateVersionFile` = Versionsinformationen von Erweiterungen  
`UpdateWaffleFile` = Dateiinformationen von Erweiterungen  
`UpdateNotification` = ausstehende Benachrichtigungen  

## Beispiele

Webseite in der Befehlszeile aktualisieren:
 
`php yellow.php update`  
`php yellow.php update core`  
`php yellow.php update core force`  

Erweiterungen in der Befehlszeile hinzufügen:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german french`  

Erweiterungen in der Befehlszeile entfernen:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german french`  

## Entwickler

Datenstrom. [Support finden](https://extensions.datenstrom.se/de/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>