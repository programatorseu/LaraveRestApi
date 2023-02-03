# Zadanie - Rest API
Wersja PHP : 8

REST API Utwórz REST API przy użyciu frameworka Laravel / Symfony. 

Celem aplikacji jest umożliwienie przesłania przez użytkownika informacji odnośnie  (CRUD)

- Firmy(nazwa, NIP, adres, miasto, kod pocztowy) 

- Pracownik(imię, nazwisko, email, numer telefonu(opcjonalne)) - wszystkie pola są obowiązkowe poza tym które jest oznaczone jako opcjonalne. 

**Taski** 


1) Routes /api/v1/?
   
- dziala dla index companies 
`curl http://127.0.0.1:8000/api/v1/companies`


1) CRUD endpoints  (create, store, put, patch, delete)

   <u>3 problemy egzystencjonalny</u>

   - korzsystac z custom form request czy ogolnego.
       - wybor na Custom - https://laravel.com/docs/9.x/validation#form-request-validation  do przeczytania
        - https://laravel.com/docs/9.x/eloquent-resources 
   - ochrona @csrf
   - throttle?

2) Sanctum 

3) Napisac jakie testy ?