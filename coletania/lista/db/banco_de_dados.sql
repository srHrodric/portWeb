create table tb_usuarios(
	id int not null primary key auto_increment,
	nome varchar(50) not null,
	email varchar(100) not null,
	senha varchar(32) not null
);

create table tb_status(
	id int not null primary key auto_increment,
    status varchar(25) not null
);

insert into tb_status(status)values('not_ok');
insert into tb_status(status)values('ok');

create table tb_tarefas(
	id int not null primary key auto_increment,
    id_status int not null default 1,
    foreign key(id_status) references tb_status(id),
	tarefa text not null,
    data_cadastrado datetime not null default current_timestamp
)