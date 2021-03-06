toc.dat                                                                                             0000600 0004000 0002000 00000007631 14054261353 0014451 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        PGDMP       2    &                y            postgres    13.2    13.2     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false         ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false         ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false         ?           1262    13442    postgres    DATABASE     g   CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE postgres;
                postgres    false         ?           0    0    DATABASE postgres    COMMENT     N   COMMENT ON DATABASE postgres IS 'default administrative connection database';
                   postgres    false    3065         	            2615    25085    proyecto    SCHEMA        CREATE SCHEMA proyecto;
    DROP SCHEMA proyecto;
                postgres    false         ?            1259    25094    juegos    TABLE     ?   CREATE TABLE proyecto.juegos (
    jueg_id integer NOT NULL,
    cat_juego character varying(40),
    plat_juego character varying(50),
    nomb_juego character varying(50),
    precio character varying(50),
    foto_juego character varying(100)
);
    DROP TABLE proyecto.juegos;
       proyecto         heap    postgres    false    9         ?            1259    25092    juegos_jueg_id_seq    SEQUENCE     ?   CREATE SEQUENCE proyecto.juegos_jueg_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE proyecto.juegos_jueg_id_seq;
       proyecto          postgres    false    9    228         ?           0    0    juegos_jueg_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE proyecto.juegos_jueg_id_seq OWNED BY proyecto.juegos.jueg_id;
          proyecto          postgres    false    227         ?            1259    25086    registro_usuario    TABLE       CREATE TABLE proyecto.registro_usuario (
    nickname character varying(50) NOT NULL,
    nombre character varying(100),
    apellido character varying(100),
    direccion character varying(50),
    correo character varying(120),
    CONSTRAINT nn_correo CHECK ((correo IS NOT NULL))
);
 &   DROP TABLE proyecto.registro_usuario;
       proyecto         heap    postgres    false    9         l           2604    25097    juegos jueg_id    DEFAULT     t   ALTER TABLE ONLY proyecto.juegos ALTER COLUMN jueg_id SET DEFAULT nextval('proyecto.juegos_jueg_id_seq'::regclass);
 ?   ALTER TABLE proyecto.juegos ALTER COLUMN jueg_id DROP DEFAULT;
       proyecto          postgres    false    228    227    228         ?          0    25094    juegos 
   TABLE DATA           b   COPY proyecto.juegos (jueg_id, cat_juego, plat_juego, nomb_juego, precio, foto_juego) FROM stdin;
    proyecto          postgres    false    228       3059.dat ?          0    25086    registro_usuario 
   TABLE DATA           [   COPY proyecto.registro_usuario (nickname, nombre, apellido, direccion, correo) FROM stdin;
    proyecto          postgres    false    226       3057.dat ?           0    0    juegos_jueg_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('proyecto.juegos_jueg_id_seq', 33, true);
          proyecto          postgres    false    227         n           2606    25091    registro_usuario pk_nickname 
   CONSTRAINT     b   ALTER TABLE ONLY proyecto.registro_usuario
    ADD CONSTRAINT pk_nickname PRIMARY KEY (nickname);
 H   ALTER TABLE ONLY proyecto.registro_usuario DROP CONSTRAINT pk_nickname;
       proyecto            postgres    false    226                                                                                                               3059.dat                                                                                            0000600 0004000 0002000 00000000530 14054261353 0014253 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        11	Accion	XBOX SERIES X	star wars battlefront 2	33333333	pro_affd7b0c7aff030f9959c8284c63f123.jpg
32	Accion	XBOX ONE	Age Of Empires 3	200000	pro_1e9d34d14a670679460d1a05fc020b43.jpg
31	Accion	PLAYSTATION 5	red dead redeption	230000	pro_105adab3c82568c5eb0acbd5c0c0b4c4.jpg
33	Arcade	PC	apex	120000	pro_2320361c2230c08aa440df9b15aeddc5.jpg
\.


                                                                                                                                                                        3057.dat                                                                                            0000600 0004000 0002000 00000000061 14054261353 0014250 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        franco	francisco	quintero	cr11	fj@gmail.com
\.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                               restore.sql                                                                                         0000600 0004000 0002000 00000007665 14054261353 0015405 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        --
-- NOTE:
--
-- File paths need to be edited. Search for $$PATH$$ and
-- replace it with the path to the directory containing
-- the extracted data files.
--
--
-- PostgreSQL database dump
--

-- Dumped from database version 13.2
-- Dumped by pg_dump version 13.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE postgres;
--
-- Name: postgres; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_Colombia.1252';


ALTER DATABASE postgres OWNER TO postgres;

\connect postgres

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: DATABASE postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- Name: proyecto; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA proyecto;


ALTER SCHEMA proyecto OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: juegos; Type: TABLE; Schema: proyecto; Owner: postgres
--

CREATE TABLE proyecto.juegos (
    jueg_id integer NOT NULL,
    cat_juego character varying(40),
    plat_juego character varying(50),
    nomb_juego character varying(50),
    precio character varying(50),
    foto_juego character varying(100)
);


ALTER TABLE proyecto.juegos OWNER TO postgres;

--
-- Name: juegos_jueg_id_seq; Type: SEQUENCE; Schema: proyecto; Owner: postgres
--

CREATE SEQUENCE proyecto.juegos_jueg_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE proyecto.juegos_jueg_id_seq OWNER TO postgres;

--
-- Name: juegos_jueg_id_seq; Type: SEQUENCE OWNED BY; Schema: proyecto; Owner: postgres
--

ALTER SEQUENCE proyecto.juegos_jueg_id_seq OWNED BY proyecto.juegos.jueg_id;


--
-- Name: registro_usuario; Type: TABLE; Schema: proyecto; Owner: postgres
--

CREATE TABLE proyecto.registro_usuario (
    nickname character varying(50) NOT NULL,
    nombre character varying(100),
    apellido character varying(100),
    direccion character varying(50),
    correo character varying(120),
    CONSTRAINT nn_correo CHECK ((correo IS NOT NULL))
);


ALTER TABLE proyecto.registro_usuario OWNER TO postgres;

--
-- Name: juegos jueg_id; Type: DEFAULT; Schema: proyecto; Owner: postgres
--

ALTER TABLE ONLY proyecto.juegos ALTER COLUMN jueg_id SET DEFAULT nextval('proyecto.juegos_jueg_id_seq'::regclass);


--
-- Data for Name: juegos; Type: TABLE DATA; Schema: proyecto; Owner: postgres
--

COPY proyecto.juegos (jueg_id, cat_juego, plat_juego, nomb_juego, precio, foto_juego) FROM stdin;
\.
COPY proyecto.juegos (jueg_id, cat_juego, plat_juego, nomb_juego, precio, foto_juego) FROM '$$PATH$$/3059.dat';

--
-- Data for Name: registro_usuario; Type: TABLE DATA; Schema: proyecto; Owner: postgres
--

COPY proyecto.registro_usuario (nickname, nombre, apellido, direccion, correo) FROM stdin;
\.
COPY proyecto.registro_usuario (nickname, nombre, apellido, direccion, correo) FROM '$$PATH$$/3057.dat';

--
-- Name: juegos_jueg_id_seq; Type: SEQUENCE SET; Schema: proyecto; Owner: postgres
--

SELECT pg_catalog.setval('proyecto.juegos_jueg_id_seq', 33, true);


--
-- Name: registro_usuario pk_nickname; Type: CONSTRAINT; Schema: proyecto; Owner: postgres
--

ALTER TABLE ONLY proyecto.registro_usuario
    ADD CONSTRAINT pk_nickname PRIMARY KEY (nickname);


--
-- PostgreSQL database dump complete
--

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           