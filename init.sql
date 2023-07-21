-- Adminer 4.8.1 PostgreSQL 15.3 (Debian 15.3-1.pgdg110+1) dump

DROP TABLE IF EXISTS "esgi_page";
DROP SEQUENCE IF EXISTS esgi_page_id_seq1;
CREATE SEQUENCE esgi_page_id_seq1 INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."esgi_page" (
                                      "id" integer DEFAULT nextval('esgi_page_id_seq1') NOT NULL,
                                      "content" text,
                                      "user_id" integer NOT NULL,
                                      "updated_at" character varying(255) NOT NULL,
                                      "page_id" integer NOT NULL,
                                      CONSTRAINT "esgi_page_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "esgi_page" ("id", "content", "user_id", "updated_at", "page_id") VALUES
                                                                                  (98,	'<div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content"><h1 class="editor-text h1" data-type="component-text">Connexion</h1>
<div data-type="component-form">

            </div><div class="form-data" style="display: none !important;" data-type="component-form">[{"type":"text","subtype":"email","label":"Email","className":"form-control","name":"text-1689822855047"},{"type":"text","subtype":"password","label":"Password","className":"form-control","name":"text-1689822855593"},{"type":"button","label":"Connexion","subtype":"button","className":"btn btn-primary","name":"button-1689822887127","style":"primary"}]</div><form class="form-content" data-type="component-form"><div class="fb-text form-group field-text-1689822855047"><label for="text-1689822855047" class="fb-text-label">Email</label><input type="email" class="form-control" name="text-1689822855047" id="text-1689822855047"></div><div class="fb-text form-group field-text-1689822855593"><label for="text-1689822855593" class="fb-text-label">Password</label><input type="password" class="form-control" name="text-1689822855593" id="text-1689822855593"></div><div class="fb-button form-group field-button-1689822887127"><button type="button" class="btn btn-primary" name="button-1689822887127" style="primary" id="button-1689822887127">Connexion</button></div></form></div>
    </div>',	5,	'20-07-2023-03-15-44',	4),
                                                                                  (99,	'<div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content"><h1 class="editor-text h1" data-type="component-text">Connexion</h1>
<form class="form-content" data-type="component-form"><div class="fb-text form-group field-text-1689822855047"><label for="text-1689822855047" class="fb-text-label">Email</label><input type="email" class="form-control" name="text-1689822855047" id="text-1689822855047"></div><div class="fb-text form-group field-text-1689822855593"><label for="text-1689822855593" class="fb-text-label">Password</label><input type="password" class="form-control" name="text-1689822855593" id="text-1689822855593"></div><div class="fb-button form-group field-button-1689822887127"><button type="button" class="btn btn-primary" name="button-1689822887127" style="primary" id="button-1689822887127">Connexion</button></div></form><div class="form-data" style="display: none !important;" data-type="component-form"></div></div>
    </div><div class="row">
            <div class="col-sm-12 ui-resizable" data-type="container-content"><div data-type="component-googlemap">
                <div class="googlemap-wrapper">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14897.682811563638!2d105.82315895!3d21.0158462!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1456466192755"></iframe>
        </div>
    </div>
            </div></div>
        </div>',	5,	'20-07-2023-03-16-45',	4),
                                                                                  (100,	'<div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content"><h1 class="editor-text h1" data-type="component-text">Connexion</h1>
<div data-type="component-form">

            </div><div class="form-data" style="display: none !important;" data-type="component-form"></div><form class="form-content" data-type="component-form"><p class="text-muted lead text-center"><br>[No form content]<br><br></p></form><div class="form-data" style="display: none !important;" data-type="component-form">[{"type":"text","subtype":"email","label":"Email","className":"form-control","name":"text-1689822855047"},{"type":"text","subtype":"password","label":"Password","className":"form-control","name":"text-1689822855593"},{"type":"button","label":"Connexion","subtype":"button","className":"btn btn-primary","name":"button-1689822887127","style":"primary"}]</div><form class="form-content" data-type="component-form"><p class="text-muted lead text-center"><br>[No form content]<br><br></p></form><form class="form-content" data-type="component-form"><div class="fb-text form-group field-text-1689822855047"><label for="text-1689822855047" class="fb-text-label">Email</label><input type="email" class="form-control" name="text-1689822855047" id="text-1689822855047"></div><div class="fb-text form-group field-text-1689822855593"><label for="text-1689822855593" class="fb-text-label">Password</label><input type="password" class="form-control" name="text-1689822855593" id="text-1689822855593"></div><div class="fb-button form-group field-button-1689822887127"><button type="button" class="btn btn-primary" name="button-1689822887127" style="primary" id="button-1689822887127">Connexion</button></div></form><div class="form-data" style="display: none !important;" data-type="component-form"></div></div>
    </div>',	5,	'20-07-2023-03-17-00',	4),
                                                                                  (101,	'<div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content"><h1 class="editor-text h1" data-type="component-text">Connexion</h1>
<form class="form-content" data-type="component-form"><div class="fb-text form-group field-text-1689822855047"><label for="text-1689822855047" class="fb-text-label">Email</label><input type="email" class="form-control" name="text-1689822855047" id="text-1689822855047"></div><div class="fb-text form-group field-text-1689822855593"><label for="text-1689822855593" class="fb-text-label">Password</label><input type="password" class="form-control" name="text-1689822855593" id="text-1689822855593"></div><div class="fb-button form-group field-button-1689822887127"><button type="button" class="btn btn-primary" name="button-1689822887127" style="primary" id="button-1689822887127">Connexion</button></div></form><div class="form-data" style="display: none !important;" data-type="component-form"></div></div>
    </div>',	5,	'20-07-2023-03-17-28',	4),
                                                                                  (102,	'<div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content"><h1 class="editor-text h1" data-type="component-text">Connexion</h1>
<form class="form-content" data-type="component-form"><div class="fb-text form-group field-text-1689822855047"><label for="text-1689822855047" class="fb-text-label">Email</label><input type="email" class="form-control" name="text-1689822855047" id="text-1689822855047"></div><div class="fb-text form-group field-text-1689822855593"><label for="text-1689822855593" class="fb-text-label">Password</label><input type="password" class="form-control" name="text-1689822855593" id="text-1689822855593"></div><div class="fb-button form-group field-button-1689822887127"><button type="button" class="btn btn-primary" name="button-1689822887127" style="primary" id="button-1689822887127">Connexion</button></div></form><div class="form-data" style="display: none !important;" data-type="component-form"></div></div>
    </div><div class="row">
            <div class="col-sm-12 ui-resizable" data-type="container-content"><div data-type="component-googlemap">
                <div class="googlemap-wrapper">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14897.682811563638!2d105.82315895!3d21.0158462!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1456466192755"></iframe>
        </div>
    </div>
            </div></div>
        </div>',	5,	'20-07-2023-03-17-44',	4),
                                                                                  (103,	'<div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content"><h1 class="editor-text h1" data-type="component-text">Connexion</h1>
<div data-type="component-form">

            </div><div class="form-data" style="display: none !important;" data-type="component-form"></div><form class="form-content" data-type="component-form"><p class="text-muted lead text-center"><br>[No form content]<br><br></p></form><div class="form-data" style="display: none !important;" data-type="component-form"></div><form class="form-content" data-type="component-form"><p class="text-muted lead text-center"><br>[No form content]<br><br></p></form><form class="form-content" data-type="component-form"><p class="text-muted lead text-center"><br>[No form content]<br><br></p></form><div class="form-data" style="display: none !important;" data-type="component-form"></div><div class="form-data" style="display: none !important;" data-type="component-form">[{"type":"text","subtype":"email","label":"Email","className":"form-control","name":"text-1689822855047"},{"type":"text","subtype":"password","label":"Password","className":"form-control","name":"text-1689822855593"},{"type":"button","label":"Connexion","subtype":"button","className":"btn btn-primary","name":"button-1689822887127","style":"primary"}]</div><form class="form-content" data-type="component-form"><p class="text-muted lead text-center"><br>[No form content]<br><br></p></form><form class="form-content" data-type="component-form"><p class="text-muted lead text-center"><br>[No form content]<br><br></p></form><div class="form-data" style="display: none !important;" data-type="component-form"></div><form class="form-content" data-type="component-form"><div class="fb-text form-group field-text-1689822855047"><label for="text-1689822855047" class="fb-text-label">Email</label><input type="email" class="form-control" name="text-1689822855047" id="text-1689822855047"></div><div class="fb-text form-group field-text-1689822855593"><label for="text-1689822855593" class="fb-text-label">Password</label><input type="password" class="form-control" name="text-1689822855593" id="text-1689822855593"></div><div class="fb-button form-group field-button-1689822887127"><button type="button" class="btn btn-primary" name="button-1689822887127" style="primary" id="button-1689822887127">Connexion</button></div></form><div class="form-data" style="display: none !important;" data-type="component-form"></div><div class="form-data" style="display: none !important;" data-type="component-form"></div><form class="form-content" data-type="component-form"><p class="text-muted lead text-center"><br>[No form content]<br><br></p></form></div>
    </div>',	5,	'20-07-2023-04-06-26',	4),
                                                                                  (104,	'<div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content"><h1 class="editor-text h1" data-type="component-text">Connexion</h1>
<form class="form-content" data-type="component-form"><div class="fb-text form-group field-text-1689822855047"><label for="text-1689822855047" class="fb-text-label">Email</label><input type="email" class="form-control" name="text-1689822855047" id="text-1689822855047"></div><div class="fb-text form-group field-text-1689822855593"><label for="text-1689822855593" class="fb-text-label">Password</label><input type="password" class="form-control" name="text-1689822855593" id="text-1689822855593"></div><div class="fb-button form-group field-button-1689822887127"><button type="button" class="btn btn-primary" name="button-1689822887127" style="primary" id="button-1689822887127">Connexion</button></div></form><div class="form-data" style="display: none !important;" data-type="component-form"></div><div class="form-data" style="display: none !important;" data-type="component-form"></div><form class="form-content" data-type="component-form"><p class="text-muted lead text-center"><br>[No form content]<br><br></p></form></div>
    </div>',	5,	'20-07-2023-04-06-50',	4),
                                                                                  (105,	'<div class="row">
        <div class="col-sm-12 ui-resizable" data-type="container-content"><h1 class="editor-text h1" data-type="component-text">Connexion</h1>
<form class="form-content" data-type="component-form"><div class="fb-text form-group field-text-1689822855047"><label for="text-1689822855047" class="fb-text-label">Email</label><input type="email" class="form-control" name="text-1689822855047" id="text-1689822855047"></div><div class="fb-text form-group field-text-1689822855593"><label for="text-1689822855593" class="fb-text-label">Password</label><input type="password" class="form-control" name="text-1689822855593" id="text-1689822855593"></div><div class="fb-button form-group field-button-1689822887127"><button type="button" class="btn btn-primary" name="button-1689822887127" style="primary" id="button-1689822887127">Connexion</button></div></form><div class="form-data" style="display: none !important;" data-type="component-form"></div></div>
    </div>',	5,	'20-07-2023-04-10-24',	4);

DROP TABLE IF EXISTS "esgi_pages";
DROP SEQUENCE IF EXISTS esgi_pages_id_seq;
CREATE SEQUENCE esgi_pages_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."esgi_pages" (
                                       "id" integer DEFAULT nextval('esgi_pages_id_seq') NOT NULL,
                                       "title" character(150) DEFAULT 'New Website' NOT NULL,
                                       "status" boolean DEFAULT false NOT NULL,
                                       "updated_at" timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
                                       "description" character varying(150) DEFAULT 'Ceci est ma super page',
                                       "slug" text,
                                       "menu" smallint DEFAULT '0',
                                       CONSTRAINT "esgi_pages_pkey" PRIMARY KEY ("id"),
                                       CONSTRAINT "esgi_pages_title" UNIQUE ("title")
) WITH (oids = false);

COMMENT ON COLUMN "public"."esgi_pages"."status" IS '{0=> brouillon, 1 => publier}';

INSERT INTO "esgi_pages" ("id", "title", "status", "updated_at", "description", "slug", "menu") VALUES
                                                                                                    (5,	'portfolio                                                                                                                                             ',	'f',	'2023-07-19 08:49:13',	'Ceci est ma super page',	'portfolio',	0),
                                                                                                    (4,	'connexion                                                                                                                                             ',	't',	'2023-07-20 04:21:07',	'Ceci est ma super page',	'connexion',	1);

DROP TABLE IF EXISTS "esgi_setting";
DROP SEQUENCE IF EXISTS esgi_font_id_seq;
CREATE SEQUENCE esgi_font_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."esgi_setting" (
                                         "id" integer DEFAULT nextval('esgi_font_id_seq') NOT NULL,
                                         "polices" text DEFAULT 'system-ui,Roboto,"Helvetica Neue","Liberation Sans",Arial,sans-serif' NOT NULL,
                                         "text_color" character(10) DEFAULT 'black' NOT NULL,
                                         "text_size" character(15) DEFAULT '12' NOT NULL,
                                         "btn_color" character(10) DEFAULT '#7239ea' NOT NULL,
                                         "website_name" character varying(255) NOT NULL,
                                         CONSTRAINT "esgi_font_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "esgi_setting" ("id", "polices", "text_color", "text_size", "btn_color", "website_name") VALUES
    (1,	'Times New Roman, serif',	'#000000   ',	'18px           ',	'#000000   ',	'PoppaForU');

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
                                      "token" character(10),
                                      "id" integer DEFAULT nextval('esgi_user_id_seq') NOT NULL,
                                      "date_inserted" timestamp DEFAULT now(),
                                      "status" boolean DEFAULT false NOT NULL,
                                      "logo" text DEFAULT '../Views/Dash/theme/dist/assets/media/avatars/blank.png',
                                      CONSTRAINT "esgi_user_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

COMMENT ON COLUMN "public"."esgi_user"."role" IS '[0=>admin,1=>editor,2=>modo,3=>user]';

INSERT INTO "esgi_user" ("firstname", "lastname", "email", "pwd", "role", "date_updated", "token", "id", "date_inserted", "status", "logo") VALUES
                                                                                                                                                ('Estelle                                                         ',	'NKUMBA                                                                                                                  ',	'estelle272001@gmail.com',	'Azertyu1',	3,	'2023-07-19 21:55:02',	'          ',	3,	'2023-07-19 21:55:02',	'f',	'../Views/Dash/theme/dist/assets/media/avatars/blank.png'),
                                                                                                                                                ('Erica                                                           ',	'NKUMBA                                                                                                                  ',	'estelle272361@gmail.com',	'$2y$10$cAmShWJrSP8TM62wIJYwR.2EpFhtCuFuLGIKOT6luaPnQmPmpRHfO',	1,	NULL,	'          ',	5,	NULL,	'f',	'../Views/Dash/theme/dist/assets/media/avatars/blank.png');

ALTER TABLE ONLY "public"."esgi_page" ADD CONSTRAINT "esgi_page_page_id_fkey" FOREIGN KEY (page_id) REFERENCES esgi_pages(id) ON DELETE CASCADE NOT DEFERRABLE;
ALTER TABLE ONLY "public"."esgi_page" ADD CONSTRAINT "esgi_page_user_id_fkey" FOREIGN KEY (user_id) REFERENCES esgi_user(id) ON DELETE CASCADE NOT DEFERRABLE;

-- 2023-07-20 04:40:45.73223+00