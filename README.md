#  Veb aplikacija za poručivanje hrane

Aplikacija se razvija sa ciljem da omoguci korisniku da poruči hranu iz najbližih restorana.
 
## Pokretanje Projekta

1. Pokrenite Apache i MySQL XAMPP module

2. Klonirajte repozitorijum: `git clone https://github.com/elab-development/internet-tehnologije-projekat-aplikacijaporucivanjehrane_2020_0340`

3. U terminalu komandom `cd internet-tehnologije-projekat-aplikacijaporucivanjehrane_2020_0340` otvorite root folder aplikacije

4. Zatim kreirajte .env fajl komandom `copy .env.example .env`

5. Instalirajte sve dependency-e uz pomoć sledeće komande `composer install`

6. Generišite ključ vaše laravel aplikacije komandom `php artisan key:generate`

7. U phpMyAdmin panelu kreirajte bazu čiji naziv je defnisan u .env fajlu

8. Napravite migracije komandom `php artisan migrate`

9. Da biste popuili bazu pokrenite komandu `php artisan db:seed`

10. Da biste pokrenuli aplikaciju potrebno je pokrenuti komandu `php artisan serve`

11. Instalirajte paktete za react: `npm install`

12. Da biste pokrenuli aplikaciju u react-u, potrebno je pokrenuti komandu `npm start`
 
## Funkcionalnosti

- Registracija

- Login i logout

- Odabir kategorije restorana

- Pretraživanje restorana po nazivu

- Dodavanje proizvoda u korpu

- Izbacivanje proizvoda iz korpe

- Pregled mape

- Provera prognoze u Beogradu
 
## Autori

Sara & Zeljana
 
