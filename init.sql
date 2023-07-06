-- Adminer 4.8.1 PostgreSQL 15.3 (Debian 15.3-1.pgdg110+1) dump

DROP TABLE IF EXISTS "esgi_page";
DROP SEQUENCE IF EXISTS esgi_page_id_seq;
CREATE SEQUENCE esgi_page_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."esgi_page" (
                                      "id" integer DEFAULT nextval('esgi_page_id_seq') NOT NULL,
                                      "element" character(50) NOT NULL,
                                      "x" numeric NOT NULL,
                                      "y" numeric NOT NULL,
                                      "user_id" integer NOT NULL,
                                      CONSTRAINT "esgi_page_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "esgi_page" ("id", "element", "x", "y", "user_id") VALUES
                                                                   (1,	'form                                              ',	139.31817626953,	80.894882202148,	1),
                                                                   (2,	'button                                            ',	24.900568008423,	185.71022033691,	1),
                                                                   (3,	'image                                             ',	24.900568008423,	70.113632202148,	1),
                                                                   (4,	'row                                               ',	137.74147033691,	143.5085144043,	1),
                                                                   (5,	'column                                            ',	24.900568008423,	243.5085144043,	1),
                                                                   (6,	'form                                              ',	139.31817626953,	80.894882202148,	1),
                                                                   (7,	'button                                            ',	24.900568008423,	185.71022033691,	1),
                                                                   (8,	'image                                             ',	24.900568008423,	70.113632202148,	1),
                                                                   (9,	'row                                               ',	137.74147033691,	143.5085144043,	1),
                                                                   (10,	'column                                            ',	24.900568008423,	243.5085144043,	1),
                                                                   (11,	'form                                              ',	139.31817626953,	80.894882202148,	1),
                                                                   (12,	'form                                              ',	139.31817626953,	80.894882202148,	1),
                                                                   (13,	'button                                            ',	24.900568008423,	185.71022033691,	1),
                                                                   (14,	'button                                            ',	24.900568008423,	185.71022033691,	1),
                                                                   (15,	'image                                             ',	24.900568008423,	70.113632202148,	1),
                                                                   (16,	'image                                             ',	24.900568008423,	70.113632202148,	1),
                                                                   (17,	'row                                               ',	137.74147033691,	143.5085144043,	1),
                                                                   (18,	'row                                               ',	137.74147033691,	143.5085144043,	1),
                                                                   (19,	'column                                            ',	24.900568008423,	243.5085144043,	1),
                                                                   (20,	'column                                            ',	24.900568008423,	243.5085144043,	1);

DROP TABLE IF EXISTS "esgi_tpl";
DROP SEQUENCE IF EXISTS esgi_tpl_id_seq;
CREATE SEQUENCE esgi_tpl_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."esgi_tpl" (
                                     "id" integer DEFAULT nextval('esgi_tpl_id_seq') NOT NULL,
                                     "user_id" integer NOT NULL,
                                     "name" character(100) NOT NULL,
                                     CONSTRAINT "esgi_tpl_pkey" PRIMARY KEY ("id")
) WITH (oids = false);


DROP TABLE IF EXISTS "esgi_user";
DROP SEQUENCE IF EXISTS esgi_user_id_seq;
CREATE SEQUENCE esgi_user_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."esgi_user" (
                                      "firstname" character(64) NOT NULL,
                                      "lastname" character(120) NOT NULL,
                                      "email" character varying(320) NOT NULL,
                                      "pwd" character varying(128) NOT NULL,
                                      "role" smallint NOT NULL,
                                      "date_updated" timestamp DEFAULT now(),
                                      "token" character(10) NOT NULL,
                                      "id" integer DEFAULT nextval('esgi_user_id_seq') NOT NULL,
                                      "date_inserted" timestamp DEFAULT now(),
                                      "status" boolean DEFAULT false NOT NULL,
                                      "logo" text,
                                      CONSTRAINT "esgi_user_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "esgi_user" ("firstname", "lastname", "email", "pwd", "role", "date_updated", "token", "id", "date_inserted", "status", "logo") VALUES
                                                                                                                                                ('Estelle                                                         ',	'NKUMBA                                                                                                                  ',	'nkumba.estelle@gmail.com',	'$2y$10$n2ZGl3NubqQaMI8vALOQ5esKiFNZD8l3EZeD.IZJ6r87HVWcUxnaW',	0,	NULL,	'd077e9f1a7',	8,	NULL,	't',	NULL),
                                                                                                                                                ('test                                                            ',	'popo                                                                                                                    ',	'popo@gmail.com',	'test1236@',	1,	'2023-06-23 13:23:51.672034',	'          ',	1,	'2023-06-23 13:23:51.672034',	't',	NULL),
                                                                                                                                                ('Estelle                                                         ',	'NKUMBA                                                                                                                  ',	'estelle272001@gmail.com',	'$2y$10$QeQAj7I38fC1i1cBzOhf4uYrMROZsn7.GGQt7F6CCt4nHyHcZv9s6',	0,	NULL,	'7654d0c09e',	5,	NULL,	't',	NULL);

ALTER TABLE ONLY "public"."esgi_page" ADD CONSTRAINT "esgi_page_user_id_fkey" FOREIGN KEY (user_id) REFERENCES esgi_user(id) NOT DEFERRABLE;

-- 2023-07-06 22:05:04.716098+00