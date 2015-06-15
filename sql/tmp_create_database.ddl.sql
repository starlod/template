DROP DATABASE IF EXISTS tmp;
create database tmp;
drop user tmp_user@localhost;
grant all privileges on tmp.* to val_user@localhost identified by 'tmp_user';
