--
-- PostgreSQL database dump
--

-- Dumped from database version 12.1
-- Dumped by pg_dump version 12.1

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: tb_category; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tb_category (
    id_category integer NOT NULL,
    name character varying(250) NOT NULL
);


ALTER TABLE public.tb_category OWNER TO postgres;

--
-- Name: tb_category_id_category_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tb_category_id_category_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tb_category_id_category_seq OWNER TO postgres;

--
-- Name: tb_category_id_category_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tb_category_id_category_seq OWNED BY public.tb_category.id_category;


--
-- Name: tb_project; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tb_project (
    id_project integer NOT NULL,
    created_at date,
    name character varying(255),
    analyst character varying(255),
    category integer
);


ALTER TABLE public.tb_project OWNER TO postgres;

--
-- Name: tb_project_id_project_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tb_project_id_project_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tb_project_id_project_seq OWNER TO postgres;

--
-- Name: tb_project_id_project_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tb_project_id_project_seq OWNED BY public.tb_project.id_project;


--
-- Name: user_role; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.user_role (
    id_role integer NOT NULL,
    role character varying(255) NOT NULL
);


ALTER TABLE public.user_role OWNER TO postgres;

--
-- Name: tb_role_id_role_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tb_role_id_role_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tb_role_id_role_seq OWNER TO postgres;

--
-- Name: tb_role_id_role_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tb_role_id_role_seq OWNED BY public.user_role.id_role;


--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."user" (
    id integer NOT NULL,
    name character varying(128),
    email character varying(128),
    image character varying(128),
    password character varying(255),
    role_id integer,
    is_active integer,
    date_created integer
);


ALTER TABLE public."user" OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_id_seq OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;


--
-- Name: user_token; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.user_token (
    id integer NOT NULL,
    email character varying(128),
    token character varying(128),
    date_created integer
);


ALTER TABLE public.user_token OWNER TO postgres;

--
-- Name: user_token_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.user_token_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_token_id_seq OWNER TO postgres;

--
-- Name: user_token_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.user_token_id_seq OWNED BY public.user_token.id;


--
-- Name: tb_category id_category; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tb_category ALTER COLUMN id_category SET DEFAULT nextval('public.tb_category_id_category_seq'::regclass);


--
-- Name: tb_project id_project; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tb_project ALTER COLUMN id_project SET DEFAULT nextval('public.tb_project_id_project_seq'::regclass);


--
-- Name: user id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);


--
-- Name: user_role id_role; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_role ALTER COLUMN id_role SET DEFAULT nextval('public.tb_role_id_role_seq'::regclass);


--
-- Name: user_token id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_token ALTER COLUMN id SET DEFAULT nextval('public.user_token_id_seq'::regclass);


--
-- Data for Name: tb_category; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tb_category (id_category, name) FROM stdin;
1	Presale
2	Workorder
\.


--
-- Data for Name: tb_project; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tb_project (id_project, created_at, name, analyst, category) FROM stdin;
2	2020-02-01	PT. Internal Indonesia A	Budi	2
4	2020-01-03	PT Internal Indonesia A	Ahmad	1
3	2020-01-02	PT Internal Indonesia A	Budi	1
5	2020-01-04	PT Internal Indonesia A	Ali	1
1	1999-01-01	PT. Internal Indonesia A	Ahmad	1
6	2020-02-17	PT. Internal Indonesia A	Ana	2
7	2020-02-02	PT. Internal Indonesia A	Dodi	1
8	2020-01-03	PT. Internal Indonesia A	Nana	1
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."user" (id, name, email, image, password, role_id, is_active, date_created) FROM stdin;
3	Endris	endris.ardiansyah@gmail.com	default.png	$2y$10$.vflTXVd9imRlSAY81UfP.c2D4ysoPLZ59YzPdCvkX6PSLdNMAcry	2	0	1581500510
6	Bambang Sugiarto	bambangsugiarto@gmail.com	default.png	$2y$10$.KvzH3WpfZGNG0cAME.yTOnNXS/eRJZ9sKWN1sQ3pLZ6L3bjmBf.2	2	0	1581582216
1	Fachrul Mustofa	fachrulmustofa1@gmail.com	anxiety.png	$2y$10$bC7fJgANxmLD/u2E4eeAZ./z6v14iQS3DBCDcxRWNYMoGIUxyPR.q	1	1	1581499816
9	Fachrul Keren	fachrulmustofa2@gmail.com	default.png	$2y$10$mohgazmOOXW6.MR1/3cy5e/kPzLjlUgWPh1njk6xW6GEdTQoTvGRG	2	1	1582190898
10	Bambang Sugiarto	fachrulmustofa3@gmail.com	default.png	$2y$10$4/IwX4sA8SmhFCXUJjdlG.qM08cv1BkJhgsx8aOLwMrAqBEaMsp5C	2	1	1582254431
\.


--
-- Data for Name: user_role; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.user_role (id_role, role) FROM stdin;
1	Admin
2	User
\.


--
-- Data for Name: user_token; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.user_token (id, email, token, date_created) FROM stdin;
3	endris.ardiansyah99@gmail.com	vPTJ0TixFVGZjTiJTu7JZ+GBj+GAkfIci/JyX9iLRGM=	1581500510
5	andi@gmail.com	JXikOEbvvZLcCZpNkmbcyJjpIcu6kwqKyGHZJtG+px4=	1581582080
6	bambangsugiarto200316@gmail.com	Qk5rSf62AcUuWq6R515pdWpNSjfOQTfDDqbk2bYhxbc=	1581582216
\.


--
-- Name: tb_category_id_category_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tb_category_id_category_seq', 2, true);


--
-- Name: tb_project_id_project_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tb_project_id_project_seq', 8, true);


--
-- Name: tb_role_id_role_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tb_role_id_role_seq', 2, true);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_id_seq', 10, true);


--
-- Name: user_token_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_token_id_seq', 10, true);


--
-- Name: tb_category tb_category_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tb_category
    ADD CONSTRAINT tb_category_pkey PRIMARY KEY (id_category);


--
-- Name: tb_project tb_project_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tb_project
    ADD CONSTRAINT tb_project_pkey PRIMARY KEY (id_project);


--
-- Name: user_role tb_role_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_role
    ADD CONSTRAINT tb_role_pkey PRIMARY KEY (id_role);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: user_token user_token_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.user_token
    ADD CONSTRAINT user_token_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

