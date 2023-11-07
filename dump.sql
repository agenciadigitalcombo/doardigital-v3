CREATE TABLE domains (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    tenant_ID INT
);
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    fk VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    document INT,
    admin_ID INT,
    is_activated BOOLEAN DEFAULT FALSE,
    activation_code VARCHAR(255),
    recovery_code VARCHAR(255),
    data_register VARCHAR(255)
);
CREATE TABLE permissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_ID INT,
    resource_list VARCHAR(1000)
);
CREATE TABLE tenant_admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    admin_ID INT
);
CREATE TABLE tenants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    admin_ID INT,
    template_ID INT
);
CREATE TABLE visual_styles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    primary_color VARCHAR(255),
    secondary_color VARCHAR(255),
    logo VARCHAR(255),
    ico VARCHAR(255)
);
CREATE TABLE tenant_custom_fields (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    name VARCHAR(255),
    value TEXT
);
CREATE TABLE gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    image_URL VARCHAR(255),
    order int,
    ImageDescription TEXT
);
CREATE TABLE accounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    token_hash VARCHAR(255),
    key_hash VARCHAR(255)
);
CREATE TABLE key_pix (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    token_hash TEXT,
    qrcode TEXT
);
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    document INT,
    name VARCHAR(255),
    email VARCHAR(255),
    gender VARCHAR(255),
    phone VARCHAR(20),
    birthday VARCHAR(10),
    register_date TIMESTAMP,
    customer_hash VARCHAR(255),
    password_hash VARCHAR(255),
    is_activated BOOLEAN DEFAULT FALSE,
    activation_code VARCHAR(255)
);
CREATE TABLE customers_custom_fields (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customers_ID INT,
    name VARCHAR(255),
    value TEXT
);
CREATE TABLE plans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    amount DECIMAL(10, 2)
);
CREATE TABLE splits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    type VARCHAR(50),
    amount DECIMAL(10, 2),
    wallet_ID varchar(255)
);
CREATE TABLE subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customers_ID INT,
    external_hash VARCHAR(255),
    status VARCHAR(255),
    type VARCHAR(50),
    amount DECIMAL(10, 2),
    subscribe_hash VARCHAR(255)
);
CREATE TABLE historys_invoices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    transaction_hash VARCHAR(255),
    external_hash VARCHAR(255),
    status VARCHAR(50),
    last_modified_date TIMESTAMP,
    body TEXT
);
CREATE TABLE invoices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    invoices_ID INT,
    customer_ID INT,
    amount DECIMAL(10, 2),
    transaction_hash VARCHAR(255),
    external_hash VARCHAR(255),
    due_date VARCHAR(20),
    register_date TIMESTAMP,
    type VARCHAR(50),
    status VARCHAR(50)
);
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    type VARCHAR(100),
    to VARCHAR(255),
    subject VARCHAR(255),
    body TEXT,
    scheduling_date TIMESTAMP,
    send_date TIMESTAMP,
    status_send VARCHAR(50),
    call_back VARCHAR(50),
    retry INT DEFAULT 0,
    transaction_hash VARCHAR(255),
    external_hash VARCHAR(255),
    menssage_error TEXT
);
CREATE TABLE messages_tempalte (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    title VARCHAR(255),
    body TEXT,
    type VARCHAR(255),
    call_back VARCHAR(255)
);
CREATE TABLE reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    type VARCHAR(50),
    total VARCHAR(255),
    date VARCHAR(10)
);
CREATE TABLE whatsapp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    token VARCHAR(255),
    status VARCHAR(50)
);
CREATE TABLE email (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    server_smtp VARCHAR(255) NOT NULL,
    port_smtp INT NOT NULL,
    user_smtp VARCHAR(255) NOT NULL,
    password_smtp VARCHAR(255) NOT NULL
);
CREATE TABLE address (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_ID INT,
    zip_code INT,
    street varchar(75),
    house_number varchar(10),
    complement varchar(75),
    neighborhood varchar(75),
    city varchar(100),
    state varchar(100)
);
CREATE TABLE invoices_annotations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    invoices_ID INT,
    texto TEXT,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    subject VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    status VARCHAR(50),
    open_date TIMESTAMP,
    close_date TIMESTAMP
);
CREATE TABLE notification (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    content VARCHAR(255),
    read BOOLEAN 0
);
CREATE TABLE form_tokens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    token VARCHAR(255)
);
CREATE TABLE leads (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    tenant_ID INT,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    phone INT,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    status INT
);