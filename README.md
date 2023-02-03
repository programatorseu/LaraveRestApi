# Zadanie - Rest API

REST API Utwórz REST API przy użyciu frameworka Laravel / Symfony. 

Celem aplikacji jest umożliwienie przesłania przez użytkownika informacji odnośnie  (CRUD)

- Firmy(nazwa, NIP, adres, miasto, kod pocztowy) 

- Pracownik(imię, nazwisko, email, numer telefonu(opcjonalne)) - wszystkie pola są obowiązkowe poza tym które jest oznaczone jako opcjonalne. 

**Taski** 

1) Database Seed (wrzucic The Roots:seed)  - factory (request all a potem fill jak piotr kupicha)

   <u>1 problem egzystencjonalny</u> 

   - jak dam `Firma` model a standard laravel do nazywania bazy danych jest `plural` to bedzie `firmas`  - wyglada  to dziwnie - mogę to zmienic w ORM lub wybrać angielską nazwę

2) Routes /api/v1/?

3) CRUD endpoints  (create, store, put, patch, delete)

   <u>3 problemy egzystencjonalny</u>

   - korzsystac z custom form request czy ogolnego.
   - ochrona @csrf
   - throttle?

4) Sanctum 

5) Napisac jakie testy ?