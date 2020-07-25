## Projeto Cadastro de Animais e seus Donos

## Fins trabalho de pós graduação

- Uso acesse o projeto execute `composer install`
- Depois crie um banco de dados no `mysql` com o nome `animals`
- Execute `php artisan migrate`

### Api de criação

```json
# Post para criar usuário
## http://127.0.0.1:8000/api/users

{
    "name": "Miguel Antonio",
    "email": "miguel@gmail.com",
    "password": "mudar123"
}

# Get index para ver registros criados
## http://127.0.0.1:8000/api/users
```


```json
# Post para criar animal
## http://127.0.0.1:8000/api/pets

{
    "name": "Bug",
    "description": "Bug Ney",
    "age": 18,
    "user_id": 1
}

# Get index para ver registros criados
## http://127.0.0.1:8000/api/pets
```
