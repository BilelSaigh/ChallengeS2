-- Adminer 4.8.1 PostgreSQL 15.3 (Debian 15.3-1.pgdg110+1) dump

DROP TABLE IF EXISTS "esgi_user";
DROP SEQUENCE IF EXISTS esgi_user_id_seq;
CREATE SEQUENCE esgi_user_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;


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
    CONSTRAINT "esgi_user_pkey" PRIMARY KEY ("id")
) WITH (oids = false);
ALTER TABLE ONLY "public"."esgi_page" ADD CONSTRAINT "esgi_page_user_id_fkey" FOREIGN KEY (user_id) REFERENCES esgi_user(id) NOT DEFERRABLE;

INSERT INTO "esgi_user" ("firstname", "lastname", "email", "pwd", "role", "date_updated", "token", "id", "date_inserted", "status") VALUES
('Estelle                                                         ',	'NKUMBA                                                                                                                  ',	'estelle272001@gmail.com',	'$2y$10$ajK82xnPJrlGa4slbp743.E.tVlkvbt7b4YmjQVeiAC4P7ZMd0aYy',	0,	NULL,	'e8941e4c3c',	5,	NULL,	't'),
('Estelle                                                         ',	'NKUMBA                                                                                                                  ',	'nkumba.estelle@gmail.com',	'$2y$10$n2ZGl3NubqQaMI8vALOQ5esKiFNZD8l3EZeD.IZJ6r87HVWcUxnaW',	0,	NULL,	'd077e9f1a7',	8,	NULL,	't');

-- 2023-06-11 22:59:22.982369+00