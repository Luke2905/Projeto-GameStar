--  --

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

create database gamestar;

use gamestar;

create table jogos(
id int not null auto_increment,
nome varchar(70),
genero varchar(80),
classificacao int,
preco decimal (10,2),
url varchar(2083),
primary key (id)
);

create table consoles(
    nome varchar(30),
    marca varchar(20),
    preco decimal (10,2),
    url varchar(2083)
);

alter table jogos add  url varchar(2083);  

insert into jogos values
('GTA IV','Sandbox, Drama, TPS', 18, 150.00, 'https://upload.wikimedia.org/wikipedia/pt/thumb/9/91/Grand_Theft_Auto_IV_capa.png/270px-Grand_Theft_Auto_IV_capa.png'),
('GTA IV - Episodes From Liberty City', 'Sandbox, Ação, TPS', 18, 200.00, 'https://howlongtobeat.com/games/256px-Grand_Theft_Auto_IV_Episodes_From_Liberty_City.jpg'),
('God of War', 'Ação e aventura, Jogo eletrônico de plataforma, Hack and slash', 18, 283.89, 'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_GodofWar_SantaMonicaStudio_S2_1200x1600-fbdf3cbc2980749091d52751ffabb7b7'),
('Minecraft', 'Jogo eletrônico de sobrevivência, Sandbox', 12, 60.00, 'https://upload.wikimedia.org/wikipedia/pt/9/9c/Minecraft_capa.png'),
('FIFA 22', 'Jogo eletrônico de esporte, Jogo eletrônico de simulação, Jogo de simulação', 0, 338.90, 'https://sm.ign.com/ign_br/game/f/fifa-22/fifa-22_83fn.jpg'),
('Battlefield 2042', 'Jogo de tiro em primeira', 18, 340.83, 'https://bdjogos.com.br/capas/10994-battlefield-2042-capa-1.jpg'),
('Cyberpunk 2077', 'RPG eletrônico,aventura,tiro, Jogo eletrônico de luta', 18, 249.50, 'https://upload.wikimedia.org/wikipedia/pt/f/f7/Cyberpunk_2077_capa.png'),
('The Last of Us Part II', 'Ação-aventura', 18, 219.90, 'https://m.media-amazon.com/images/I/61OZeW+pPYL._AC_SX342_.jpg'),
('Red Dead Redemption 2', 'Sandbox, Ação-aventura, Faroeste', 18, 340.83, 'https://lh3.googleusercontent.com/HCUkD69MAHEOj84Yi7Kb5vxHpCePTsmQI4g9vYuVPUo-87cWE6ZZIk0tiyYzaiS9zaAFMTXRNYJaaRczRN-yQYw'),
('Watch Dogs', 'Ação-Aventura, Sandbox, Hacker', 18, 69.90, 'https://upload.wikimedia.org/wikipedia/pt/1/1b/Watch_dogs_cover.jpg'),
('Fortnite', 'Battle royale, Jogo eletrônico de sobrevivência, TPS', 12, 0.0, 'https://cdn1.epicgames.com/salesEvent/salesEvent/18BR_S18_Launcher_EGS_Blade_1200x1600_1200x1600-1a2b312c8f004e0dff3d5ed7491f1152'),
('Far Cry 6', 'FPS, ação e aventura, Jogabilidade não linear', 18, 279.90, 'https://upload.wikimedia.org/wikipedia/pt/d/df/Far_Cry_6_capa.jpg'),
('League of Legends', 'MOBA, Estratégia em tempo real, RPG eletrônico de ação', 14, 0.0, 'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_LeagueofLegends_RiotGames_S2_1200x1600-7fd64f0f7b674900bdd172967865d545'),
('Assassins Creed Valhalla', 'Jogo eletrônico de luta, Jogo eletrônico de aventura', 18, 279.90, 'https://upload.wikimedia.org/wikipedia/pt/e/e9/Assassins_Creed_Valhalla_capa.png'),
('Naruto Shippuden: Ultimate Ninja Storm 4', 'Jogo eletrônico de luta, Jogo eletrônico de ação e aventura, Adventure', 12, 249.99, 'https://image.api.playstation.com/cdn/UP0700/CUSA02412_00/2pfYJIXY2aTnMUe8eSET7YaxkOcUTbfm.png'),
('Genshin Impact', 'RPG eletrônico de ação, Jogo eletrônico de aventura', 13, 0.0, 'https://gmedia.playstation.com/is/image/SIEPDC/genshin-impact-packshot-01-en-18jun21?$native$'),
('Among Us', 'Jogo em grupo Sobrevivência', 12, 20.00, 'https://play-lh.googleusercontent.com/8ddL1kuoNUB5vUvgDVjYY3_6HwQcrg1K2fd_R8soD-e2QYj8fT9cfhfh3G0hnSruLKec'),
('Rocket League', 'Futebol, Carros, Competitivo', 0, 20.00, 'https://image.api.playstation.com/vulcan/ap/rnd/202107/2623/CkukbHYNvR2SvqyABQHVTJUb.png'),
('Mortal Kombat 11', 'jogo eletrônico de luta', 18, 100.00, 'https://upload.wikimedia.org/wikipedia/pt/2/21/Mortal_Kombat_11_capa.jpg'),
('Bloodborne', 'RPG eletrônico de ação, Jogo eletrônico de ação e aventura, Survival horror', 18, 99.50, 'https://upload.wikimedia.org/wikipedia/pt/2/29/Bloodborne_capa.png');