<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Googlemap 0.8.7
===============
Bädda in Google-karta.

<p align="center"><img src="googlemap-screenshot.png?raw=true" width="795" height="836" alt="Skärmdump"></p>

## Hur man bäddar in en karta

Skapa en `[googlemap]` förkortning.

Följande argument är tillgängliga, alla utom det första argumentet är valfria:

`Address` = text du anger på [Google-Maps](https://maps.google.com/), placera flera ord i citattecken  
`Zoom` = zoomvärde, standardzoom är 15  
`Style` = kartstil, t.ex. `left`, `center`, `right`  
`Width` = kartbredd, pixel eller procent  
`Height` = karthöjd, pixel eller procent  

## Exempel

Bädda in en karta:

    [googlemap Stockholm]
    [googlemap "Bredgatan 1, Lund, Sweden"]
    [googlemap "Bredgatan 1, Lund, Sweden" 9 right 320 200]

Bädda in en karta, GPS-koordinater:

    [googlemap "59.32820, 18.07007"]
    [googlemap "59.32820, 18.07007" 16]
    [googlemap "59.32820, 18.07007" 16 right 320 200]

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`GooglemapZoom` = zoomvärde  
`GooglemapStyle` = kartstil, t.ex. `flexible`  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/googlemap.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

Detta tilläg använder [Google-Maps](https://maps.google.com/). Tjänsteleverantören samlar in personuppgifter och använder cookies.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).