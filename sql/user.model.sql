CREATE TABLE public IF NOT EXISTS "User_Info" (
    "ID" int NOT NULL PRIMARY KEY,
    username varchar(256) NOT NULL,
    password varchar(256) NOT NULL,
    "First_name" varchar(256) NOT NULL,
    "Middle_name" varchar(256),
    "Last_name" varchar(256) NOT NULL,
    email varchar(256) NOT NULL
);