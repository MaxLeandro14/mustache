![alt text](https://github.com/MaxLeandro14/mustache/blob/master/assets/img/sie_print.png)

## Theme wordpress teste
# Para que os dados do formulario seja salvo deve criar esta tabela do banco de dados
, segue abaixo o codigo que deve ser inserido

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
            
