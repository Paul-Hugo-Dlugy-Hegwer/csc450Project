DROP TABLE volunteer;
DROP TABLE review;
DROP TABLE match_u;
DROP TABLE opportunity;
DROP TABLE survey;
DROP TABLE user;
DROP TABLE organization;

CREATE TABLE user (
    user_ID int NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL UNIQUE,
    password varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    phone varchar(50) NOT NULL,
    address varchar(50) NOT NULL,
    PRIMARY KEY (user_ID)
);
CREATE TABLE organization (
    org_ID int NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL UNIQUE,
    password varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    phone varchar(50) NOT NULL,
    address varchar(50) NOT NULL,
    PRIMARY KEY (org_ID)
);
CREATE TABLE opportunity (
    opp_ID int NOT NULL AUTO_INCREMENT,
    org_ID int NOT NULL,
    name varchar(50) NOT NULL,
    description varchar(500) NOT NULL,
    lift_ability BOOLEAN NOT NULL,
    tech_ability BOOLEAN NOT NULL,
    comm_ability BOOLEAN NOT NULL,
    spots_availabe int,
    City varchar(50) NOT NULL,
    State varchar(50) NOT NULL,
    Day varchar(10) NOT NULL,
    opTime float NOT NULL,
    PRIMARY KEY (opp_ID),
    FOREIGN KEY (org_ID) REFERENCES organization(org_ID)
);
CREATE TABLE survey (
    srvy_ID int NOT NULL AUTO_INCREMENT,
    user_ID int NOT NULL,
    first_name varchar(50),
    last_name varchar(50),
    lift_ability BOOLEAN NOT NULL,
    tech_ability BOOLEAN NOT NULL,
    comm_ability BOOLEAN NOT NULL,
    City varchar(50) NOT NULL,
    State varchar(50) NOT NULL,
    Day varchar(10),
    idealStart int,
    latestEnd int,
    PRIMARY KEY (srvy_ID),
    FOREIGN KEY (user_ID) REFERENCES user(user_ID)
);
CREATE TABLE match_u(
    match_ID int NOT NULL AUTO_INCREMENT,
    opp_ID int NOT NULL,
    user_ID int NOT NULL,
    percent float NOT NULL,
    PRIMARY KEY (match_ID),
    FOREIGN KEY (opp_ID) REFERENCES opportunity(opp_ID),
    FOREIGN KEY (user_ID) REFERENCES user(user_ID)
);
CREATE TABLE volunteer(
    v_ID int NOT NULL AUTO_INCREMENT,
    opp_ID int NOT NULL,
    user_ID int NOT NULL,
    PRIMARY KEY (v_ID),
    FOREIGN KEY (opp_ID) REFERENCES opportunity(opp_ID),
    FOREIGN KEY (user_ID) REFERENCES user(user_ID)
);
CREATE TABLE review(
    r_ID int NOT NULL AUTO_INCREMENT,
    org_ID int NOT NULL,
    review int NOT NULL,
    PRIMARY KEY (r_ID),
    FOREIGN KEY (org_ID) REFERENCES organization(org_ID)
);
