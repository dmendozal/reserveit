PGDMP                     	    w            db_grupo01sa "   10.10 (Ubuntu 10.10-1.pgdg18.04+1) "   10.10 (Ubuntu 10.10-1.pgdg18.04+1) @    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            �           1262    16384    db_grupo01sa    DATABASE     ~   CREATE DATABASE db_grupo01sa WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'es_BO.UTF-8' LC_CTYPE = 'es_BO.UTF-8';
    DROP DATABASE db_grupo01sa;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    13081    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    16387    activo    TABLE     "  CREATE TABLE public.activo (
    idactivo integer DEFAULT nextval(('Activo_idactivo_seq'::text)::regclass) NOT NULL,
    codigo character varying(50) NOT NULL,
    estado bit(1) NOT NULL,
    fkidestado integer NOT NULL,
    fkidbien integer NOT NULL,
    fkidubicacion integer NOT NULL
);
    DROP TABLE public.activo;
       public         postgres    false    3            �            1259    16385    activo_idactivo_seq    SEQUENCE     |   CREATE SEQUENCE public.activo_idactivo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.activo_idactivo_seq;
       public       postgres    false    3            �            1259    16391 
   asignacion    TABLE     �   CREATE TABLE public.asignacion (
    fkidusuario integer NOT NULL,
    fkidactivo integer NOT NULL,
    estado bit(1) NOT NULL
);
    DROP TABLE public.asignacion;
       public         postgres    false    3            �            1259    16396    bien    TABLE     �   CREATE TABLE public.bien (
    idbien integer DEFAULT nextval(('Bien_idbien_seq'::text)::regclass) NOT NULL,
    nombre character varying(100) NOT NULL,
    descripcion text NOT NULL,
    estado bit(1) NOT NULL
);
    DROP TABLE public.bien;
       public         postgres    false    3            �            1259    16394    bien_idbien_seq    SEQUENCE     x   CREATE SEQUENCE public.bien_idbien_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.bien_idbien_seq;
       public       postgres    false    3            �            1259    16405    cargo    TABLE     �   CREATE TABLE public.cargo (
    idcargo integer DEFAULT nextval(('Cargo_idcargo_seq'::text)::regclass) NOT NULL,
    nombre character varying(50) NOT NULL,
    descripcion character varying(100) NOT NULL,
    estado bit(1) NOT NULL
);
    DROP TABLE public.cargo;
       public         postgres    false    3            �            1259    16403    cargo_idcargo_seq    SEQUENCE     z   CREATE SEQUENCE public.cargo_idcargo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.cargo_idcargo_seq;
       public       postgres    false    3            �            1259    16411    empresa    TABLE     N  CREATE TABLE public.empresa (
    idempresa integer DEFAULT nextval(('Empresa_idempresa_seq'::text)::regclass) NOT NULL,
    razon_social character varying(50) NOT NULL,
    email character varying(50) NOT NULL,
    direccion character varying(100) NOT NULL,
    telefono character varying(50) NOT NULL,
    estado bit(1) NOT NULL
);
    DROP TABLE public.empresa;
       public         postgres    false    3            �            1259    16409    empresa_idempresa_seq    SEQUENCE     ~   CREATE SEQUENCE public.empresa_idempresa_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.empresa_idempresa_seq;
       public       postgres    false    3            �            1259    16417    estado    TABLE     �   CREATE TABLE public.estado (
    idestado integer DEFAULT nextval(('Estado_idestado_seq'::text)::regclass) NOT NULL,
    sigla character varying(10) NOT NULL,
    nombre character varying(50) NOT NULL,
    estado bit(1) NOT NULL
);
    DROP TABLE public.estado;
       public         postgres    false    3            �            1259    16415    estado_idestado_seq    SEQUENCE     |   CREATE SEQUENCE public.estado_idestado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.estado_idestado_seq;
       public       postgres    false    3            �            1259    16423 
   inventario    TABLE     �   CREATE TABLE public.inventario (
    idinventario integer DEFAULT nextval(('Inventario_idinventario_seq'::text)::regclass) NOT NULL,
    fkidbien integer NOT NULL,
    estado bit(1) NOT NULL
);
    DROP TABLE public.inventario;
       public         postgres    false    3            �            1259    16421    inventario_idinventario_seq    SEQUENCE     �   CREATE SEQUENCE public.inventario_idinventario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.inventario_idinventario_seq;
       public       postgres    false    3            �            1259    16429    mantenimiento    TABLE     Y  CREATE TABLE public.mantenimiento (
    idmantenimiento integer DEFAULT nextval(('Mantenimiento_idmantenimiento_seq'::text)::regclass) NOT NULL,
    fecha_ingreso date NOT NULL,
    fecha_devolucion date NOT NULL,
    fecha_garantia date NOT NULL,
    fkidactivo integer NOT NULL,
    fkidempresa integer NOT NULL,
    estado bit(1) NOT NULL
);
 !   DROP TABLE public.mantenimiento;
       public         postgres    false    3            �            1259    16427 !   mantenimiento_idmantenimiento_seq    SEQUENCE     �   CREATE SEQUENCE public.mantenimiento_idmantenimiento_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.mantenimiento_idmantenimiento_seq;
       public       postgres    false    3            �            1259    16435 	   ubicacion    TABLE     �   CREATE TABLE public.ubicacion (
    idubicacion integer DEFAULT nextval(('Ubicacion_idubicacion_seq'::text)::regclass) NOT NULL,
    aula integer NOT NULL,
    piso integer NOT NULL,
    estado bit(1) NOT NULL
);
    DROP TABLE public.ubicacion;
       public         postgres    false    3            �            1259    16433    ubicacion_idubicacion_seq    SEQUENCE     �   CREATE SEQUENCE public.ubicacion_idubicacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.ubicacion_idubicacion_seq;
       public       postgres    false    3            �            1259    16441    usuario    TABLE     �  CREATE TABLE public.usuario (
    idusuario integer DEFAULT nextval(('Usuario_idusuario_seq'::text)::regclass) NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    email character varying(100) NOT NULL,
    password character varying(50) NOT NULL,
    direccion character varying(100) NOT NULL,
    telefono character varying(20) NOT NULL,
    fkidcargo integer NOT NULL,
    estado bit(1) NOT NULL
);
    DROP TABLE public.usuario;
       public         postgres    false    3            �            1259    16439    usuario_idusuario_seq    SEQUENCE     ~   CREATE SEQUENCE public.usuario_idusuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.usuario_idusuario_seq;
       public       postgres    false    3            �          0    16387    activo 
   TABLE DATA               _   COPY public.activo (idactivo, codigo, estado, fkidestado, fkidbien, fkidubicacion) FROM stdin;
    public       postgres    false    197   0J       �          0    16391 
   asignacion 
   TABLE DATA               E   COPY public.asignacion (fkidusuario, fkidactivo, estado) FROM stdin;
    public       postgres    false    198   MJ       �          0    16396    bien 
   TABLE DATA               C   COPY public.bien (idbien, nombre, descripcion, estado) FROM stdin;
    public       postgres    false    200   jJ       �          0    16405    cargo 
   TABLE DATA               E   COPY public.cargo (idcargo, nombre, descripcion, estado) FROM stdin;
    public       postgres    false    202   �J       �          0    16411    empresa 
   TABLE DATA               ^   COPY public.empresa (idempresa, razon_social, email, direccion, telefono, estado) FROM stdin;
    public       postgres    false    204   �J       �          0    16417    estado 
   TABLE DATA               A   COPY public.estado (idestado, sigla, nombre, estado) FROM stdin;
    public       postgres    false    206   �J       �          0    16423 
   inventario 
   TABLE DATA               D   COPY public.inventario (idinventario, fkidbien, estado) FROM stdin;
    public       postgres    false    208   �J       �          0    16429    mantenimiento 
   TABLE DATA               �   COPY public.mantenimiento (idmantenimiento, fecha_ingreso, fecha_devolucion, fecha_garantia, fkidactivo, fkidempresa, estado) FROM stdin;
    public       postgres    false    210   �J       �          0    16435 	   ubicacion 
   TABLE DATA               D   COPY public.ubicacion (idubicacion, aula, piso, estado) FROM stdin;
    public       postgres    false    212   K       �          0    16441    usuario 
   TABLE DATA               w   COPY public.usuario (idusuario, nombre, apellido, email, password, direccion, telefono, fkidcargo, estado) FROM stdin;
    public       postgres    false    214   5K       �           0    0    activo_idactivo_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.activo_idactivo_seq', 1, false);
            public       postgres    false    196            �           0    0    bien_idbien_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.bien_idbien_seq', 1, false);
            public       postgres    false    199            �           0    0    cargo_idcargo_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.cargo_idcargo_seq', 1, false);
            public       postgres    false    201            �           0    0    empresa_idempresa_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.empresa_idempresa_seq', 1, false);
            public       postgres    false    203            �           0    0    estado_idestado_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.estado_idestado_seq', 1, false);
            public       postgres    false    205            �           0    0    inventario_idinventario_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.inventario_idinventario_seq', 1, false);
            public       postgres    false    207            �           0    0 !   mantenimiento_idmantenimiento_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.mantenimiento_idmantenimiento_seq', 1, false);
            public       postgres    false    209            �           0    0    ubicacion_idubicacion_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.ubicacion_idubicacion_seq', 1, false);
            public       postgres    false    211            �           0    0    usuario_idusuario_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.usuario_idusuario_seq', 1, false);
            public       postgres    false    213            I           2606    16446    activo pk_activo 
   CONSTRAINT     T   ALTER TABLE ONLY public.activo
    ADD CONSTRAINT pk_activo PRIMARY KEY (idactivo);
 :   ALTER TABLE ONLY public.activo DROP CONSTRAINT pk_activo;
       public         postgres    false    197            K           2606    16448    bien pk_bienes 
   CONSTRAINT     P   ALTER TABLE ONLY public.bien
    ADD CONSTRAINT pk_bienes PRIMARY KEY (idbien);
 8   ALTER TABLE ONLY public.bien DROP CONSTRAINT pk_bienes;
       public         postgres    false    200            O           2606    16452    empresa pk_empresa 
   CONSTRAINT     W   ALTER TABLE ONLY public.empresa
    ADD CONSTRAINT pk_empresa PRIMARY KEY (idempresa);
 <   ALTER TABLE ONLY public.empresa DROP CONSTRAINT pk_empresa;
       public         postgres    false    204            Q           2606    16454    estado pk_estado 
   CONSTRAINT     T   ALTER TABLE ONLY public.estado
    ADD CONSTRAINT pk_estado PRIMARY KEY (idestado);
 :   ALTER TABLE ONLY public.estado DROP CONSTRAINT pk_estado;
       public         postgres    false    206            S           2606    16456    inventario pk_inventario 
   CONSTRAINT     `   ALTER TABLE ONLY public.inventario
    ADD CONSTRAINT pk_inventario PRIMARY KEY (idinventario);
 B   ALTER TABLE ONLY public.inventario DROP CONSTRAINT pk_inventario;
       public         postgres    false    208            U           2606    16458    mantenimiento pk_mantenimiento 
   CONSTRAINT     i   ALTER TABLE ONLY public.mantenimiento
    ADD CONSTRAINT pk_mantenimiento PRIMARY KEY (idmantenimiento);
 H   ALTER TABLE ONLY public.mantenimiento DROP CONSTRAINT pk_mantenimiento;
       public         postgres    false    210            M           2606    16450    cargo pk_tipo 
   CONSTRAINT     P   ALTER TABLE ONLY public.cargo
    ADD CONSTRAINT pk_tipo PRIMARY KEY (idcargo);
 7   ALTER TABLE ONLY public.cargo DROP CONSTRAINT pk_tipo;
       public         postgres    false    202            W           2606    16460    ubicacion pk_ubicacion 
   CONSTRAINT     ]   ALTER TABLE ONLY public.ubicacion
    ADD CONSTRAINT pk_ubicacion PRIMARY KEY (idubicacion);
 @   ALTER TABLE ONLY public.ubicacion DROP CONSTRAINT pk_ubicacion;
       public         postgres    false    212            Y           2606    16462    usuario pk_usuario 
   CONSTRAINT     W   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT pk_usuario PRIMARY KEY (idusuario);
 <   ALTER TABLE ONLY public.usuario DROP CONSTRAINT pk_usuario;
       public         postgres    false    214            Z           2606    16463    activo fk_activo_bien    FK CONSTRAINT     x   ALTER TABLE ONLY public.activo
    ADD CONSTRAINT fk_activo_bien FOREIGN KEY (fkidbien) REFERENCES public.bien(idbien);
 ?   ALTER TABLE ONLY public.activo DROP CONSTRAINT fk_activo_bien;
       public       postgres    false    2891    197    200            [           2606    16468    activo fk_activo_estado    FK CONSTRAINT     �   ALTER TABLE ONLY public.activo
    ADD CONSTRAINT fk_activo_estado FOREIGN KEY (fkidestado) REFERENCES public.estado(idestado);
 A   ALTER TABLE ONLY public.activo DROP CONSTRAINT fk_activo_estado;
       public       postgres    false    2897    206    197            \           2606    16473    activo fk_activo_ubicacion    FK CONSTRAINT     �   ALTER TABLE ONLY public.activo
    ADD CONSTRAINT fk_activo_ubicacion FOREIGN KEY (fkidubicacion) REFERENCES public.ubicacion(idubicacion);
 D   ALTER TABLE ONLY public.activo DROP CONSTRAINT fk_activo_ubicacion;
       public       postgres    false    212    197    2903            ]           2606    16478    asignacion fk_asignacion_activo    FK CONSTRAINT     �   ALTER TABLE ONLY public.asignacion
    ADD CONSTRAINT fk_asignacion_activo FOREIGN KEY (fkidactivo) REFERENCES public.activo(idactivo);
 I   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT fk_asignacion_activo;
       public       postgres    false    197    2889    198            ^           2606    16483     asignacion fk_asignacion_usuario    FK CONSTRAINT     �   ALTER TABLE ONLY public.asignacion
    ADD CONSTRAINT fk_asignacion_usuario FOREIGN KEY (fkidusuario) REFERENCES public.usuario(idusuario);
 J   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT fk_asignacion_usuario;
       public       postgres    false    2905    198    214            _           2606    16488    inventario fk_inventario_bien    FK CONSTRAINT     �   ALTER TABLE ONLY public.inventario
    ADD CONSTRAINT fk_inventario_bien FOREIGN KEY (fkidbien) REFERENCES public.bien(idbien);
 G   ALTER TABLE ONLY public.inventario DROP CONSTRAINT fk_inventario_bien;
       public       postgres    false    200    2891    208            `           2606    16493 %   mantenimiento fk_mantenimiento_activo    FK CONSTRAINT     �   ALTER TABLE ONLY public.mantenimiento
    ADD CONSTRAINT fk_mantenimiento_activo FOREIGN KEY (fkidactivo) REFERENCES public.activo(idactivo);
 O   ALTER TABLE ONLY public.mantenimiento DROP CONSTRAINT fk_mantenimiento_activo;
       public       postgres    false    210    2889    197            a           2606    16498 &   mantenimiento fk_mantenimiento_empresa    FK CONSTRAINT     �   ALTER TABLE ONLY public.mantenimiento
    ADD CONSTRAINT fk_mantenimiento_empresa FOREIGN KEY (fkidempresa) REFERENCES public.empresa(idempresa);
 P   ALTER TABLE ONLY public.mantenimiento DROP CONSTRAINT fk_mantenimiento_empresa;
       public       postgres    false    2895    204    210            b           2606    16503    usuario fk_usuario_cargo    FK CONSTRAINT     ~   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT fk_usuario_cargo FOREIGN KEY (fkidcargo) REFERENCES public.cargo(idcargo);
 B   ALTER TABLE ONLY public.usuario DROP CONSTRAINT fk_usuario_cargo;
       public       postgres    false    2893    214    202            �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �     