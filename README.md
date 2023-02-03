# Zadanie - Rest API
Wersja PHP : 8

REST API Utwórz REST API przy użyciu frameworka Laravel / Symfony. 

Celem aplikacji jest umożliwienie przesłania przez użytkownika informacji odnośnie  (CRUD)

- Firmy(nazwa, NIP, adres, miasto, kod pocztowy) 

- Pracownik(imię, nazwisko, email, numer telefonu(opcjonalne)) - wszystkie pola są obowiązkowe poza tym które jest oznaczone jako opcjonalne. 

**Taski** 


1) Routes /api/v1/?

2) CRUD endpoints  (create, store, put, patch, delete)

   <u>3 problemy egzystencjonalny</u>

   - korzsystac z custom form request czy ogolnego.
   - ochrona @csrf
   - throttle?

3) Sanctum 

4) Napisac jakie testy ?