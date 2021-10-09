# Moment 5 Webbutveckling 3 - REST-webbtjänst 

Här är min lösning till del 1 av detta moment - REST-webbtjänsten


## REST-webbtjänstens uppbyggnad

I lösningen används PHP-baserad programmering och MySQL och är uppbyggd på följande sätt:

* En koppling görs till databas genom database.php.
* En installfil skapas för att ge databasen tabellen courses ( det är tabellen vi är intresserade av... :D)
* Klassfilen sköter hanteringen från och till databasens tabell med sql-frågor, där kunna hämta all data, enskild data, updatera data och radera data. 
* Filen coursesrest.php agerar som restwebbtjänst och lägger grund för att innefatta framförandet av all data som läggs in, ändras, raderas i databasens tabell courses. Här används metoderna GET, POST, PUT, DELETE.

## Vill du använda REST-webbtjänsten?
Implementera följande URI för att använda till CRUD:
https://afagerberg.se/webbutveckling3/coursesapi/coursesrest 

### Klona repository
`https://github.com/afagerberg/restapiMoment5.git`



Ha det fint
// Alice
