#### Sistema de gerenciamento de cursos preparatórios
#### Sistema utilizado para implementação de mecanismos de segurança, como ###proposto pela disciplina de Segurança e Auditoria de Sistemas (SASI)

Passos colocar o sistema funcionando localmente:


* Instalar o XAMPP (para Windows) ou LAMP (Linux) (Apache + MariaDB ou Mysql + PHP)
    * A instalação do XAMPP pode ser realizada no link: https://www.apachefriends.org/download.html
    * Já para o Lamp: https://www.edivaldobrito.com.br/instale-lamp-no-linux-e-tenha-um-servidor-web-em-seu-pc/

* Após a instalação, execute o XAMPP, isto é, ative o servidor Apache e o banco de dados Mysql ou MariaDB
    * No Windows: procure pelo aplicativo: XAMPP Control Painel
    * No Linux: execute o LAMPP com o comando: sudo /etc/init.d/apache2 start

* Clone este repositório no local de execução de códigos PHP, disponibilizado pelo XAMPP/LAMP:
    * Diretório raiz no Windows: C:\xampp\htdocs
    * Diretório raiz no Linux: /var/www/html

* Utilizando o SGBD instalado, crie um banco de dados para a aplicação. Pode utilizar o painel do phpmyadmin, Mysqlworkbanch, ou pelo bash
    * create database NOME_BASE_DE_DADOS

* Crie as tabelas da base de dados, então acesse a pasta principal e faças os procedimentos:
    * Dentro do diretório raiz do XAMPP/LAMP, extraia o arquivo *BancoAtualizado.zip*
    * Copie os códigos dos arquivos .sql e cole no local de execução de códigos SQL de seu (Phpmyadmin, Msqlworkbanch ...), ou faça a importação dos arquivos.
    * A sequência para a criação das tabelas é: 1) aluno, 2) professor, 3) diretor, 4) curso, 5) matricula, 6) despesa, 7) routines. (Dica: se for copiar e colar, faça um arquivo de cada vez).

* Altere as conexões com a base de dados nos arquivos do sistema. Acesse os arquivos:
    * login.php e mysql.php (Nos arquivos de conexão, você deve informar os dados para conectar a base de dados que você criou)

* Para adicionar o HTTPS nas páginas, consulte o tutorial disponível na pasta arquivos

* Acesse o endereço *localhost/SistemaSASI*
    * Para fazer login no sistema localmente, existe um usuário teste:
        * Login: admin
        * Senha: admin
