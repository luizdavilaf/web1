--
-- PostgreSQL database dump
--

-- Dumped from database version 11.8
-- Dumped by pg_dump version 11.8

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

SET default_with_oids = false;

--
-- Name: Aluno; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Aluno" (
    codigo integer NOT NULL,
    nome character varying(20) NOT NULL,
    email character varying(20) NOT NULL,
    telefone character varying(20) NOT NULL
);


ALTER TABLE public."Aluno" OWNER TO postgres;

--
-- Name: Aluno_codigo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Aluno_codigo_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Aluno_codigo_seq" OWNER TO postgres;

--
-- Name: Aluno_codigo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Aluno_codigo_seq" OWNED BY public."Aluno".codigo;


--
-- Name: Curso; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Curso" (
    codigo integer NOT NULL,
    sala character varying NOT NULL,
    professor character varying NOT NULL,
    nome_turma character varying NOT NULL
);


ALTER TABLE public."Curso" OWNER TO postgres;

--
-- Name: Curso_codigo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Curso_codigo_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Curso_codigo_seq" OWNER TO postgres;

--
-- Name: Curso_codigo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Curso_codigo_seq" OWNED BY public."Curso".codigo;


--
-- Name: Matricula; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Matricula" (
    codigo integer NOT NULL,
    aluno integer NOT NULL,
    curso integer NOT NULL
);


ALTER TABLE public."Matricula" OWNER TO postgres;

--
-- Name: Matricula_codigo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."Matricula_codigo_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Matricula_codigo_seq" OWNER TO postgres;

--
-- Name: Matricula_codigo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."Matricula_codigo_seq" OWNED BY public."Matricula".codigo;


--
-- Name: Aluno codigo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Aluno" ALTER COLUMN codigo SET DEFAULT nextval('public."Aluno_codigo_seq"'::regclass);


--
-- Name: Curso codigo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Curso" ALTER COLUMN codigo SET DEFAULT nextval('public."Curso_codigo_seq"'::regclass);


--
-- Name: Matricula codigo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Matricula" ALTER COLUMN codigo SET DEFAULT nextval('public."Matricula_codigo_seq"'::regclass);


--
-- Name: Aluno Aluno_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Aluno"
    ADD CONSTRAINT "Aluno_pkey" PRIMARY KEY (codigo);


--
-- Name: Curso Curso_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Curso"
    ADD CONSTRAINT "Curso_pkey" PRIMARY KEY (codigo);


--
-- Name: Matricula Matricula_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Matricula"
    ADD CONSTRAINT "Matricula_pkey" PRIMARY KEY (codigo);


--
-- Name: Matricula MAluno; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Matricula"
    ADD CONSTRAINT "MAluno" FOREIGN KEY (aluno) REFERENCES public."Aluno"(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Matricula MCurso; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Matricula"
    ADD CONSTRAINT "MCurso" FOREIGN KEY (curso) REFERENCES public."Curso"(codigo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

