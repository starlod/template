use tmp

-- media
DROP TABLE IF EXISTS media CASCADE;
CREATE TABLE media (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    name   varchar(255),
    url    varchar(255),
    image  varchar(255),
    target varchar(25),
    rating int(11) DEFAULT 0,
    description varchar(255),
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS options CASCADE;
CREATE TABLE options (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    name varchar(64) NOT NULL DEFAULT '',
    value longtext NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY option_name (name)
);

INSERT INTO options(name, value) VALUES('siteurl', 'http://localhost:8888');
INSERT INTO options(name, value) VALUES('home', 'http://localhost:8888');
INSERT INTO options(name, value) VALUES('blogname', 'template');
INSERT INTO options(name, value) VALUES('blogdescription', 'template');
INSERT INTO options(name, value) VALUES('posts_per_rss', '10');
INSERT INTO options(name, value) VALUES('posts_per_page', '10');



DROP TABLE IF EXISTS register CASCADE;
CREATE TABLE register (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    name varchar(64) DEFAULT '',
    first_name varchar(64) DEFAULT '',
    last_name varchar(64) DEFAULT '',
    first_name_kana varchar(64) DEFAULT '',
    last_name_kana varchar(64) DEFAULT '',
    first_name_en varchar(64) DEFAULT '',
    last_name_en varchar(64) DEFAULT '',
    nickname varchar(64) DEFAULT '',
    site_url varchar(255) DEFAULT '',
    feed_url varchar(255) DEFAULT '',
    twitter varchar(255) DEFAULT '',
    ameba varchar(255) DEFAULT '',
    facebook varchar(255) DEFAULT '',
    email varchar(255) DEFAULT '',
    remarks longtext DEFAULT '',
    created_by bigint(20) DEFAULT 0,
    updated_by bigint(20) DEFAULT 0,
    created_at datetime,
    updated_at datetime,
    deleted_at datetime,
    primary key(id)
);


DROP TABLE IF EXISTS user CASCADE;
CREATE TABLE user (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    user_id varchar(64) NOT NULL DEFAULT '',
    password varchar(64) NOT NULL DEFAULT '',
    first_name varchar(64) DEFAULT '',
    last_name varchar(64) DEFAULT '',
    email varchar(255) DEFAULT '',

    value longtext NOT NULL,

);

