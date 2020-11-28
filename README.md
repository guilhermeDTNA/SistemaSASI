#### Sistema de gerenciamento de cursos preparatórios
#### Sistema utilizado para implementação de mecanismos de segurança, como ###proposto pela disciplina de Segurança e Auditoria de Sistemas (SASI)

Passos colocar o sistema funcionando localmente:


* Instalar o XAMPP (Apache + MariaDB ou Mysql + PHP)
    * A instalação do XAMPP pode ser realizada no link: https://www.apachefriends.org/download.html

* Após a instalação, execute o XAMPP, isto é, ative o servidor Apache e o banco de dados Mysql ou MariaDB
    * No windows: procure pelo aplicativo: XAMPP Control Painel

* Clone o repositório este repositório no local de execução de códigos PHP, disponibilizado pelo XAMPP:
    * No windows: C:\xampp\htdocs

* Utilizando o SGBD instalado, crie um banco de dados para a aplicação. Pode utilizar o painel do phpmyadmin, Mysqlworkbanch, ou pelo bash
    * create database NOME_BASE_DE_DADOS

* Crie as tabelas da base de dados, então acesse a pasta principal e faças os procedimentos:
    * No Windows: C:\xampp\htdocs\SistemaSASI  
    * Extraia o arquivo *BancoAtualizado.zip*
    * Copie os códigos dos arquivos .sql e cole no local de execução de códigos SQL de seu (Phpmyadmin, Msqlworkbanch ...), ou faça a importação dos arquivos.
    * A sequencia para a criação das tabelas é: 1) aluno, 2) professor, 3) diretor, 4) curso, 5) matricula, 6) despesa, 7) routines. (Dica: se for copiar e colar, faça um arquivo de cada vez).

* Altere as conexões com a base de dados nos arquivos do sistema. Acesse os arquivos:
    * login.php e mysql.php (Nos arquivos de conexão, você deve informar os dados para conectar a base de dados que você criou)

* Acesse o endereço *localhost/Sistemasasi*
    * Para fazer login no sistema localmente, existe um usuário teste:
        * Login: admin
        * Senha: admin
