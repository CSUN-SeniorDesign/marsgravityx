CREATE TABLE public.users
(
  id integer NOT NULL DEFAULT nextval('users_id_seq'::regclass),
  first_name character varying(15) NOT NULL,
  last_name character varying(15) NOT NULL,
  username character varying(10) NOT NULL,
  password character varying(10) NOT NULL,
  phonenumber character varying(12) NOT NULL,
  bday date NOT NULL,
  gender character varying(10) NOT NULL,
  CONSTRAINT users_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.users
  OWNER TO postgres;