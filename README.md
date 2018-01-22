[![Made By Indrukwekkend](https://img.shields.io/badge/Made%20By-Indrukwekkend-ef7b31.svg)](https://indrukwekkend.nl/)

# CreateGo WordPress thema

Dit is het CreateGo basis thema.

### Gebruik

`gulp watch` gebruikt `creatego.local` voor `bower-sync`.
Gebruik `sh build` om het project klaar te maken voor ontwikkeling.

#### Nieuwe Projecten

**GitHub Repository**
Maak een lege repository aan op GitHub.com.
Deze word gebruikt voor het thema. De naam van deze repo wordt de naam van de map voor het thema.
Zie deze repository als voorbeeld.

**AMPPS**
Maak in AMPPS een nieuw domein aan. Noem deze duidelijk en geef het als TLD `.local`.
Voorheen werd `.dev` gebruikt. Deze gaf problemen met recente versies van Google Chrome. Het bleek dat deze TLD
al gereserveerd was voor andere doeleinden.

**Repository Clonen**
In de terminal, ga naar de thema map van het nieuwe domain op AMPPS.
Clone hier vervolgens de nieuwe repository die je in stap 1 hebt gemaakt met `git clone https://github.com/username/repository.git`.

**Thema Importeren**
Download de laatste `creatego-master.zip` van de releases tab.
Pak de inhoud van de zip uit in de map die het clone commando van de vorige stap heeft gemaakt.

**Ontwikkeling**
Gebruik `sh build` om het project klaar te maken voor ontwikkeling.

### Vereisten

#### Systeem
 * PHP 7 of hoger
 * WordPress 4.9 of hoger

#### Plugins
* [Advanced Custom Fields / ACF](https://www.advancedcustomfields.com/)
* [Gravity Forms](http://gravityforms.com/)
* [Yoast SEO](https://yoast.com/)
