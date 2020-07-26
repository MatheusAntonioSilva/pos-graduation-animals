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

# Faça o Login para obter o token de autenticação
## http://127.0.0.1:8000/api/login

{
    "email": "miguel@gmail.com",
    "password": "mudar123"
}


# Get index para ver registros criados
## http://127.0.0.1:8000/api/users
### Informe no Authorization o Bearer token, o token retornado pela aplicação

# Post para criar animal
## http://127.0.0.1:8000/api/pets
### Informe no Authorization o Bearer token, o token retornado pela aplicação

{
    "name": "Bug",
    "description": "Bug Ney",
    "age": 18
}

# Get index para ver registros criados
## http://127.0.0.1:8000/api/pets
```
