PGDMP         1        
    
    w            db_grupo01sa    11.2    11.2 u    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            �           1262    48921    db_grupo01sa    DATABASE     �   CREATE DATABASE db_grupo01sa WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Bolivia.1252' LC_CTYPE = 'Spanish_Bolivia.1252';
    DROP DATABASE db_grupo01sa;
             postgres    false            �            1259    48922    activo    TABLE     T  CREATE TABLE public.activo (
    idactivo integer DEFAULT nextval(('Activo_idactivo_seq'::text)::regclass) NOT NULL,
    codigo character varying(50) NOT NULL,
    estado bit(1) DEFAULT '1'::"bit" NOT NULL,
    fkidestado integer NOT NULL,
    fkidbien integer NOT NULL,
    fkidubicacion integer NOT NULL,
    qr character varying(150)
);
    DROP TABLE public.activo;
       public         postgres    false            �            1259    48927    activo_idactivo_seq    SEQUENCE     |   CREATE SEQUENCE public.activo_idactivo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.activo_idactivo_seq;
       public       postgres    false            �            1259    48929 
   asignacion    TABLE     �   CREATE TABLE public.asignacion (
    fkidactivo integer NOT NULL,
    estado bit(1) DEFAULT '1'::"bit" NOT NULL,
    fkiduser integer NOT NULL,
    idasignacion integer DEFAULT nextval(('asignacion_idasignacion_seq'::text)::regclass) NOT NULL
);
    DROP TABLE public.asignacion;
       public         postgres    false            �            1259    49178    asignacion_idasignacion_seq    SEQUENCE     �   CREATE SEQUENCE public.asignacion_idasignacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.asignacion_idasignacion_seq;
       public       postgres    false            �            1259    48933    bien    TABLE     �   CREATE TABLE public.bien (
    idbien integer DEFAULT nextval(('Bien_idbien_seq'::text)::regclass) NOT NULL,
    nombre character varying(100) NOT NULL,
    descripcion text NOT NULL,
    estado bit(1) DEFAULT '1'::"bit" NOT NULL
);
    DROP TABLE public.bien;
       public         postgres    false            �            1259    48941    bien_idbien_seq    SEQUENCE     x   CREATE SEQUENCE public.bien_idbien_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.bien_idbien_seq;
       public       postgres    false            �            1259    48943    cargo    TABLE     �   CREATE TABLE public.cargo (
    idcargo integer DEFAULT nextval(('Cargo_idcargo_seq'::text)::regclass) NOT NULL,
    nombre character varying(50) NOT NULL,
    descripcion character varying(100) NOT NULL,
    estado bit(1) DEFAULT '1'::"bit" NOT NULL
);
    DROP TABLE public.cargo;
       public         postgres    false            �            1259    48948    cargo_idcargo_seq    SEQUENCE     z   CREATE SEQUENCE public.cargo_idcargo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.cargo_idcargo_seq;
       public       postgres    false            �            1259    48950    empresa    TABLE     a  CREATE TABLE public.empresa (
    idempresa integer DEFAULT nextval(('Empresa_idempresa_seq'::text)::regclass) NOT NULL,
    razon_social character varying(50) NOT NULL,
    email character varying(50) NOT NULL,
    direccion character varying(100) NOT NULL,
    telefono character varying(50) NOT NULL,
    estado bit(1) DEFAULT '1'::"bit" NOT NULL
);
    DROP TABLE public.empresa;
       public         postgres    false            �            1259    48955    empresa_idempresa_seq    SEQUENCE     ~   CREATE SEQUENCE public.empresa_idempresa_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.empresa_idempresa_seq;
       public       postgres    false            �            1259    48957    estado    TABLE     �   CREATE TABLE public.estado (
    idestado integer DEFAULT nextval(('Estado_idestado_seq'::text)::regclass) NOT NULL,
    sigla character varying(10) NOT NULL,
    nombre character varying(50) NOT NULL,
    estado bit(1) DEFAULT '1'::"bit" NOT NULL
);
    DROP TABLE public.estado;
       public         postgres    false            �            1259    48962    estado_idestado_seq    SEQUENCE     |   CREATE SEQUENCE public.estado_idestado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.estado_idestado_seq;
       public       postgres    false            �            1259    48964    failed_jobs    TABLE     �   CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         postgres    false            �            1259    48971    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public       postgres    false    207            �           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
            public       postgres    false    208            �            1259    48973 
   inventario    TABLE     �   CREATE TABLE public.inventario (
    idinventario integer DEFAULT nextval(('Inventario_idinventario_seq'::text)::regclass) NOT NULL,
    fkidbien integer NOT NULL,
    estado bit(1) DEFAULT '1'::"bit" NOT NULL
);
    DROP TABLE public.inventario;
       public         postgres    false            �            1259    48978    inventario_idinventario_seq    SEQUENCE     �   CREATE SEQUENCE public.inventario_idinventario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.inventario_idinventario_seq;
       public       postgres    false            �            1259    48980    mantenimiento    TABLE     l  CREATE TABLE public.mantenimiento (
    idmantenimiento integer DEFAULT nextval(('Mantenimiento_idmantenimiento_seq'::text)::regclass) NOT NULL,
    fecha_ingreso date NOT NULL,
    fecha_devolucion date NOT NULL,
    fecha_garantia date NOT NULL,
    fkidactivo integer NOT NULL,
    fkidempresa integer NOT NULL,
    estado bit(1) DEFAULT '1'::"bit" NOT NULL
);
 !   DROP TABLE public.mantenimiento;
       public         postgres    false            �            1259    48985 !   mantenimiento_idmantenimiento_seq    SEQUENCE     �   CREATE SEQUENCE public.mantenimiento_idmantenimiento_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.mantenimiento_idmantenimiento_seq;
       public       postgres    false            �            1259    48987 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false            �            1259    48990    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    213            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
            public       postgres    false    214            �            1259    48992    model_has_permissions    TABLE     �   CREATE TABLE public.model_has_permissions (
    permission_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);
 )   DROP TABLE public.model_has_permissions;
       public         postgres    false            �            1259    48995    model_has_roles    TABLE     �   CREATE TABLE public.model_has_roles (
    role_id bigint NOT NULL,
    model_type character varying(255) DEFAULT 'App\User'::character varying NOT NULL,
    model_id bigint NOT NULL
);
 #   DROP TABLE public.model_has_roles;
       public         postgres    false            �            1259    48999    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         postgres    false            �            1259    49005    permissions    TABLE     �   CREATE TABLE public.permissions (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.permissions;
       public         postgres    false            �            1259    49011    permissions_id_seq    SEQUENCE     {   CREATE SEQUENCE public.permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.permissions_id_seq;
       public       postgres    false    218            �           0    0    permissions_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;
            public       postgres    false    219            �            1259    49013    role_has_permissions    TABLE     m   CREATE TABLE public.role_has_permissions (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);
 (   DROP TABLE public.role_has_permissions;
       public         postgres    false            �            1259    49016    roles    TABLE       CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) DEFAULT 'web'::character varying NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.roles;
       public         postgres    false            �            1259    49023    roles_id_seq    SEQUENCE     u   CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.roles_id_seq;
       public       postgres    false    221            �           0    0    roles_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;
            public       postgres    false    222            �            1259    49025 	   ubicacion    TABLE     �   CREATE TABLE public.ubicacion (
    idubicacion integer DEFAULT nextval(('Ubicacion_idubicacion_seq'::text)::regclass) NOT NULL,
    aula integer NOT NULL,
    piso integer NOT NULL,
    estado bit(1) DEFAULT '1'::"bit" NOT NULL
);
    DROP TABLE public.ubicacion;
       public         postgres    false            �            1259    49030    ubicacion_idubicacion_seq    SEQUENCE     �   CREATE SEQUENCE public.ubicacion_idubicacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.ubicacion_idubicacion_seq;
       public       postgres    false            �            1259    49032    users    TABLE       CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    apellido character varying(50),
    direccion character varying(50),
    telefono character varying(15),
    foto character varying(150)
);
    DROP TABLE public.users;
       public         postgres    false            �            1259    49038    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       postgres    false    225            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
            public       postgres    false    226            �            1259    49040    usuario    TABLE     �  CREATE TABLE public.usuario (
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
       public         postgres    false            �            1259    49044    usuario_idusuario_seq    SEQUENCE     ~   CREATE SEQUENCE public.usuario_idusuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.usuario_idusuario_seq;
       public       postgres    false            �
           2604    49046    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    208    207            �
           2604    49047    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    214    213            �
           2604    49048    permissions id    DEFAULT     p   ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);
 =   ALTER TABLE public.permissions ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    219    218            �
           2604    49049    roles id    DEFAULT     d   ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);
 7   ALTER TABLE public.roles ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    222    221                        2604    49050    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    226    225            �          0    48922    activo 
   TABLE DATA               c   COPY public.activo (idactivo, codigo, estado, fkidestado, fkidbien, fkidubicacion, qr) FROM stdin;
    public       postgres    false    196   p�       �          0    48929 
   asignacion 
   TABLE DATA               P   COPY public.asignacion (fkidactivo, estado, fkiduser, idasignacion) FROM stdin;
    public       postgres    false    198   �       �          0    48933    bien 
   TABLE DATA               C   COPY public.bien (idbien, nombre, descripcion, estado) FROM stdin;
    public       postgres    false    199   �       �          0    48943    cargo 
   TABLE DATA               E   COPY public.cargo (idcargo, nombre, descripcion, estado) FROM stdin;
    public       postgres    false    201   ��       �          0    48950    empresa 
   TABLE DATA               ^   COPY public.empresa (idempresa, razon_social, email, direccion, telefono, estado) FROM stdin;
    public       postgres    false    203          �          0    48957    estado 
   TABLE DATA               A   COPY public.estado (idestado, sigla, nombre, estado) FROM stdin;
    public       postgres    false    205   !�       �          0    48964    failed_jobs 
   TABLE DATA               [   COPY public.failed_jobs (id, connection, queue, payload, exception, failed_at) FROM stdin;
    public       postgres    false    207   R�       �          0    48973 
   inventario 
   TABLE DATA               D   COPY public.inventario (idinventario, fkidbien, estado) FROM stdin;
    public       postgres    false    209   o�       �          0    48980    mantenimiento 
   TABLE DATA               �   COPY public.mantenimiento (idmantenimiento, fecha_ingreso, fecha_devolucion, fecha_garantia, fkidactivo, fkidempresa, estado) FROM stdin;
    public       postgres    false    211   ��       �          0    48987 
   migrations 
   TABLE DATA               :   COPY public.migrations (id, migration, batch) FROM stdin;
    public       postgres    false    213   ��       �          0    48992    model_has_permissions 
   TABLE DATA               T   COPY public.model_has_permissions (permission_id, model_type, model_id) FROM stdin;
    public       postgres    false    215   0�       �          0    48995    model_has_roles 
   TABLE DATA               H   COPY public.model_has_roles (role_id, model_type, model_id) FROM stdin;
    public       postgres    false    216   M�       �          0    48999    password_resets 
   TABLE DATA               C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public       postgres    false    217   ��       �          0    49005    permissions 
   TABLE DATA               S   COPY public.permissions (id, name, guard_name, created_at, updated_at) FROM stdin;
    public       postgres    false    218   ��       �          0    49013    role_has_permissions 
   TABLE DATA               F   COPY public.role_has_permissions (permission_id, role_id) FROM stdin;
    public       postgres    false    220   �       �          0    49016    roles 
   TABLE DATA               M   COPY public.roles (id, name, guard_name, created_at, updated_at) FROM stdin;
    public       postgres    false    221   a�       �          0    49025 	   ubicacion 
   TABLE DATA               D   COPY public.ubicacion (idubicacion, aula, piso, estado) FROM stdin;
    public       postgres    false    223   �       �          0    49032    users 
   TABLE DATA               �   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, apellido, direccion, telefono, foto) FROM stdin;
    public       postgres    false    225   �       �          0    49040    usuario 
   TABLE DATA               w   COPY public.usuario (idusuario, nombre, apellido, email, password, direccion, telefono, fkidcargo, estado) FROM stdin;
    public       postgres    false    227   4�       �           0    0    activo_idactivo_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.activo_idactivo_seq', 26, true);
            public       postgres    false    197            �           0    0    asignacion_idasignacion_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.asignacion_idasignacion_seq', 9, true);
            public       postgres    false    229            �           0    0    bien_idbien_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.bien_idbien_seq', 3, true);
            public       postgres    false    200            �           0    0    cargo_idcargo_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.cargo_idcargo_seq', 1, false);
            public       postgres    false    202            �           0    0    empresa_idempresa_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.empresa_idempresa_seq', 14, true);
            public       postgres    false    204            �           0    0    estado_idestado_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.estado_idestado_seq', 1, true);
            public       postgres    false    206            �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
            public       postgres    false    208            �           0    0    inventario_idinventario_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.inventario_idinventario_seq', 1, false);
            public       postgres    false    210            �           0    0 !   mantenimiento_idmantenimiento_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.mantenimiento_idmantenimiento_seq', 1, false);
            public       postgres    false    212            �           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 4, true);
            public       postgres    false    214            �           0    0    permissions_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.permissions_id_seq', 42, true);
            public       postgres    false    219            �           0    0    roles_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.roles_id_seq', 1, true);
            public       postgres    false    222            �           0    0    ubicacion_idubicacion_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.ubicacion_idubicacion_seq', 1, true);
            public       postgres    false    224            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 15, true);
            public       postgres    false    226            �           0    0    usuario_idusuario_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.usuario_idusuario_seq', 1, false);
            public       postgres    false    228                       2606    49052    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public         postgres    false    207                       2606    49054    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public         postgres    false    213                       2606    49056 0   model_has_permissions model_has_permissions_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_pkey PRIMARY KEY (permission_id, model_id, model_type);
 Z   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_pkey;
       public         postgres    false    215    215    215                       2606    49058 $   model_has_roles model_has_roles_pkey 
   CONSTRAINT     }   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_pkey PRIMARY KEY (role_id, model_id, model_type);
 N   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_pkey;
       public         postgres    false    216    216    216                       2606    49060    permissions permissions_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_pkey;
       public         postgres    false    218                       2606    49062    activo pk_activo 
   CONSTRAINT     T   ALTER TABLE ONLY public.activo
    ADD CONSTRAINT pk_activo PRIMARY KEY (idactivo);
 :   ALTER TABLE ONLY public.activo DROP CONSTRAINT pk_activo;
       public         postgres    false    196                       2606    49185    asignacion pk_asignacion 
   CONSTRAINT     `   ALTER TABLE ONLY public.asignacion
    ADD CONSTRAINT pk_asignacion PRIMARY KEY (idasignacion);
 B   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT pk_asignacion;
       public         postgres    false    198                       2606    49064    bien pk_bienes 
   CONSTRAINT     P   ALTER TABLE ONLY public.bien
    ADD CONSTRAINT pk_bienes PRIMARY KEY (idbien);
 8   ALTER TABLE ONLY public.bien DROP CONSTRAINT pk_bienes;
       public         postgres    false    199                       2606    49066    empresa pk_empresa 
   CONSTRAINT     W   ALTER TABLE ONLY public.empresa
    ADD CONSTRAINT pk_empresa PRIMARY KEY (idempresa);
 <   ALTER TABLE ONLY public.empresa DROP CONSTRAINT pk_empresa;
       public         postgres    false    203                       2606    49068    estado pk_estado 
   CONSTRAINT     T   ALTER TABLE ONLY public.estado
    ADD CONSTRAINT pk_estado PRIMARY KEY (idestado);
 :   ALTER TABLE ONLY public.estado DROP CONSTRAINT pk_estado;
       public         postgres    false    205                       2606    49070    inventario pk_inventario 
   CONSTRAINT     `   ALTER TABLE ONLY public.inventario
    ADD CONSTRAINT pk_inventario PRIMARY KEY (idinventario);
 B   ALTER TABLE ONLY public.inventario DROP CONSTRAINT pk_inventario;
       public         postgres    false    209                       2606    49072    mantenimiento pk_mantenimiento 
   CONSTRAINT     i   ALTER TABLE ONLY public.mantenimiento
    ADD CONSTRAINT pk_mantenimiento PRIMARY KEY (idmantenimiento);
 H   ALTER TABLE ONLY public.mantenimiento DROP CONSTRAINT pk_mantenimiento;
       public         postgres    false    211            	           2606    49074    cargo pk_tipo 
   CONSTRAINT     P   ALTER TABLE ONLY public.cargo
    ADD CONSTRAINT pk_tipo PRIMARY KEY (idcargo);
 7   ALTER TABLE ONLY public.cargo DROP CONSTRAINT pk_tipo;
       public         postgres    false    201            $           2606    49076    ubicacion pk_ubicacion 
   CONSTRAINT     ]   ALTER TABLE ONLY public.ubicacion
    ADD CONSTRAINT pk_ubicacion PRIMARY KEY (idubicacion);
 @   ALTER TABLE ONLY public.ubicacion DROP CONSTRAINT pk_ubicacion;
       public         postgres    false    223            *           2606    49078    usuario pk_usuario 
   CONSTRAINT     W   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT pk_usuario PRIMARY KEY (idusuario);
 <   ALTER TABLE ONLY public.usuario DROP CONSTRAINT pk_usuario;
       public         postgres    false    227                        2606    49080 .   role_has_permissions role_has_permissions_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (permission_id, role_id);
 X   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_pkey;
       public         postgres    false    220    220            "           2606    49082    roles roles_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_pkey;
       public         postgres    false    221            &           2606    49084    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public         postgres    false    225            (           2606    49086    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public         postgres    false    225                       1259    49087 /   model_has_permissions_model_id_model_type_index    INDEX     �   CREATE INDEX model_has_permissions_model_id_model_type_index ON public.model_has_permissions USING btree (model_id, model_type);
 C   DROP INDEX public.model_has_permissions_model_id_model_type_index;
       public         postgres    false    215    215                       1259    49088 )   model_has_roles_model_id_model_type_index    INDEX     u   CREATE INDEX model_has_roles_model_id_model_type_index ON public.model_has_roles USING btree (model_id, model_type);
 =   DROP INDEX public.model_has_roles_model_id_model_type_index;
       public         postgres    false    216    216                       1259    49089    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public         postgres    false    217            /           2606    49155 #   asignacion asignacion_fkiduser_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.asignacion
    ADD CONSTRAINT asignacion_fkiduser_fkey FOREIGN KEY (fkiduser) REFERENCES public.users(id);
 M   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_fkiduser_fkey;
       public       postgres    false    198    225    2856            +           2606    49090    activo fk_activo_bien    FK CONSTRAINT     x   ALTER TABLE ONLY public.activo
    ADD CONSTRAINT fk_activo_bien FOREIGN KEY (fkidbien) REFERENCES public.bien(idbien);
 ?   ALTER TABLE ONLY public.activo DROP CONSTRAINT fk_activo_bien;
       public       postgres    false    196    2823    199            ,           2606    49095    activo fk_activo_estado    FK CONSTRAINT     �   ALTER TABLE ONLY public.activo
    ADD CONSTRAINT fk_activo_estado FOREIGN KEY (fkidestado) REFERENCES public.estado(idestado);
 A   ALTER TABLE ONLY public.activo DROP CONSTRAINT fk_activo_estado;
       public       postgres    false    2829    205    196            -           2606    49100    activo fk_activo_ubicacion    FK CONSTRAINT     �   ALTER TABLE ONLY public.activo
    ADD CONSTRAINT fk_activo_ubicacion FOREIGN KEY (fkidubicacion) REFERENCES public.ubicacion(idubicacion);
 D   ALTER TABLE ONLY public.activo DROP CONSTRAINT fk_activo_ubicacion;
       public       postgres    false    196    223    2852            .           2606    49105    asignacion fk_asignacion_activo    FK CONSTRAINT     �   ALTER TABLE ONLY public.asignacion
    ADD CONSTRAINT fk_asignacion_activo FOREIGN KEY (fkidactivo) REFERENCES public.activo(idactivo);
 I   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT fk_asignacion_activo;
       public       postgres    false    2819    198    196            0           2606    49115    inventario fk_inventario_bien    FK CONSTRAINT     �   ALTER TABLE ONLY public.inventario
    ADD CONSTRAINT fk_inventario_bien FOREIGN KEY (fkidbien) REFERENCES public.bien(idbien);
 G   ALTER TABLE ONLY public.inventario DROP CONSTRAINT fk_inventario_bien;
       public       postgres    false    199    2823    209            1           2606    49120 %   mantenimiento fk_mantenimiento_activo    FK CONSTRAINT     �   ALTER TABLE ONLY public.mantenimiento
    ADD CONSTRAINT fk_mantenimiento_activo FOREIGN KEY (fkidactivo) REFERENCES public.activo(idactivo);
 O   ALTER TABLE ONLY public.mantenimiento DROP CONSTRAINT fk_mantenimiento_activo;
       public       postgres    false    2819    196    211            2           2606    49125 &   mantenimiento fk_mantenimiento_empresa    FK CONSTRAINT     �   ALTER TABLE ONLY public.mantenimiento
    ADD CONSTRAINT fk_mantenimiento_empresa FOREIGN KEY (fkidempresa) REFERENCES public.empresa(idempresa);
 P   ALTER TABLE ONLY public.mantenimiento DROP CONSTRAINT fk_mantenimiento_empresa;
       public       postgres    false    2827    203    211            7           2606    49130    usuario fk_usuario_cargo    FK CONSTRAINT     ~   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT fk_usuario_cargo FOREIGN KEY (fkidcargo) REFERENCES public.cargo(idcargo);
 B   ALTER TABLE ONLY public.usuario DROP CONSTRAINT fk_usuario_cargo;
       public       postgres    false    2825    227    201            3           2606    49135 A   model_has_permissions model_has_permissions_permission_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 k   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_permission_id_foreign;
       public       postgres    false    2846    215    218            4           2606    49140 /   model_has_roles model_has_roles_role_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_role_id_foreign;
       public       postgres    false    216    221    2850            5           2606    49145 ?   role_has_permissions role_has_permissions_permission_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 i   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_permission_id_foreign;
       public       postgres    false    218    2846    220            6           2606    49150 9   role_has_permissions role_has_permissions_role_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 c   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_role_id_foreign;
       public       postgres    false    220    221    2850            �   k   x�3�54161160�����Ԓb������b�PC#�p//���t.CΔ��N�
��t#BC]RR�j�L�F��E���04�@4��5������P�+����� �/3�      �      x�3�4�4��223,�b���� ! �      �   �   x�]�1�0@��9�O�T8A��T)Ԩtdq�KIS9-燮,�������~�#����F}E�}�B��p���-y�)	�l�&�NjȘJE]>����e6-b-�&�8��k�ML9Ɂ^'��A.f      �      x������ � �      �   O   x�3�L)N��/-rH�M���K���,NL)�442�4�24&����S��\�)�y��9�*�M�,�̀�b���� �2�      �   !   x�3�t�s�t*M�Sp-.IL��4����� R0�      �      x������ � �      �      x������ � �      �      x������ � �      �   w   x�U���0��k�0f�3໘���0����IDzѫ�䧆=�1��pW�E�2QC��$9��t��h��:@Ť��:��wX�a�i�c�w6^\;m���+���,�e�V���� zh:*      �      x������ � �      �   (   x�3�t,(��	-N-�4�2B�s��Lp�r��qqq .H�      �      x������ � �      �   ?  x���ݎ� ��=O�/���?<K���pa)�W��}�N���i{{4���(�~X���|�k��ꧽT$�;!�D���Q�h��@VvY��t��.��:��ĉ�6��긂2��|�a����(!(���j��^�5�*2��Y�B��fYj�1�j�B��x�;g	cZ��sL�}��g�-���.�Y��y�~�G�w(���R���o�Z�w����:��;л
Q���)��.�}���B#)�6/4�WEyq`�"�񍋔ؽт[\�k��\0��ڔ�g<r��L6�n qwKy����j��?��t}ަ�����1��5��_$w�P�]�Ӏd�e����i���4���lf�Ĕp�p>6]�A�ˁ.$�32��Ӏ���å��Nj�y�٥�Z�B�Խقg:��N>��:�E|՛=���U�i�#�E���BL�Fn�c�o9w���ȭU�s�q!��4���p�3:��i��.�E�d����M����c�7$I�_�]��oh��m�7��Y�0�{�4�i��o*��m(�M|S�h�4P��o:u���3 �s�      �   `   x����0�3[������`'G�2O�6�g=;g�,�gv�t��r�O����2z� q[�0�3�0�,� �"��o!���hķW��s�      �   {   x�m�=�0�g�� U�Q�Up��]�ࡍ�F���VU�������K��i�KU�x��i��w!:ҩ��1��fQ^[UW�MY�5[��m1�W�U�`�ǒ�0��n��jL~�>/��V:�      �      x�3�4�4�4����� ��      �     x�}��n�P���)��ma9�j�XeE�jӛ%l�ؖ��O?`��$�4Y�d%k����R�$�G�g��j 3� l�b|��>bw��q]�!��n��:�V�y�����Q��ͽx!�j��h�w#C���|6�t}R���:�+z��k32vR����e��¸q	�@Y��ԒbQjp�

����@��Q��P�y�ӕ�D��/���OQ0��$��F�~a�o�������$c�;m�C�
g/�����/���<�g�"�:���>��3������#J��\�y{����~��|9h�K��:XfѽkV��|��͖M9;s�F�3q8�VC����/�"�kq(Z���ʲ�J���j���̀Z���+fI�^��N薢>6��c���"��j�}�P�����&�F0��!P_Zijk��5��Z���HK�Daǝ�|�D�F�V�5�1?�?����[3��3�4���	�if��"���\�]T�\;_2�w�LoM�_�B�PR�s�^\yV{��o�5      �      x������ � �     