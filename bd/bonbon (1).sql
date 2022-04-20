#### Serveur mySQL 
## Hôte: localhost
## Nom d'usager: root

#### BD pour Bonbon.com
## Nom de la base de donnée: bonbon

CREATE DATABASE bonbon
	DEFAULT CHARACTER SET utf8;
USE bonbon;


#drop table produit;
create table produit
(
	idProduit smallint NOT NULL auto_increment,
	nomProduit varchar(100) NOT NULL,
	fournisseur varchar(50),
	quantite smallint,
	format varchar(25),
	prix float,
	description varchar(100),
	PRIMARY KEY (idProduit)
);

insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Sucette', 'Mondoux' ,  150, '1 kg', 12.99, 'Chaque sucon est enveloppé individuellement.');
insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Caramel', 'Kraft' , 375, '1 kg', 15.98, 'Chaque caramel est enveloppé individuellement.');
insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Réglisse', 'LudikCandy', 64, '1 kg', 12.99, 'Chaque sucon est enveloppé individuellement.');
insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Guimauve', 'Oscar' , 2000, '1 kg', 15.98, 'Chaque caramel est enveloppé individuellement.');
insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Chocolat', 'Cadbury' , 555, '1 kg', 12.99, 'Chaque sucon est enveloppé individuellement.');
insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Canne', 'Bonbons ACME' , 1250, '1 kg', 15.98, 'Chaque caramel est enveloppé individuellement.');
insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Smarties', 'Mondoux' , 99, '1 kg', 12.99, 'Chaque sucon est enveloppé individuellement.');
insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Jujube', 'LudikCandy' , 495, '1 kg', 15.98, 'Chaque caramel est enveloppé individuellement.');
insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Collier', 'Distribution LPD' , 150, '1 kg', 12.99, 'Chaque sucon est enveloppé individuellement.');
insert into produit (nomProduit, fournisseur, quantite, format, prix, description) values ('Tube de Poudre', 'Bensus' , 632, '1 kg', 15.98, 'Chaque caramel est enveloppé individuellement.');


# drop table panier;
CREATE TABLE panier
(	idPanier varchar(20) NOT NULL,
	noProduit smallint NOT NULL,
	quantite smallint NOT NULL,
	datePanier datetime NOT NULL,
	PRIMARY KEY (idPanier, noProduit)
);