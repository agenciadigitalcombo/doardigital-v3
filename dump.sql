CREATE TABLE domains (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    tenant_ID INT
);
CREATE TABLE admins (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    fk VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    admin_ID INT,
    is_activated BOOLEAN DEFAULT FALSE,
    activation_code VARCHAR(255),
    recovery_code VARCHAR(255),
    data_register VARCHAR(255)
);
CREATE TABLE permissions (
    id INT PRIMARY KEY,
    admin_ID INT,
    resource_list VARCHAR(1000)
);
CREATE TABLE tenant_admins (
    id INT PRIMARY KEY,
    tenant_ID INT,
    admin_ID INT
);
CREATE TABLE tenants (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    admin_ID INT,
    template_ID INT
);
CREATE TABLE visual_styles (
    id INT PRIMARY KEY,
    tenant_ID INT,
    primary_color VARCHAR(255),
    secondary_color VARCHAR(255),
    logo VARCHAR(255),
    ico VARCHAR(255)
);
CREATE TABLE tenant_custom_fields (
    id INT PRIMARY KEY,
    tenant_ID INT,
    name VARCHAR(255),
    value TEXT
);
CREATE TABLE gallery (
    id INT PRIMARY KEY,
    tenant_ID INT,
    image_URL VARCHAR(255),
    order int,
    ImageDescription TEXT
);