PGDMP     $    !    
    
        w         
   reserve_it "   10.11 (Ubuntu 10.11-1.pgdg18.04+1) "   10.11 (Ubuntu 10.11-1.pgdg18.04+1) ?    ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            ?           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3            ?            1259    26320 	   categoria    TABLE     -  CREATE TABLE public.categoria (
    idcategoria integer DEFAULT nextval(('Categoria_idcategoria_seq'::text)::regclass) NOT NULL,
    nombre character varying(50) NOT NULL,
    descripcion character varying(150),
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL,
    imagen character varying NOT NULL
);
    DROP TABLE public.categoria;
       public         postgres    false    3            ?            1259    26318    categoria_idcategoria_seq    SEQUENCE     ?   CREATE SEQUENCE public.categoria_idcategoria_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.categoria_idcategoria_seq;
       public       postgres    false    3            ?            1259    26326    cliente    TABLE     k  CREATE TABLE public.cliente (
    idcliente integer DEFAULT nextval(('Cliente_idcliente_seq'::text)::regclass) NOT NULL,
    nombre character varying(100) NOT NULL,
    apellido character varying(100) NOT NULL,
    sexo bit(1) NOT NULL,
    direccion character varying(50) NOT NULL,
    telefono character varying(10) NOT NULL,
    email character varying(100) NOT NULL,
    username character varying(50) NOT NULL,
    password character varying(256) NOT NULL,
    token character varying(255),
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL,
    latitud character varying(250),
    longitud character varying(250)
);
    DROP TABLE public.cliente;
       public         postgres    false    3            ?            1259    26324    cliente_idcliente_seq    SEQUENCE     ~   CREATE SEQUENCE public.cliente_idcliente_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.cliente_idcliente_seq;
       public       postgres    false    3            ?            1259    26335    empresa    TABLE     @  CREATE TABLE public.empresa (
    idempresa integer DEFAULT nextval(('Empresa_idempresa_seq'::text)::regclass) NOT NULL,
    razon_social character varying(100) NOT NULL,
    direccion character varying(100) NOT NULL,
    email character varying(50) NOT NULL,
    mision character varying(250),
    vision character varying(250),
    slogan character varying(250),
    imagen character varying(250) NOT NULL,
    telefono character varying(10),
    sitio_web character varying(50),
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL,
    fkidencargado_empresa integer NOT NULL
);
    DROP TABLE public.empresa;
       public         postgres    false    3            ?            1259    26333    empresa_idempresa_seq    SEQUENCE     ~   CREATE SEQUENCE public.empresa_idempresa_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.empresa_idempresa_seq;
       public       postgres    false    3            ?            1259    26344    encargado_empresa    TABLE     ?  CREATE TABLE public.encargado_empresa (
    idencargado_empresa integer DEFAULT nextval(('Encargado_Empresa_idencargado_empresa_seq'::text)::regclass) NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    ci character varying(15) NOT NULL,
    email character varying(100) NOT NULL,
    telefono character varying(10),
    validacion integer,
    fecha_registro date NOT NULL,
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL
);
 %   DROP TABLE public.encargado_empresa;
       public         postgres    false    3            ?            1259    26342 )   encargado_empresa_idencargado_empresa_seq    SEQUENCE     ?   CREATE SEQUENCE public.encargado_empresa_idencargado_empresa_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 @   DROP SEQUENCE public.encargado_empresa_idencargado_empresa_seq;
       public       postgres    false    3            ?            1259    26353    encargado_sucursal    TABLE     ?  CREATE TABLE public.encargado_sucursal (
    idencargado_sucursal integer DEFAULT nextval(('Encargado_Sucursal_idencargado_sucursal_seq'::text)::regclass) NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    ci character varying(15) NOT NULL,
    email character varying(100) NOT NULL,
    telefono character varying(10),
    validacion integer,
    fecha_registro date NOT NULL,
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL
);
 &   DROP TABLE public.encargado_sucursal;
       public         postgres    false    3            ?            1259    26351 +   encargado_sucursal_idencargado_sucursal_seq    SEQUENCE     ?   CREATE SEQUENCE public.encargado_sucursal_idencargado_sucursal_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 B   DROP SEQUENCE public.encargado_sucursal_idencargado_sucursal_seq;
       public       postgres    false    3            ?            1259    26362    entrega_producto    TABLE       CREATE TABLE public.entrega_producto (
    identrega_producto integer DEFAULT nextval(('Entrega_Producto_identrega_producto_seq'::text)::regclass) NOT NULL,
    comentario character varying(250),
    valoracion integer,
    fecha date NOT NULL,
    fkidreserva integer NOT NULL
);
 $   DROP TABLE public.entrega_producto;
       public         postgres    false    3            ?            1259    26360 '   entrega_producto_identrega_producto_seq    SEQUENCE     ?   CREATE SEQUENCE public.entrega_producto_identrega_producto_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 >   DROP SEQUENCE public.entrega_producto_identrega_producto_seq;
       public       postgres    false    3            ?            1259    26538    failed_jobs    TABLE     ?   CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         postgres    false    3            ?            1259    26536    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public       postgres    false    226    3            ?           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
            public       postgres    false    225            ?            1259    26368    horario    TABLE     ?   CREATE TABLE public.horario (
    idhorario integer DEFAULT nextval(('Horario_idhorario_seq'::text)::regclass) NOT NULL,
    hora_apertura date NOT NULL,
    hora_cierre date NOT NULL,
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL
);
    DROP TABLE public.horario;
       public         postgres    false    3            ?            1259    28737    horario_empresa    TABLE     l   CREATE TABLE public.horario_empresa (
    fkidempresa integer NOT NULL,
    fkidhorario integer NOT NULL
);
 #   DROP TABLE public.horario_empresa;
       public         postgres    false    3            ?            1259    26366    horario_idhorario_seq    SEQUENCE     ~   CREATE SEQUENCE public.horario_idhorario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.horario_idhorario_seq;
       public       postgres    false    3            ?            1259    26510 
   migrations    TABLE     ?   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false    3            ?            1259    26508    migrations_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    3    221            ?           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
            public       postgres    false    220            ?            1259    26570    model_has_permissions    TABLE     ?   CREATE TABLE public.model_has_permissions (
    permission_id bigint NOT NULL,
    model_type character varying(255) NOT NULL,
    model_id bigint NOT NULL
);
 )   DROP TABLE public.model_has_permissions;
       public         postgres    false    3            ?            1259    26581    model_has_roles    TABLE     ?   CREATE TABLE public.model_has_roles (
    role_id bigint NOT NULL,
    model_type character varying(255) DEFAULT 'App\User'::character varying NOT NULL,
    model_id bigint NOT NULL
);
 #   DROP TABLE public.model_has_roles;
       public         postgres    false    3            ?            1259    26374    oferta_producto    TABLE     ?  CREATE TABLE public.oferta_producto (
    idoferta_producto integer DEFAULT nextval(('Oferta_Producto_idoferta_producto_seq'::text)::regclass) NOT NULL,
    cant_disp integer NOT NULL,
    precio real NOT NULL,
    fecha date NOT NULL,
    hora_inicio time(6) with time zone NOT NULL,
    hora_fin time(6) with time zone NOT NULL,
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL,
    fkidsucursal integer NOT NULL,
    fkidproducto integer NOT NULL
);
 #   DROP TABLE public.oferta_producto;
       public         postgres    false    3            ?            1259    26372 %   oferta_producto_idoferta_producto_seq    SEQUENCE     ?   CREATE SEQUENCE public.oferta_producto_idoferta_producto_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 <   DROP SEQUENCE public.oferta_producto_idoferta_producto_seq;
       public       postgres    false    3            ?            1259    26529    password_resets    TABLE     ?   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         postgres    false    3            ?            1259    26550    permissions    TABLE     ?   CREATE TABLE public.permissions (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.permissions;
       public         postgres    false    3            ?            1259    26548    permissions_id_seq    SEQUENCE     {   CREATE SEQUENCE public.permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.permissions_id_seq;
       public       postgres    false    228    3            ?           0    0    permissions_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.permissions_id_seq OWNED BY public.permissions.id;
            public       postgres    false    227            ?            1259    26380    producto    TABLE     t  CREATE TABLE public.producto (
    idproducto integer DEFAULT nextval(('Producto_idproducto_seq'::text)::regclass) NOT NULL,
    nombre character varying(50) NOT NULL,
    descripcion character varying(150),
    imagen character varying(250) NOT NULL,
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL,
    fkidcategoria integer NOT NULL,
    fkidempresa integer NOT NULL
);
    DROP TABLE public.producto;
       public         postgres    false    3            ?            1259    26378    producto_idproducto_seq    SEQUENCE     ?   CREATE SEQUENCE public.producto_idproducto_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.producto_idproducto_seq;
       public       postgres    false    3            ?            1259    26386    reserva    TABLE     ?  CREATE TABLE public.reserva (
    idreserva integer DEFAULT nextval(('Reserva_idreserva_seq'::text)::regclass) NOT NULL,
    cantidad integer NOT NULL,
    mont_tot real NOT NULL,
    fecha date NOT NULL,
    est_reser character varying(10) NOT NULL,
    cod_seg character varying(100) NOT NULL,
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL,
    fkidcliente integer NOT NULL,
    fkidoferta_producto integer NOT NULL
);
    DROP TABLE public.reserva;
       public         postgres    false    3            ?            1259    26384    reserva_idreserva_seq    SEQUENCE     ~   CREATE SEQUENCE public.reserva_idreserva_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.reserva_idreserva_seq;
       public       postgres    false    3            ?            1259    26592    role_has_permissions    TABLE     m   CREATE TABLE public.role_has_permissions (
    permission_id bigint NOT NULL,
    role_id bigint NOT NULL
);
 (   DROP TABLE public.role_has_permissions;
       public         postgres    false    3            ?            1259    26561    roles    TABLE       CREATE TABLE public.roles (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    guard_name character varying(255) DEFAULT 'web'::character varying NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.roles;
       public         postgres    false    3            ?            1259    26559    roles_id_seq    SEQUENCE     u   CREATE SEQUENCE public.roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.roles_id_seq;
       public       postgres    false    230    3            ?           0    0    roles_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.roles_id_seq OWNED BY public.roles.id;
            public       postgres    false    229            ?            1259    26392    sucursal    TABLE     ?  CREATE TABLE public.sucursal (
    idsucursal integer DEFAULT nextval(('Sucursal_idsucursal_seq'::text)::regclass) NOT NULL,
    nombre character varying(50) NOT NULL,
    direccion character varying(100) NOT NULL,
    telefono character varying(10) NOT NULL,
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL,
    fkidencargado_empresa integer NOT NULL,
    fkidencargado_sucursal integer NOT NULL,
    latitud character varying(200),
    longitud character varying(200)
);
    DROP TABLE public.sucursal;
       public         postgres    false    3            ?            1259    26390    sucursal_idsucursal_seq    SEQUENCE     ?   CREATE SEQUENCE public.sucursal_idsucursal_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.sucursal_idsucursal_seq;
       public       postgres    false    3            ?            1259    28766    sucursal_producto    TABLE     p   CREATE TABLE public.sucursal_producto (
    fkidsucursal integer NOT NULL,
    fkidproducto integer NOT NULL
);
 %   DROP TABLE public.sucursal_producto;
       public         postgres    false    3            ?            1259    26404    suscripcion    TABLE     +  CREATE TABLE public.suscripcion (
    idsuscripcion integer DEFAULT nextval(('Suscripcion_idsuscripcion_seq'::text)::regclass) NOT NULL,
    fecha date NOT NULL,
    estado bit(1) DEFAULT B'1'::"bit" NOT NULL,
    fkidcliente integer NOT NULL,
    fkidcategoria integer,
    fkidproducto integer
);
    DROP TABLE public.suscripcion;
       public         postgres    false    3            ?            1259    26402    suscripcion_idsuscripcion_seq    SEQUENCE     ?   CREATE SEQUENCE public.suscripcion_idsuscripcion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.suscripcion_idsuscripcion_seq;
       public       postgres    false    3            ?            1259    26518    users    TABLE     ?  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    fkidencargado_sucursal integer,
    fkidencargado_empresa integer
);
    DROP TABLE public.users;
       public         postgres    false    3            ?            1259    26516    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       postgres    false    3    223            ?           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
            public       postgres    false    222            ?           2604    26541    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    225    226    226            ?           2604    26513    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    220    221    221            ?           2604    26553    permissions id    DEFAULT     p   ALTER TABLE ONLY public.permissions ALTER COLUMN id SET DEFAULT nextval('public.permissions_id_seq'::regclass);
 =   ALTER TABLE public.permissions ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    228    227    228            ?           2604    26564    roles id    DEFAULT     d   ALTER TABLE ONLY public.roles ALTER COLUMN id SET DEFAULT nextval('public.roles_id_seq'::regclass);
 7   ALTER TABLE public.roles ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    230    229    230            ?           2604    26521    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    222    223    223            j          0    26320 	   categoria 
   TABLE DATA               U   COPY public.categoria (idcategoria, nombre, descripcion, estado, imagen) FROM stdin;
    public       postgres    false    197   9?       l          0    26326    cliente 
   TABLE DATA               ?   COPY public.cliente (idcliente, nombre, apellido, sexo, direccion, telefono, email, username, password, token, estado, latitud, longitud) FROM stdin;
    public       postgres    false    199   Ӻ       n          0    26335    empresa 
   TABLE DATA               ?   COPY public.empresa (idempresa, razon_social, direccion, email, mision, vision, slogan, imagen, telefono, sitio_web, estado, fkidencargado_empresa) FROM stdin;
    public       postgres    false    201   ??       p          0    26344    encargado_empresa 
   TABLE DATA               ?   COPY public.encargado_empresa (idencargado_empresa, nombre, apellido, ci, email, telefono, validacion, fecha_registro, estado) FROM stdin;
    public       postgres    false    203   5?       r          0    26353    encargado_sucursal 
   TABLE DATA               ?   COPY public.encargado_sucursal (idencargado_sucursal, nombre, apellido, ci, email, telefono, validacion, fecha_registro, estado) FROM stdin;
    public       postgres    false    205   ??       t          0    26362    entrega_producto 
   TABLE DATA               j   COPY public.entrega_producto (identrega_producto, comentario, valoracion, fecha, fkidreserva) FROM stdin;
    public       postgres    false    207   ?       ?          0    26538    failed_jobs 
   TABLE DATA               [   COPY public.failed_jobs (id, connection, queue, payload, exception, failed_at) FROM stdin;
    public       postgres    false    226   r?       v          0    26368    horario 
   TABLE DATA               P   COPY public.horario (idhorario, hora_apertura, hora_cierre, estado) FROM stdin;
    public       postgres    false    209   ??       ?          0    28737    horario_empresa 
   TABLE DATA               C   COPY public.horario_empresa (fkidempresa, fkidhorario) FROM stdin;
    public       postgres    false    234   ??       ?          0    26510 
   migrations 
   TABLE DATA               :   COPY public.migrations (id, migration, batch) FROM stdin;
    public       postgres    false    221   ɾ       ?          0    26570    model_has_permissions 
   TABLE DATA               T   COPY public.model_has_permissions (permission_id, model_type, model_id) FROM stdin;
    public       postgres    false    231   P?       ?          0    26581    model_has_roles 
   TABLE DATA               H   COPY public.model_has_roles (role_id, model_type, model_id) FROM stdin;
    public       postgres    false    232   m?       x          0    26374    oferta_producto 
   TABLE DATA               ?   COPY public.oferta_producto (idoferta_producto, cant_disp, precio, fecha, hora_inicio, hora_fin, estado, fkidsucursal, fkidproducto) FROM stdin;
    public       postgres    false    211   ??       ?          0    26529    password_resets 
   TABLE DATA               C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public       postgres    false    224   ??       ?          0    26550    permissions 
   TABLE DATA               S   COPY public.permissions (id, name, guard_name, created_at, updated_at) FROM stdin;
    public       postgres    false    228    ?       z          0    26380    producto 
   TABLE DATA               o   COPY public.producto (idproducto, nombre, descripcion, imagen, estado, fkidcategoria, fkidempresa) FROM stdin;
    public       postgres    false    213   ??       |          0    26386    reserva 
   TABLE DATA               ?   COPY public.reserva (idreserva, cantidad, mont_tot, fecha, est_reser, cod_seg, estado, fkidcliente, fkidoferta_producto) FROM stdin;
    public       postgres    false    215   a?       ?          0    26592    role_has_permissions 
   TABLE DATA               F   COPY public.role_has_permissions (permission_id, role_id) FROM stdin;
    public       postgres    false    233   ??       ?          0    26561    roles 
   TABLE DATA               M   COPY public.roles (id, name, guard_name, created_at, updated_at) FROM stdin;
    public       postgres    false    230   ??       ~          0    26392    sucursal 
   TABLE DATA               ?   COPY public.sucursal (idsucursal, nombre, direccion, telefono, estado, fkidencargado_empresa, fkidencargado_sucursal, latitud, longitud) FROM stdin;
    public       postgres    false    217   D?       ?          0    28766    sucursal_producto 
   TABLE DATA               G   COPY public.sucursal_producto (fkidsucursal, fkidproducto) FROM stdin;
    public       postgres    false    235   ??       ?          0    26404    suscripcion 
   TABLE DATA               m   COPY public.suscripcion (idsuscripcion, fecha, estado, fkidcliente, fkidcategoria, fkidproducto) FROM stdin;
    public       postgres    false    219   ??       ?          0    26518    users 
   TABLE DATA               ?   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, fkidencargado_sucursal, fkidencargado_empresa) FROM stdin;
    public       postgres    false    223   ?       ?           0    0    categoria_idcategoria_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.categoria_idcategoria_seq', 1, true);
            public       postgres    false    196            ?           0    0    cliente_idcliente_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.cliente_idcliente_seq', 3, true);
            public       postgres    false    198            ?           0    0    empresa_idempresa_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.empresa_idempresa_seq', 1, true);
            public       postgres    false    200            ?           0    0 )   encargado_empresa_idencargado_empresa_seq    SEQUENCE SET     W   SELECT pg_catalog.setval('public.encargado_empresa_idencargado_empresa_seq', 2, true);
            public       postgres    false    202            ?           0    0 +   encargado_sucursal_idencargado_sucursal_seq    SEQUENCE SET     Y   SELECT pg_catalog.setval('public.encargado_sucursal_idencargado_sucursal_seq', 5, true);
            public       postgres    false    204            ?           0    0 '   entrega_producto_identrega_producto_seq    SEQUENCE SET     U   SELECT pg_catalog.setval('public.entrega_producto_identrega_producto_seq', 4, true);
            public       postgres    false    206            ?           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
            public       postgres    false    225            ?           0    0    horario_idhorario_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.horario_idhorario_seq', 1, false);
            public       postgres    false    208            ?           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 4, true);
            public       postgres    false    220            ?           0    0 %   oferta_producto_idoferta_producto_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.oferta_producto_idoferta_producto_seq', 1, true);
            public       postgres    false    210            ?           0    0    permissions_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.permissions_id_seq', 81, true);
            public       postgres    false    227            ?           0    0    producto_idproducto_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.producto_idproducto_seq', 8, true);
            public       postgres    false    212            ?           0    0    reserva_idreserva_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.reserva_idreserva_seq', 8, true);
            public       postgres    false    214            ?           0    0    roles_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.roles_id_seq', 5, true);
            public       postgres    false    229            ?           0    0    sucursal_idsucursal_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.sucursal_idsucursal_seq', 2, true);
            public       postgres    false    216            ?           0    0    suscripcion_idsuscripcion_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.suscripcion_idsuscripcion_seq', 6, true);
            public       postgres    false    218            ?           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 5, true);
            public       postgres    false    222            ?           2606    26547    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public         postgres    false    226            ?           2606    26515    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public         postgres    false    221            ?           2606    26580 0   model_has_permissions model_has_permissions_pkey 
   CONSTRAINT     ?   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_pkey PRIMARY KEY (permission_id, model_id, model_type);
 Z   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_pkey;
       public         postgres    false    231    231    231            ?           2606    28760 $   model_has_roles model_has_roles_pkey 
   CONSTRAINT     }   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_pkey PRIMARY KEY (role_id, model_id, model_type);
 N   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_pkey;
       public         postgres    false    232    232    232            ?           2606    26558    permissions permissions_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_pkey;
       public         postgres    false    228            ?           2606    26409    categoria pk_categoria 
   CONSTRAINT     ]   ALTER TABLE ONLY public.categoria
    ADD CONSTRAINT pk_categoria PRIMARY KEY (idcategoria);
 @   ALTER TABLE ONLY public.categoria DROP CONSTRAINT pk_categoria;
       public         postgres    false    197            ?           2606    26411    cliente pk_cliente 
   CONSTRAINT     W   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT pk_cliente PRIMARY KEY (idcliente);
 <   ALTER TABLE ONLY public.cliente DROP CONSTRAINT pk_cliente;
       public         postgres    false    199            ?           2606    26413    empresa pk_empresa 
   CONSTRAINT     W   ALTER TABLE ONLY public.empresa
    ADD CONSTRAINT pk_empresa PRIMARY KEY (idempresa);
 <   ALTER TABLE ONLY public.empresa DROP CONSTRAINT pk_empresa;
       public         postgres    false    201            ?           2606    26415 &   encargado_empresa pk_encargado_empresa 
   CONSTRAINT     u   ALTER TABLE ONLY public.encargado_empresa
    ADD CONSTRAINT pk_encargado_empresa PRIMARY KEY (idencargado_empresa);
 P   ALTER TABLE ONLY public.encargado_empresa DROP CONSTRAINT pk_encargado_empresa;
       public         postgres    false    203            ?           2606    26417 (   encargado_sucursal pk_encargado_sucursal 
   CONSTRAINT     x   ALTER TABLE ONLY public.encargado_sucursal
    ADD CONSTRAINT pk_encargado_sucursal PRIMARY KEY (idencargado_sucursal);
 R   ALTER TABLE ONLY public.encargado_sucursal DROP CONSTRAINT pk_encargado_sucursal;
       public         postgres    false    205            ?           2606    26419 $   entrega_producto pk_entrega_producto 
   CONSTRAINT     r   ALTER TABLE ONLY public.entrega_producto
    ADD CONSTRAINT pk_entrega_producto PRIMARY KEY (identrega_producto);
 N   ALTER TABLE ONLY public.entrega_producto DROP CONSTRAINT pk_entrega_producto;
       public         postgres    false    207            ?           2606    26421    horario pk_horario 
   CONSTRAINT     W   ALTER TABLE ONLY public.horario
    ADD CONSTRAINT pk_horario PRIMARY KEY (idhorario);
 <   ALTER TABLE ONLY public.horario DROP CONSTRAINT pk_horario;
       public         postgres    false    209            ?           2606    26423 "   oferta_producto pk_oferta_producto 
   CONSTRAINT     o   ALTER TABLE ONLY public.oferta_producto
    ADD CONSTRAINT pk_oferta_producto PRIMARY KEY (idoferta_producto);
 L   ALTER TABLE ONLY public.oferta_producto DROP CONSTRAINT pk_oferta_producto;
       public         postgres    false    211            ?           2606    26425    producto pk_producto 
   CONSTRAINT     Z   ALTER TABLE ONLY public.producto
    ADD CONSTRAINT pk_producto PRIMARY KEY (idproducto);
 >   ALTER TABLE ONLY public.producto DROP CONSTRAINT pk_producto;
       public         postgres    false    213            ?           2606    26427    reserva pk_reserva 
   CONSTRAINT     W   ALTER TABLE ONLY public.reserva
    ADD CONSTRAINT pk_reserva PRIMARY KEY (idreserva);
 <   ALTER TABLE ONLY public.reserva DROP CONSTRAINT pk_reserva;
       public         postgres    false    215            ?           2606    26429    sucursal pk_sucursal 
   CONSTRAINT     Z   ALTER TABLE ONLY public.sucursal
    ADD CONSTRAINT pk_sucursal PRIMARY KEY (idsucursal);
 >   ALTER TABLE ONLY public.sucursal DROP CONSTRAINT pk_sucursal;
       public         postgres    false    217            ?           2606    26431    suscripcion pk_suscripcion 
   CONSTRAINT     c   ALTER TABLE ONLY public.suscripcion
    ADD CONSTRAINT pk_suscripcion PRIMARY KEY (idsuscripcion);
 D   ALTER TABLE ONLY public.suscripcion DROP CONSTRAINT pk_suscripcion;
       public         postgres    false    219            ?           2606    26606 .   role_has_permissions role_has_permissions_pkey 
   CONSTRAINT     ?   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_pkey PRIMARY KEY (permission_id, role_id);
 X   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_pkey;
       public         postgres    false    233    233            ?           2606    26569    roles roles_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.roles DROP CONSTRAINT roles_pkey;
       public         postgres    false    230            ?           2606    26528    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public         postgres    false    223            ?           2606    26526    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public         postgres    false    223            ?           1259    26573 /   model_has_permissions_model_id_model_type_index    INDEX     ?   CREATE INDEX model_has_permissions_model_id_model_type_index ON public.model_has_permissions USING btree (model_id, model_type);
 C   DROP INDEX public.model_has_permissions_model_id_model_type_index;
       public         postgres    false    231    231            ?           1259    28761 )   model_has_roles_model_id_model_type_index    INDEX     u   CREATE INDEX model_has_roles_model_id_model_type_index ON public.model_has_roles USING btree (model_id, model_type);
 =   DROP INDEX public.model_has_roles_model_id_model_type_index;
       public         postgres    false    232    232            ?           1259    26535    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public         postgres    false    224            ?           2606    26432 $   empresa fk_empresa_encargado_empresa    FK CONSTRAINT     ?   ALTER TABLE ONLY public.empresa
    ADD CONSTRAINT fk_empresa_encargado_empresa FOREIGN KEY (fkidencargado_empresa) REFERENCES public.encargado_empresa(idencargado_empresa);
 N   ALTER TABLE ONLY public.empresa DROP CONSTRAINT fk_empresa_encargado_empresa;
       public       postgres    false    2995    203    201            ?           2606    26442 ,   entrega_producto fk_entrega_producto_reserva    FK CONSTRAINT     ?   ALTER TABLE ONLY public.entrega_producto
    ADD CONSTRAINT fk_entrega_producto_reserva FOREIGN KEY (fkidreserva) REFERENCES public.reserva(idreserva);
 V   ALTER TABLE ONLY public.entrega_producto DROP CONSTRAINT fk_entrega_producto_reserva;
       public       postgres    false    215    207    3007            ?           2606    26447 +   oferta_producto fk_oferta_producto_producto    FK CONSTRAINT     ?   ALTER TABLE ONLY public.oferta_producto
    ADD CONSTRAINT fk_oferta_producto_producto FOREIGN KEY (fkidproducto) REFERENCES public.producto(idproducto);
 U   ALTER TABLE ONLY public.oferta_producto DROP CONSTRAINT fk_oferta_producto_producto;
       public       postgres    false    211    213    3005            ?           2606    26452 +   oferta_producto fk_oferta_producto_sucursal    FK CONSTRAINT     ?   ALTER TABLE ONLY public.oferta_producto
    ADD CONSTRAINT fk_oferta_producto_sucursal FOREIGN KEY (fkidsucursal) REFERENCES public.sucursal(idsucursal);
 U   ALTER TABLE ONLY public.oferta_producto DROP CONSTRAINT fk_oferta_producto_sucursal;
       public       postgres    false    211    217    3009            ?           2606    26457    producto fk_producto_categoria    FK CONSTRAINT     ?   ALTER TABLE ONLY public.producto
    ADD CONSTRAINT fk_producto_categoria FOREIGN KEY (fkidcategoria) REFERENCES public.categoria(idcategoria);
 H   ALTER TABLE ONLY public.producto DROP CONSTRAINT fk_producto_categoria;
       public       postgres    false    197    213    2989            ?           2606    26462    reserva fk_reserva_cliente    FK CONSTRAINT     ?   ALTER TABLE ONLY public.reserva
    ADD CONSTRAINT fk_reserva_cliente FOREIGN KEY (fkidcliente) REFERENCES public.cliente(idcliente);
 D   ALTER TABLE ONLY public.reserva DROP CONSTRAINT fk_reserva_cliente;
       public       postgres    false    2991    215    199            ?           2606    26467 "   reserva fk_reserva_oferta_producto    FK CONSTRAINT     ?   ALTER TABLE ONLY public.reserva
    ADD CONSTRAINT fk_reserva_oferta_producto FOREIGN KEY (fkidoferta_producto) REFERENCES public.oferta_producto(idoferta_producto);
 L   ALTER TABLE ONLY public.reserva DROP CONSTRAINT fk_reserva_oferta_producto;
       public       postgres    false    211    215    3003            ?           2606    26472 &   sucursal fk_sucursal_encargado_empresa    FK CONSTRAINT     ?   ALTER TABLE ONLY public.sucursal
    ADD CONSTRAINT fk_sucursal_encargado_empresa FOREIGN KEY (fkidencargado_empresa) REFERENCES public.encargado_empresa(idencargado_empresa);
 P   ALTER TABLE ONLY public.sucursal DROP CONSTRAINT fk_sucursal_encargado_empresa;
       public       postgres    false    203    217    2995            ?           2606    26477 '   sucursal fk_sucursal_encargado_sucursal    FK CONSTRAINT     ?   ALTER TABLE ONLY public.sucursal
    ADD CONSTRAINT fk_sucursal_encargado_sucursal FOREIGN KEY (fkidencargado_sucursal) REFERENCES public.encargado_sucursal(idencargado_sucursal);
 Q   ALTER TABLE ONLY public.sucursal DROP CONSTRAINT fk_sucursal_encargado_sucursal;
       public       postgres    false    205    217    2997            ?           2606    26492 $   suscripcion fk_suscripcion_categoria    FK CONSTRAINT     ?   ALTER TABLE ONLY public.suscripcion
    ADD CONSTRAINT fk_suscripcion_categoria FOREIGN KEY (fkidcategoria) REFERENCES public.categoria(idcategoria);
 N   ALTER TABLE ONLY public.suscripcion DROP CONSTRAINT fk_suscripcion_categoria;
       public       postgres    false    197    219    2989            ?           2606    26497 "   suscripcion fk_suscripcion_cliente    FK CONSTRAINT     ?   ALTER TABLE ONLY public.suscripcion
    ADD CONSTRAINT fk_suscripcion_cliente FOREIGN KEY (fkidcliente) REFERENCES public.cliente(idcliente);
 L   ALTER TABLE ONLY public.suscripcion DROP CONSTRAINT fk_suscripcion_cliente;
       public       postgres    false    199    219    2991            ?           2606    26502 #   suscripcion fk_suscripcion_producto    FK CONSTRAINT     ?   ALTER TABLE ONLY public.suscripcion
    ADD CONSTRAINT fk_suscripcion_producto FOREIGN KEY (fkidproducto) REFERENCES public.producto(idproducto);
 M   ALTER TABLE ONLY public.suscripcion DROP CONSTRAINT fk_suscripcion_producto;
       public       postgres    false    3005    219    213            ?           2606    28740 0   horario_empresa horario_empresa_fkidempresa_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.horario_empresa
    ADD CONSTRAINT horario_empresa_fkidempresa_fkey FOREIGN KEY (fkidempresa) REFERENCES public.empresa(idempresa) NOT VALID;
 Z   ALTER TABLE ONLY public.horario_empresa DROP CONSTRAINT horario_empresa_fkidempresa_fkey;
       public       postgres    false    2993    234    201            ?           2606    28745 0   horario_empresa horario_empresa_fkidhorario_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.horario_empresa
    ADD CONSTRAINT horario_empresa_fkidhorario_fkey FOREIGN KEY (fkidhorario) REFERENCES public.horario(idhorario) NOT VALID;
 Z   ALTER TABLE ONLY public.horario_empresa DROP CONSTRAINT horario_empresa_fkidhorario_fkey;
       public       postgres    false    234    209    3001            ?           2606    26574 A   model_has_permissions model_has_permissions_permission_id_foreign    FK CONSTRAINT     ?   ALTER TABLE ONLY public.model_has_permissions
    ADD CONSTRAINT model_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 k   ALTER TABLE ONLY public.model_has_permissions DROP CONSTRAINT model_has_permissions_permission_id_foreign;
       public       postgres    false    3022    231    228            ?           2606    26585 /   model_has_roles model_has_roles_role_id_foreign    FK CONSTRAINT     ?   ALTER TABLE ONLY public.model_has_roles
    ADD CONSTRAINT model_has_roles_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 Y   ALTER TABLE ONLY public.model_has_roles DROP CONSTRAINT model_has_roles_role_id_foreign;
       public       postgres    false    230    232    3024            ?           2606    28721 "   producto producto_fkidempresa_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.producto
    ADD CONSTRAINT producto_fkidempresa_fkey FOREIGN KEY (fkidempresa) REFERENCES public.empresa(idempresa) NOT VALID;
 L   ALTER TABLE ONLY public.producto DROP CONSTRAINT producto_fkidempresa_fkey;
       public       postgres    false    2993    201    213            ?           2606    26595 ?   role_has_permissions role_has_permissions_permission_id_foreign    FK CONSTRAINT     ?   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_permission_id_foreign FOREIGN KEY (permission_id) REFERENCES public.permissions(id) ON DELETE CASCADE;
 i   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_permission_id_foreign;
       public       postgres    false    228    233    3022            ?           2606    26600 9   role_has_permissions role_has_permissions_role_id_foreign    FK CONSTRAINT     ?   ALTER TABLE ONLY public.role_has_permissions
    ADD CONSTRAINT role_has_permissions_role_id_foreign FOREIGN KEY (role_id) REFERENCES public.roles(id) ON DELETE CASCADE;
 c   ALTER TABLE ONLY public.role_has_permissions DROP CONSTRAINT role_has_permissions_role_id_foreign;
       public       postgres    false    3024    230    233            ?           2606    28774 5   sucursal_producto sucursal_producto_fkidproducto_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.sucursal_producto
    ADD CONSTRAINT sucursal_producto_fkidproducto_fkey FOREIGN KEY (fkidproducto) REFERENCES public.producto(idproducto);
 _   ALTER TABLE ONLY public.sucursal_producto DROP CONSTRAINT sucursal_producto_fkidproducto_fkey;
       public       postgres    false    3005    235    213            ?           2606    28769 5   sucursal_producto sucursal_producto_fkidsucursal_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.sucursal_producto
    ADD CONSTRAINT sucursal_producto_fkidsucursal_fkey FOREIGN KEY (fkidsucursal) REFERENCES public.sucursal(idsucursal);
 _   ALTER TABLE ONLY public.sucursal_producto DROP CONSTRAINT sucursal_producto_fkidsucursal_fkey;
       public       postgres    false    217    235    3009            ?           2606    26612 &   users users_fkidencargado_empresa_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_fkidencargado_empresa_fkey FOREIGN KEY (fkidencargado_empresa) REFERENCES public.encargado_empresa(idencargado_empresa) NOT VALID;
 P   ALTER TABLE ONLY public.users DROP CONSTRAINT users_fkidencargado_empresa_fkey;
       public       postgres    false    223    2995    203            ?           2606    26607 '   users users_fkidencargado_sucursal_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_fkidencargado_sucursal_fkey FOREIGN KEY (fkidencargado_sucursal) REFERENCES public.encargado_sucursal(idencargado_sucursal) NOT VALID;
 Q   ALTER TABLE ONLY public.users DROP CONSTRAINT users_fkidencargado_sucursal_fkey;
       public       postgres    false    2997    205    223            j   ?   x?5?M
?0@?ur?? 3??i?
.E\eH?N?IhF??v??}<?Ny??̍?u?*???l?u??6?s5?6??P???z??z???q?????B?nl;S`????????v@?4????G{7LC?}ڥ<??j? ?/o      l   ?  x?MPێ?@|??_E???t@D??????p..??D?????dS?Jw??Uih%?C ???N??@>3?1???l?e??Yu?bܝ??ys?yZ??4k?:Z?_?K?t???с.??L?"??f8*?T?=K?X????ƹ?ftP?_?o??Y?7n֣O???<??Ro??V???????Z?D?R?G+7???!?? 
???P^bB??????rҡ?#?e ?? p??Ҽ? )??/??=??uNO?y????eӆqO??<ukW?g???G?????o+?O????#????????p??=?厨v˞?Y?$??I?(?2_????????|^??>r??)??{M?????1whC?T?$?.?ʓ???????'+??-?8?^[_e(o???:?,f??	?h4G???	?ҐC?eFz4?탥e      n   ?   x?E??
1E??W??]?;?,+?1;??<?<?????\8?3¹&?	?,??/?T?SxgG?Dx?ħG?I?6?C?"?E????8?Pr????;&d?$΄3c7d&L???c?h?K? ?,???a:l'h??qm??Q????:r      p   a   x??;?  й??HZ?"?&?z"?!?3?Oo|?3???$wK?'ݰK???&Q??h@?? ?M?????*!e}?nDd?0 $ߓ?? ?C+?>)??      r   ^   x?3???/NU?L?K-????,?ɩTp.*??442615?L.?/.N.-)140pH?M???K???4??00517?4?420??54?50?4?????? ?uX      t   N   x?3?tJ,.I?+IUHI??L??/??4?420??54?50?4?2?t*M??,??E?2???2???!??9P??`? ??      ?      x?????? ? ?      v      x?????? ? ?      ?      x?????? ? ?      ?   w   x?U???0??k?0f?3໘???0????IDzѫ?䧆=?1??pW?E?2QC??$9??t??h??:@Ť???:??wX?a??i?c?w6^\;m???+???,?e?V????? zh:*      ?      x?????? ? ?      ?   $   x?3?t,(??	-N-?4?2A?s?"?L?b???? Bo?      x   2   x?Ǳ  ?:삗?2??ϡ??B"??
?|,f????~?ig???Zi      ?      x?????? ? ?      ?   ?  x???뎣8?s?b^`F?x??F,??"??Iv_?V\????:e?T???>???<??q:/??_?Q????Oe~(??{?1?M<?ӰrZ?+?1?M;?͗?X3b??6??tN???n9?}???????q??Xޮ???s?L?"??5??8????ki<??G?=e?j-,3?Ġ5??^???a??????܄?b????????|??y8	V???ȒG?K$x?Ǡ?G2??AG.??v?E6wQ?NI????r?k?Y?a??c???`Ԧ??zS?"1???n??GYb0fSRh?????}p?7???,??y?9Co???h=mI??-3??<oD
-?Xf?z??~)????m?Jӥ?????t?8\??e??S?ҵsl??@???U???(3PG???????`?7?`?.O??`??	j?????J??x?-???c????U?Lyfdvu?>???9??????{{<725?>?`^??9?5???z???!ݷE	?SE???tG???.???TB??)??z?pt???%M??C???^8!??̚<?)?.??.??٢???M]-J?۔cpa׋ˋ)3????"??f???̏?c???]C??i?W??e\O^m??o-S??@wqݷ?6!?@???Z??e?????>??[????k??L?O?o?Q{R?M]???U?1???M\??"????j??????o???(??J?0??y\??q^>???)??z? ???)?A?$?<,???!??u?*??3C????{?⏻/3׬?i:?]??b?d??oښ)???!????Źc?f?oZѳ??*3??>??VQ????kZ???".?ϋ?ծ??????݉!?ora??ܶ?!?=A??Z,>1D???????ix?\?W???"?23D???????/3İ?%?˺?\????uf?%????e??b???????}???^k????xz?s,}??'|??I*bOmz?xchu?1???Qh(?\???sg????2r?      z   U  x?͑MN?0F??)| ??6MKHl?"Ǚ&?cl???7-??@^?h?????<???B?ATd7????QN?!%o?0???GQt??7Rh???<????(ײ)??????8?EI?????s
أ????k???IH??)(?????&??!??Z?Ϥ0m???R?f?͞;H?,tUk???a?m?0???;?I?? nsJHM=m?A?X????\?(bR?h?KQԲ?ʒ?J?cz??3??#????|?]W???l|?;?{g?ͷ??????	??Έ_?Q???0?!?l?f?????	???c&)?????=d"sgYI?c?rU-????\DS?#??X,? ?#?h      |   F   x?3?4?44?4200?54?5??I-???KL??4(L	??4)?4A.<??rJ?|?,?K*??c???? ?6      ?   ?   x?%??q?0D??	?eI3????a?=?bA͇W;??5????g?Y?Y??~?5~??mþa??s?:?0?ILb???$&1?ILb?X???X?"??E?"??B??{?
U?T?R}??(Q?D?Mlb???~;???&q?C??͈C???4???0F?h?a4???0F?h?"U??T?*???Ϭ??Q7??6b??8????W?
??q??
\?+p?ն?VۚXsz?j????????r????????C?X?      ?   p   x?3?tL????,.)JL?/?,OM?420??54?50R00?22?25?&?e?隗?X?Ԩ?????[P?Z???+#Slb\??F?&?'?`1?????M????Ȅ+F??? ?04      ~   a   x??;?  й???XJ???.&?.??1QcPO?{??7?8?׆cYJ~ҁ㑾?>???~w=?????N??????5]?`kv?V???1??      ?      x?3?4?2?4bS 6bs ??????? 5??      ?   !   x?3?4200?54?5??4??Nc?=... ??C      ?   ?  x?m?ˎ?0 E??.?Zh\??h7k?
?F??3??ܜ?.nNr?GrNE???+e?lT????~g?$2S?Xi?{?͹f?ݨ4??D 3'2W?U.?e;?*??^??-?B?n-P???R-e,+ڈ8??YIβ??K]C]?W?8?בqws<?AO?=74?X????u??[zWm??L?=??????
??x??ҡӂ???hu??1???A^??t?s0?v?)kjJ_??1??]H???KJ???WH~ۅ??x?4ř[???1?2>???2????,?C2=\???w??כ?-PU??|[     