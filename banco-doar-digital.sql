CREATE TABLE `administrador` (
	`id` int NOT NULL AUTO_INCREMENT,
	`code` varchar(255) DEFAULT NULL,
	`nome` varchar(75) DEFAULT NULL,
	`cpf` varchar(25) DEFAULT NULL,
	`nascimento` varchar(10) DEFAULT NULL,
	`telefone` varchar(25) DEFAULT NULL,
	`email` varchar(75) DEFAULT NULL,
	`senha` varchar(255) DEFAULT NULL,
	`registro` varchar(18) DEFAULT NULL,
	`etapa` int DEFAULT NULL,
	`ativo` int DEFAULT NULL,
	`sass` int DEFAULT NULL,
	`credencial` int DEFAULT NULL,
	`adm` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `assinatura` (
	`id` int NOT NULL AUTO_INCREMENT,
	`instituicao_fk` varchar(255) DEFAULT NULL,
	`external_fk` varchar(255) DEFAULT NULL,
	`doador_fk` varchar(255) DEFAULT NULL,
	`subscription_fk` varchar(255) DEFAULT NULL,
	`tipo_pagamento` varchar(255) DEFAULT NULL,
	`status_pagamento` varchar(255) DEFAULT NULL,
	`valor` float DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `contador_ip` (
	`id` int NOT NULL AUTO_INCREMENT,
	`ip` varchar(255) DEFAULT NULL,
	`total` int DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `credencial` (
	`id` int NOT NULL AUTO_INCREMENT,
	`nome_identificacao` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	`recursos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `doador` (
	`id` int NOT NULL AUTO_INCREMENT,
	`instituicao_fk` varchar(255) DEFAULT NULL,
	`pagamento_fk` varchar(255) DEFAULT NULL,
	`external_fk` varchar(255) DEFAULT NULL,
	`nome` varchar(75) DEFAULT NULL,
	`cpf` varchar(11) DEFAULT NULL,
	`sexo` varchar(255) DEFAULT NULL,
	`telefone` varchar(11) DEFAULT NULL,
	`email` varchar(75) DEFAULT NULL,
	`senha` varchar(255) DEFAULT NULL,
	`nascimento` varchar(10) DEFAULT NULL,
	`registro` varchar(19) DEFAULT NULL,
	`payload` json NOT NULL,
	`hora` varchar(8) NOT NULL,
	`ip` varchar(255) NOT NULL,
	`card_token` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `email` (
	`id` int NOT NULL AUTO_INCREMENT,
	`instituicao_fk` varchar(255) DEFAULT NULL,
	`host` varchar(75) DEFAULT NULL,
	`protocolo` varchar(25) DEFAULT NULL,
	`porta` int DEFAULT NULL,
	`email` varchar(255) DEFAULT NULL,
	`senha` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `endereco` (
	`id` int NOT NULL AUTO_INCREMENT,
	`fk` varchar(255) DEFAULT NULL,
	`tipo` varchar(75) DEFAULT NULL,
	`nome` varchar(75) DEFAULT NULL,
	`cep` varchar(8) DEFAULT NULL,
	`logadouro` varchar(75) DEFAULT NULL,
	`numero` varchar(10) DEFAULT NULL,
	`complemento` varchar(75) DEFAULT NULL,
	`bairro` varchar(75) DEFAULT NULL,
	`cidade` varchar(75) DEFAULT NULL,
	`estado` varchar(2) DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `fatura` (
	`id` int NOT NULL AUTO_INCREMENT,
	`instituicao_fk` varchar(255) DEFAULT NULL,
	`fatura_id` varchar(255) DEFAULT NULL,
	`tipo_pagamento` varchar(255) DEFAULT NULL,
	`recorrente` int DEFAULT NULL,
	`external_fk` varchar(255) DEFAULT NULL,
	`status_pagamento` varchar(255) DEFAULT NULL,
	`valor` float DEFAULT NULL,
	`codigo` varchar(255) DEFAULT NULL,
	`url` varchar(255) DEFAULT NULL,
	`data` varchar(10) DEFAULT NULL,
	`hora` varchar(8) DEFAULT NULL,
	`doador_fk` varchar(255) DEFAULT NULL,
	`doador_nome` varchar(255) DEFAULT NULL,
	`doador_email` varchar(255) DEFAULT NULL,
	`ip` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `institution` (
	`id` int NOT NULL AUTO_INCREMENT,
	`institution_fk` varchar(255) DEFAULT NULL,
	`carteira_fk` varchar(255) DEFAULT NULL,
	`id_fk` varchar(255) DEFAULT NULL,
	`nome` varchar(255) DEFAULT NULL,
	`cpfCnpj` varchar(14) DEFAULT NULL,
	`email` varchar(75) DEFAULT NULL,
	`mailSender` varchar(75) DEFAULT NULL,
	`mailActive` int NOT NULL,
	`telefone` varchar(11) DEFAULT NULL,
	`registro` varchar(19) DEFAULT NULL,
	`visible` int DEFAULT NULL,
	`domain` varchar(255) DEFAULT NULL,
	`subdomain` varchar(75) DEFAULT NULL,
	`logo` varchar(255) DEFAULT NULL,
	`icon` varchar(255) DEFAULT NULL,
	`cor` varchar(9) DEFAULT NULL,
	`titulo` varchar(75) DEFAULT NULL,
	`tags` varchar(75) DEFAULT NULL,
	`descricao` varchar(145) DEFAULT NULL,
	`showCep` int NOT NULL,
	`state_machine` varchar(255) NOT NULL,
	`account` varchar(75) DEFAULT NULL,
	`accountDigit` varchar(75) DEFAULT NULL,
	`accountName` varchar(75) DEFAULT NULL,
	`agency` varchar(75) DEFAULT NULL,
	`bank` varchar(75) DEFAULT NULL,
	`bankAccountType` varchar(75) DEFAULT NULL,
	`state_machine_lead` varchar(255) DEFAULT NULL,
	`state_machine_overdue` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `institution_adm` (
	`id` int NOT NULL AUTO_INCREMENT,
	`adm_fk` varchar(255) DEFAULT NULL,
	`instituition_fk` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `integration` (
	`id` int NOT NULL AUTO_INCREMENT,
	`instituicao_fk` varchar(255) DEFAULT NULL,
	`tipo` varchar(255) DEFAULT NULL,
	`key_1` varchar(255) DEFAULT NULL,
	`key_2` varchar(255) DEFAULT NULL,
	`key_3` varchar(255) DEFAULT NULL,
	`key_4` varchar(255) DEFAULT NULL,
	`key_5` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `message` (
	`id` int NOT NULL AUTO_INCREMENT,
	`tipo` varchar(255) DEFAULT NULL,
	`data` varchar(255) DEFAULT NULL,
	`payload` json DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `message_aws` (
	`id` int NOT NULL AUTO_INCREMENT,
	`label` varchar(255) NOT NULL,
	`tipo` varchar(255) DEFAULT NULL,
	`status` varchar(255) DEFAULT NULL,
	`data` varchar(255) DEFAULT NULL,
	`doador_fk` varchar(255) DEFAULT NULL,
	`fatura_fk` varchar(255) DEFAULT NULL,
	`ref_fk` varchar(255) DEFAULT NULL,
	`execution_arn` varchar(255) DEFAULT NULL,
	`institution_fk` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `meta` (
	`id` int NOT NULL AUTO_INCREMENT,
	`instituicao_fk` varchar(255) DEFAULT NULL,
	`ano` varchar(4) DEFAULT NULL,
	`janeiro` float DEFAULT NULL,
	`fevereiro` float DEFAULT NULL,
	`marco` float DEFAULT NULL,
	`abril` float DEFAULT NULL,
	`maio` float DEFAULT NULL,
	`junho` float DEFAULT NULL,
	`julho` float DEFAULT NULL,
	`agosto` float DEFAULT NULL,
	`setembro` float DEFAULT NULL,
	`outubro` float DEFAULT NULL,
	`novembro` float DEFAULT NULL,
	`dezembro` float DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `plano` (
	`id` int NOT NULL AUTO_INCREMENT,
	`fk` varchar(255) DEFAULT NULL,
	`price` float DEFAULT NULL,
	`coupon` varchar(255) DEFAULT NULL,
	`send_message` int DEFAULT NULL,
	`institution` int DEFAULT NULL,
	`trial` int DEFAULT NULL,
	`subadm` int DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `recover` (
	`id` int NOT NULL AUTO_INCREMENT,
	`protocolo` varchar(255) DEFAULT NULL,
	`finalizado` int NOT NULL,
	`recuperado` int NOT NULL,
	`nome` varchar(255) DEFAULT NULL,
	`email` varchar(255) DEFAULT NULL,
	`telefone` varchar(255) DEFAULT NULL,
	`cpf` varchar(255) DEFAULT NULL,
	`tipo_pagamento` varchar(255) DEFAULT NULL,
	`valor` varchar(255) DEFAULT NULL,
	`recorrente` int NOT NULL,
	`dataHoraRegistro` varchar(255) DEFAULT NULL,
	`dataHoraUpdate` varchar(255) DEFAULT NULL,
	`institution_fk` varchar(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `split` (
	`id` int NOT NULL AUTO_INCREMENT,
	`fk` varchar(255) DEFAULT NULL,
	`code` varchar(255) DEFAULT NULL,
	`porcentagem` int DEFAULT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE `template_email` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`instituicao_fk` varchar(255) DEFAULT NULL,
	`tipo` varchar(255) DEFAULT NULL,
	`status_pagamento` varchar(255) DEFAULT NULL,
	`assunto` varchar(255) DEFAULT NULL,
	`content` longtext,
	PRIMARY KEY (`id`)
);
CREATE TABLE `template_whats` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`instituicao_fk` varchar(255) DEFAULT NULL,
	`tipo` varchar(255) DEFAULT NULL,
	`status_pagamento` varchar(255) DEFAULT NULL,
	`content` longtext NOT NULL,
	PRIMARY KEY (`id`)
);