create table product
(
    id    int auto_increment
        primary key,
    name  char(50) not null,
    price double   not null,
    image char(50) not null
);

INSERT INTO releaf.product (id, name, price, image) VALUES (1, 'Früchtetee', 9.99, 'tee_000');
INSERT INTO releaf.product (id, name, price, image) VALUES (2, 'Kräutertee', 5.99, 'tee_001');
INSERT INTO releaf.product (id, name, price, image) VALUES (3, 'Schwarzer Tee', 8.5, 'tee_002');
INSERT INTO releaf.product (id, name, price, image) VALUES (4, 'Zimt Tee', 10.85, 'tee_003');
INSERT INTO releaf.product (id, name, price, image) VALUES (5, 'Süße Kirsche', 999.999, 'tee_004');