CREATE TABLE IF NOT EXISTS public.users (
    id uuid NOT NULL PRIMARY KEY DEFAULT gen_random_uuid(),
    first_name varchar(255) NOT NULL,
    middle_name varchar(255),
    last_name varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    "role" varchar(255) NOT NULL
);