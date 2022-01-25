create table category
(
    id    int auto_increment
        primary key,
    name  char(50) not null,
    image char(50) null
);

INSERT INTO releaf.category (id, name, image) VALUES (1, 'Konzentrationstee', 'tasse_001');
INSERT INTO releaf.category (id, name, image) VALUES (2, 'Gesundheitstee', 'tasse_002');
INSERT INTO releaf.category (id, name, image) VALUES (3, 'Entspannungstee', 'tasse_003');
INSERT INTO releaf.category (id, name, image) VALUES (4, 'Früchtetee', 'tasse_004');