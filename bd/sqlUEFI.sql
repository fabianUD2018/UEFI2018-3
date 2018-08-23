/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     27/04/2018 9:27:18 a. m.                     */
/*==============================================================*/


drop table if exists convenios;

drop table if exists formapago;

drop table if exists imagen;

drop table if exists imgprogaca_progaca;

drop table if exists personainscrita;

drop table if exists programaacademico;

drop table if exists tipodocumento;

drop table if exists tipoestado;

drop table if exists tipoimgprogaca;

drop table if exists tipoprogramaacademico;

/*==============================================================*/
/* Table: convenios                                             */
/*==============================================================*/
create table convenios
(
   idconvenio           int not null auto_increment,
   yearconvenio         int not null,
   nombreconvenio       varchar(500) not null,
   estadoconvenio       varchar(50) not null,
   contratanteconvenio  varchar(300) not null,
   valorconvenio        varchar(300) not null,
   duracionconvenio     varchar(100) not null,
   objetoconvenios      varchar(1000) not null,
   primary key (idconvenio)
);

/*==============================================================*/
/* Table: formapago                                             */
/*==============================================================*/
create table formapago
(
   idformapago          int not null auto_increment,
   nombreformapago      varchar(50) not null,
   primary key (idformapago)
);

/*==============================================================*/
/* Table: imagen                                                */
/*==============================================================*/
create table imagen
(
   idimagen             int not null auto_increment,
   idtipoimagen         int not null,
   nombreimg            varchar(200) not null,
   direccionimg         varchar(300) not null,
   primary key (idimagen)
);

/*==============================================================*/
/* Table: imgprogaca_progaca                                    */
/*==============================================================*/
create table imgprogaca_progaca
(
   idimagen             int not null,
   idprogramaacademico  int not null,
   primary key (idimagen, idprogramaacademico)
);

/*==============================================================*/
/* Table: personainscrita                                       */
/*==============================================================*/
create table personainscrita
(
   idpersonainscrita    int not null auto_increment,
   idtipodocumento      int not null,
   idformapago          int not null,
   idprogramaacademico  int not null,
   fechahorainscripcion date not null,
   horainscripcion      time not null,
   nombreinscrito       varchar(100) not null,
   apellidoinscrito     varchar(100) not null,
   numerodocumento      bigint not null,
   lugarexpedicion      varchar(150) not null,
   lugarnacimiento      varchar(150) not null,
   direccionhogar       varchar(150) not null,
   direccionoficina     varchar(150),
   telefonohogar        int,
   telefonooficina      int,
   telefonocelular      int not null,
   email                varchar(100) not null,
   profesion            varchar(150) not null,
   dirfotoinscrito      varchar(300) not null,
   dirhojavida          varchar(300) not null,
   dirfotocedula        varchar(300) not null,
   dirfotocarneseguro   varchar(300) not null,
   dirfotoconsignacion  varchar(300),
   primary key (idpersonainscrita)
);

/*==============================================================*/
/* Table: programaacademico                                     */
/*==============================================================*/
create table programaacademico
(
   idprogramaacademico  int not null auto_increment,
   idtipoprogramaacademico int not null,
   idtipoestado         int not null,
   nomprogramaacademico varchar(300) not null,
   dirigidoprogaca      varchar(500) not null,
   fechainicioprogaca   date not null,
   fechafinprogaca      date not null,
   duracionprogaca      varchar(200) not null,
   grandescripprogaca   varchar(500) not null,
   peqdescripprogaca    varchar(200) not null,
   pdf                  varchar(500),
   codigorecaudo        int,
   inversion            varchar(200) not null,
   primary key (idprogramaacademico)
);

/*==============================================================*/
/* Table: tipodocumento                                         */
/*==============================================================*/
create table tipodocumento
(
   idtipodocumento      int not null auto_increment,
   nombretipodocumento  varchar(50) not null,
   primary key (idtipodocumento)
);

/*==============================================================*/
/* Table: tipoestado                                            */
/*==============================================================*/
create table tipoestado
(
   idtipoestado         int not null auto_increment,
   nombretipoestado     varchar(100) not null,
   primary key (idtipoestado)
);

/*==============================================================*/
/* Table: tipoimgprogaca                                        */
/*==============================================================*/
create table tipoimgprogaca
(
   idtipoimagen         int not null auto_increment,
   nombretipoimagen     varchar(50) not null,
   primary key (idtipoimagen)
);

/*==============================================================*/
/* Table: tipoprogramaacademico                                 */
/*==============================================================*/
create table tipoprogramaacademico
(
   idtipoprogramaacademico int not null auto_increment,
   nombretipoprogaca    varchar(100) not null,
   primary key (idtipoprogramaacademico)
);

alter table imagen add constraint fk_tipoimagen_imgprogaca foreign key (idtipoimagen)
      references tipoimgprogaca (idtipoimagen) on delete restrict on update restrict;

alter table imgprogaca_progaca add constraint fk_pertenece_a foreign key (idprogramaacademico)
      references programaacademico (idprogramaacademico) on delete restrict on update restrict;

alter table imgprogaca_progaca add constraint fk_tiene foreign key (idimagen)
      references imagen (idimagen) on delete restrict on update restrict;

alter table personainscrita add constraint fk_formapago_personainscrita foreign key (idformapago)
      references formapago (idformapago) on delete restrict on update restrict;

alter table personainscrita add constraint fk_personainscrita foreign key (idprogramaacademico)
      references programaacademico (idprogramaacademico) on delete restrict on update restrict;

alter table personainscrita add constraint fk_tipodocumento_personainscrita foreign key (idtipodocumento)
      references tipodocumento (idtipodocumento) on delete restrict on update restrict;

alter table programaacademico add constraint fk_tipoestado_progaca foreign key (idtipoestado)
      references tipoestado (idtipoestado) on delete restrict on update restrict;

alter table programaacademico add constraint fk_tipoprogaca_progaca foreign key (idtipoprogramaacademico)
      references tipoprogramaacademico (idtipoprogramaacademico) on delete restrict on update restrict;

