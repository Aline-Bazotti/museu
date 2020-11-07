CREATE TABLE funcionarios (
   id serial primary key,
   nome varchar(100) not null,
   nivel_acesso int not null,
   email varchar(70) unique not null,
   senha varchar(255) not null,
   criado_em TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE visitantes (
   id serial primary key,
   nome varchar(100) not null,
   datanasc date not null,
   email varchar(70) not null,
   cpf varchar(15),
   sexo char(1),
   visita_em TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE empresas (
   id serial primary key,
   razao_social varchar(255) not null,
   nome_fantasia varchar(255) not null,
   cnpj varchar(18) not null,
   logo varchar(255),
   criada_em TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categorias (
   id serial primary key,
   nome varchar(255) not null
);

CREATE TABLE artistas (
   id serial primary key,
   nome varchar(255) not null,
   dados_biograficos varchar(255)
);

CREATE TABLE obras (
   id serial primary key,
   titulo varchar(255) not null,
   id_artista int,
   data_obra date,
   tecnica varchar(100),
   dimensoes varchar(50),
   aquisicao varchar(50),
   id_categoria int,
   status char(1),
   CONSTRAINT fk_artista FOREIGN KEY(id_artista) REFERENCES artistas(id),
   CONSTRAINT fk_categoria FOREIGN KEY(id_categoria) REFERENCES categorias(id)
);

CREATE TABLE acervos (
   id serial primary key,
   nome_fantasia varchar(255) not null,
   id_obra int not null,
   CONSTRAINT fk_obra_ac FOREIGN KEY(id_obra) REFERENCES obras(id)
);

CREATE TABLE exibicoes (
   id serial primary key,
   corredor varchar(20),
   andar int,
   id_obra int not null,
   CONSTRAINT fk_obra_exb FOREIGN KEY(id_obra) REFERENCES obras(id)
);

CREATE TABLE arquivos (
   id serial primary key,
   caminho_arquivo varchar(255),
   id_obra int not null,
   CONSTRAINT fk_obra_arq FOREIGN KEY(id_obra) REFERENCES obras(id)
);