![alt text](https://github.com/MaxLeandro14/mustache/blob/master/assets/img/sie_print.png)

## Theme wordpress teste
### Para que os dados do formulario seja salvo deve criar esta tabela do banco de dados
Segue abaixo o codigo que deve ser inserido

```
CREATE TABLE wp_formdata(
            id INT(11) NOT NULL auto_increment,
            nome VARCHAR(200) NOT NULL ,
            email VARCHAR(200) NOT NULL ,
            fone VARCHAR(15) NOT NULL,
            nascimento VARCHAR(15) NOT NULL,
            cep VARCHAR(15) NOT NULL,
            endereco VARCHAR(200) NOT NULL ,
            numero VARCHAR(15) NOT NULL,
            bairro VARCHAR(200) NOT NULL,
            cidade VARCHAR(200) NOT NULL default '0',
            estado VARCHAR(50) NOT NULL,
            PRIMARY KEY (id));
 ```
 
 ### Premissas
 - HTML 5
- jQuery / Javascript
- Bootstrap
- Wordpress
- Conteúdo Editável 
- Validar e Salvar Dados do Formulário (salvei no proprio banco de dados, mas pode ser enviado por email)
- Uma chamada de conteúdo via ajax (Utilizei ajax no formulario e busca do Cep)

### Boas práticas de programação
- Utilizei ajax da forma que o wordpress recomenda (usando admin-ajax.php)
- Todos os menus customizados (Menu rodapé e header vindo do Painel)
- Arquivo functions.php para gerenciar os scripts, styles e funçoes


            
