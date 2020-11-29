CREATE DATABASE db_perai;
USE db_perai;

CREATE TABLE tb_usuario(
id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_usuario VARCHAR(45) NOT NULL,
senha_usuario VARCHAR(255) NOT NULL,
email_usuario VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE tb_professor(
id_professor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_professor VARCHAR(55) NOT NULL,
url_imagem_professor VARCHAR(255),
id_usuario INT NOT NULL,
CONSTRAINT fk_id_usuario_professor FOREIGN KEY(id_usuario)
REFERENCES tb_usuario(id_usuario)
);

CREATE TABLE tb_monitor (
id_monitor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_monitor VARCHAR(55),
url_imagem_monitor VARCHAR(255),
id_usuario INT NOT NULL,
CONSTRAINT fk_id_usuario_monitor FOREIGN KEY(id_usuario)
REFERENCES tb_usuario(id_usuario)
);

CREATE TABLE tb_aluno(
id_aluno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_aluno VARCHAR(55) NOT NULL,
url_imagem_aluno VARCHAR(255),
id_usuario INT NOT NULL,
CONSTRAINT fk_id_usuario_aluno FOREIGN KEY(id_usuario)
REFERENCES tb_usuario(id_usuario)
);

CREATE TABLE tb_servidor(
id_servidor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_servidor VARCHAR(120) NOT NULL,
url_imagem_servidor VARCHAR(255),
info_servidor VARCHAR(255)
);

CREATE TABLE tb_usuario_servidor(
id_usuario_servidor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
tipo_usuario VARCHAR(1) NOT NULL,
id_usuario INT NOT NULL,
CONSTRAINT fk_id_usuario_servidor FOREIGN KEY(id_usuario)
REFERENCES tb_usuario(id_usuario),
id_servidor INT NOT NULL,
CONSTRAINT fk_id_servidor_usuario FOREIGN KEY(id_servidor)
REFERENCES tb_servidor(id_servidor)
);

CREATE TABLE tb_canal(
id_canal INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_canal VARCHAR(120) NOT NULL,
id_servidor INT NOT NULL,
CONSTRAINT fk_id_servidor_canal FOREIGN KEY(id_servidor)
REFERENCES tb_servidor(id_servidor),
info_canal VARCHAR(255)
);

CREATE TABLE tb_post(
id_post INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_post VARCHAR(120) NOT NULL,
data_post DATETIME NOT NULL,
conteudo_post TEXT NOT NULL,
id_canal INT NOT NULL,
CONSTRAINT fk_id_canal_post FOREIGN KEY(id_canal)
REFERENCES tb_canal(id_canal)
);

CREATE TABLE tb_url_arquivo(
id_url_arquivo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
url_arquivo VARCHAR(255) NOT NULL,
id_post INT NOT NULL,
CONSTRAINT fk_id_post_arquivo FOREIGN KEY(id_post)
REFERENCES tb_post(id_post)
);

CREATE TABLE tb_comentario(
id_comentario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
conteudo_comentario MEDIUMTEXT NOT NULL,
data_comentario DATETIME NOT NULL,
id_usuario INT NOT NULL,
CONSTRAINT fk_id_usuario_comentario FOREIGN KEY(id_usuario)
REFERENCES tb_usuario(id_usuario),
id_post INT NOT NULL,
CONSTRAINT fk_id_post_comentario FOREIGN KEY(id_post)
REFERENCES tb_post(id_post)
);

