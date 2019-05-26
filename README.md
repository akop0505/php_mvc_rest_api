# php_mvc_rest_api

## API methods

```bash
post: /signup
headers: 
{
    "content-type":"application/json"
}
body: 
{    
    "firstName": "string",
    "lastName": "string",
    "username": "string",
    "email": "string",
    "password":"string"
}
```
```bash
post: /login
headers: 
{
    "content-type":"application/json"
}
body:
{    
    
    "username": "string",
    "password":"string"
}

response: 
{
    "token": "string",
    "user": {
        "id": integer,
        "firstName": "string",
        "lastName": "string",
        "username": "string",
        "email": "string"
    }
}
```
```bash
get: /me

headers: 
{
    "content-type":"application/json",
    "Authorization": {token}
}

response: 
{
    "id": "integer",
    "firstName": "string",
    "lastName": "string",
    "username": "string",
    "email": "string"
}
```