 ![testing](https://img.shields.io/badge/Unit%20testing-Passed-brightgreen.svg?style=flat) 
 ![Design pattern: Repository](https://img.shields.io/badge/Design%20pattern-Repository-purple.svg?style=flat) 
 ![PHP Framework: Laravel 8.12](https://img.shields.io/badge/PHP%20Framework-%20Laravel%208.12-red.svg?style=flat)
![Documentation: Swagger](https://img.shields.io/badge/Documentation-Swagger-blue.svg?style=flat)
## Vehicle expences listing service
A vehicle expenses service that can combine and retrieve expenses related to vehicles across different tables through a database view.

## Installed software and configuration
01. XAMPP SERVER (PHP 7.4.*)
02. Composer

## How to deploy

### Apache deployment
01. Install xampp server on your own machine
02. Create a new database with name "afaqy"
03. Clone the project to your apache folder ex .htdocs
04. Import the .sql file in the project to your new database.
05. To run the migrations and create the view table Run command ```php artisan migrate```
06. The project should be working now on ```http://localhost/afaqy/public```
   
### Artisan deployment
01. Create a new database with name "afaqy".
02. Clone the project to any folder on your machine.
03. Import the .sql file in the project to your new database.
04. To run the migrations and create the view table Run command ```php artisan migrate```
05. to run the project use command ```php artisan serve```
06. The project should be working now on ```http://127.0.0.1:8000```
      
## Restful API services request

### API documentation
01. Swagger documentation json file => ```api-docs.json```
02. To run the swagger documentation for the service use command ```php artisan l5-swagger:generate```
03. The documents should be available on this link ```http://127.0.0.1:8000/api/documentation```

### GET REQUEST
The services is using the Restful API request.

###### Get expences list by filter
* This request will return all vehicle expences that match the provided criteria
* Get request to [http://127.0.0.1:8000/api/v1/expenses-list](http://127.0.0.1:8000/api/v1/expenses-list)
* possible payload should be like the example below

|Attribute|Type|Description|Optional|Example/
|:----------:|:-----:|:----------:|:----------:|:----------:|
|name|string|represent vehicle name|yes|name=Garland Lang|
|type|array|represent expences types|yes|type=['fuel']|
|max_cost|integer|represent maximum expense cost|yes|max_cost = 10|
|min_cost|integer|represent minimum expense cost|yes|min_cost = 5|
|max_creation_date|datetime|represent maximum expense creation date|yes|max_creation_date = 2020-01-01 00:00:00|
|min_creation_date|datetime|represent minimum expense creation date|yes|min_creation_date = 2020-01-01 00:00:00|
|cost_sort| enum("ASC","DESC")|represent expense cost sort criteria|yes|cost_sort = DESC|
|creation_date_sort|enum("ASC","DESC")|represent expense creation date sort criteria|yes|creation_date_sort = ASC|
|limit|integer|contains limit value to get the expences list|yes|limit=5|


* response should be like 
```json
[
  {
    "id": "1",
    "vehicleName": "Prof. Garland Lang",
    "plateNumber": "3290804",
    "cost": "3",
    "createdAt": "2019-11-20 11:53:05",
    "type": "fuel"
  },
  {
    "id": "1",
    "vehicleName": "Prof. Garland Lang",
    "plateNumber": "3290804",
    "cost": "2",
    "createdAt": "1985-12-09 00:00:00",
    "type": "insurance"
  }
]
```


## Testing
### Unit testing

#### Test cases coverage
* To run the test cases use this command ``` vendor\bin\phpunit ```

=> Can get vehicle expense list?

=> Can filter vehicle expense list by min cost?

=> Can filter vehicle expense list by max cost ?

=> Can filter vehicle expense list by min creation date ?

=> Can filter vehicle expense list by max creation date ?  

=> Can filter vehicle expense list by type correctly ?  

=> Can filter vehicle expense list by type correctly inversed ?  

## Built With

* [Laravel](https://laravel.com/docs) - The web framework used
* [Swagger](https://swagger.io/) - Documentation tool

## License
[MIT](https://choosealicense.com/licenses/mit/)
