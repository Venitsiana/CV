CREATE TABLE users
(
    id INT NOT NULL AUTO_INCREMENT,
    username varchar(255),
    pass varchar(255),

    PRIMARY KEY(id)
);

CREATE TABLE inquiries
(
    id INT NOT NULL AUTO_INCREMENT,
    firstname varchar(255),
    lastname varchar(255),
    email varchar(255),
    phone varchar(255),
    comment varchar(10000),

    PRIMARY KEY(id)
);

CREATE TABLE categories
(
    id INT NOT NULL AUTO_INCREMENT,
    name varchar(255),

    PRIMARY KEY(id)
);

CREATE TABLE records
(
    id INT NOT NULL AUTO_INCREMENT,
    title varchar(255),
    img varchar(255),
    date_created varchar(255),
    author varchar(255),
    url varchar(255),
    short_descr varchar(1000),
    descr varchar(100000),
    category_id INT NOT NULL,
    
    PRIMARY KEY (id),
	CONSTRAINT fk_category_id FOREIGN KEY (category_id)
	REFERENCES categories(id)
);

CREATE TABLE contacts
(
    id INT NOT NULL AUTO_INCREMENT,
    phone1 varchar(255),
    phone2 varchar(255),
    email varchar(255),
    address1 varchar(255),
    address2 varchar(255),
    
    PRIMARY KEY (id)
);

CREATE TABLE social_networks
(
    id INT NOT NULL AUTO_INCREMENT,
    url varchar(255),
    icon varchar(255),
    
    PRIMARY KEY (id)
);