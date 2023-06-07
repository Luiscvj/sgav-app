CREATE TABLE 
    housetype(

        id_house_type INT(11) NOT NULL UNIQUE,
        name_house_type VARCHAR(50),
        CONSTRAINT PK_id_house_type PRIMARY KEY(id_house_type)
    );


CREATE TABLE 
    countries(
        id_country INT(11) NOT NULL AUTO_INCREMENT,
        name_country VARCHAR(50) NOT NULL UNIQUE,
        CONSTRAINT PK_id_country PRIMARY KEY(id_country)
    );

CREATE TABLE 
    regions(
        id_region INT(11) NOT NULL AUTO_INCREMENT,
        name_region VARCHAR(50) NOT NULL,
        id_country INT,
        CONSTRAINT PK_id_region PRIMARY KEY(id_region),
        CONSTRAINT FK_region_id_country FOREIGN KEY(id_country) REFERENCES countries(id_country)
    );

CREATE TABLE
   cities(
        id_city INT(11) NOT NULL UNIQUE,
        name_city VARCHAR(50) NOT NULL,
        id_region INT,
        CONSTRAINT PK_id_city PRIMARY KEY(id_city),
        CONSTRAINT FK_city_id_region FOREIGN KEY(id_region) REFERENCES regions(id_region)

   );

CREATE TABLE
    persons(
        id_person INT(11)  NOT NULL AUTO_INCREMENT UNIQUE,
        firstname_person VARCHAR(100) NOT NULL,
        lastname_person  VARCHAR(100) NOT NULL,
        birthdate_peroson DATE,
        id_city INT,
        CONSTRAINT PK_id_person PRIMARY KEY(id_person),
        CONSTRAINT FK_person_id_city FOREIGN KEY(id_city) REFERENCES cities(id_city)

    );

CREATE TABLE 
    living_place(
        id_living INT(11) NOT NULL AUTO_INCREMENT UNIQUE,
        rooms_living INT NOT NULL,
        batrooms_living INT NOT NULL,
        kitchen_living INT NOT NULL,
        tvroom_living INT NOT NULL,
        patio_living INT NOT NULL,
        pool_living INT,
        barbecue_living INT ,
        image_living INT NOT NULL,
        id_person INT,
        id_city INT,
        id_house_type INT,
        CONSTRAINT PK_id_living PRIMARY KEY(id_living),
        CONSTRAINT FK_living_id_person FOREIGN KEY(id_person) REFERENCES persons(id_person),
        CONSTRAINT FK_living_id_city FOREIGN KEY(id_city) REFERENCES cities(id_city),
        CONSTRAINT FK_living_id_house_type FOREIGN KEY(id_house_type) REFERENCES housetype(id_house_type)
    );
