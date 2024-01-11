CREATE DATABASE Brasileirao2024;

USE Brasileirao2024;



CREATE TABLE times (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255),
    gols INT
);



INSERT INTO times (descricao, gols) VALUES ('Athletico-PR', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Atlético-MG', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Atlético-GO', FLOOR(RAND() * 51));
-- Adicione os outros times aqui, seguindo o mesmo padrão...
INSERT INTO times (descricao, gols) VALUES ('Vasco', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Botafogo', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Flamengo', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Fluminense', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Palmeiras', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Corinthians', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Criciuma', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Bahia', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Juventude', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Cruzeiro', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Internacional', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Gremio', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Cuiaba', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Bragantino', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Vitória', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('São Paulo', FLOOR(RAND() * 51));
INSERT INTO times (descricao, gols) VALUES ('Fortaleza', FLOOR(RAND() * 51));
