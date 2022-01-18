Versões 8+ do MySQL usam um novo método de autenticação de usuário. Métodos que não são facilmente compatíveis com PHP <= 7.4.0.


#### Opção 1 (mais facil, se n tiver instalado mysql ainda)
---
Fazer downgrade da versão 8 para a 5.4.x do MySQL


#### Opção 2 (mais fácil, se mysql ja estiver instalado)
---
acessar o mysql com o usuário root e rodar o seguinte comando:
```
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'rootroot';
```
esse comando irá alterar o mecanismo padrão de login do usuário root.

\* caso queira utilizar outro usuário ao invés do root, deve criar o usuário primeiro e depois alterar o método de login
```
CREATE USER 'NOVO_USER'@'localhost' IDENTIFIED WITH mysql_native_password BY 'NOVA_PW';
GRANT ALL PRIVILEGES ON NOVO_USER.* TO 'NOVO_USER'@'localhost';
ALTER USER 'NOVO_USER'@'localhost' IDENTIFIED WITH mysql_native_password BY 'NOVA_PW';
```