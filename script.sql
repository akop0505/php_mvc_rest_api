create table users
(
    id         int auto_increment
        primary key,
    first_name varchar(100) not null,
    last_name  varchar(100) null,
    email      varchar(100) null,
    username   varchar(255) null,
    password   varchar(255) not null,
    constraint users_username_uindex
        unique (username)
);

create table user_auth
(
    id         bigint auto_increment
        primary key,
    user_id    int                                 not null,
    token      text                                not null,
    active     smallint(6)                         null,
    created_at timestamp default CURRENT_TIMESTAMP null,
    constraint user_auth_users_id_fk
        foreign key (user_id) references users (id)
            on update cascade on delete cascade
);


