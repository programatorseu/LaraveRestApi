 Rest API

Środowisko: 

- `Laravel Framework 9.50.2`
- `PHP 8.0.25`

**Jest tam sanctum bearer token** 

```
http://127.0.0.1:8000/api/v1/register
```

```json
{
	"name": "<name>",
	"email": "<email>",
	"password": "<haslo>"
}
```

uwagi : 

- `VerifyCsrfToken` dla adresu `http://127.0.0.1:8000/` 

```php
php artisan migrate:fresh --seed
```

Przykładowe endpointy 

| HTTP method                   | Url                   |
| ----------------------------- | --------------------- |
| GET                           | api/v1/companies      |
| POST                          | api/v1/companies      |
| GET \| PUT \| PATCH \| DELETE | api/v1/companies/{id} |
| GET                           | api/v1/employees      |
| POST                          | api/v1/employees      |
| GET\| PUT \| PATCH \| DELETE  | api/v1/employees/{id} |


