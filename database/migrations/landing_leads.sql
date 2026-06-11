-- Tabela de leads captados pela landing page do ShapePro IA
CREATE TABLE IF NOT EXISTS `landing_leads` (
  `id`                INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name`              VARCHAR(150)  NOT NULL,
  `whatsapp`          VARCHAR(20)   NOT NULL,
  `email`             VARCHAR(191)  NOT NULL,
  `professional_type` ENUM('personal','consultor','studio','academia','outro') NOT NULL DEFAULT 'personal',
  `student_range`     ENUM('ate15','16a50','51a120','acima120') NOT NULL DEFAULT 'ate15',
  `interest`          ENUM('testar','demonstracao','precos','equipe') NOT NULL DEFAULT 'testar',
  `source_page`       VARCHAR(100)  NOT NULL DEFAULT '/landing',
  `ip_address`        VARCHAR(45)   NULL,
  `user_agent`        TEXT          NULL,
  `status`            ENUM('novo','contatado','qualificado','convertido','perdido') NOT NULL DEFAULT 'novo',
  `notes`             TEXT          NULL,
  `created_at`        DATETIME      NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at`        DATETIME      NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `idx_status`  (`status`),
  INDEX `idx_email`   (`email`),
  INDEX `idx_created` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
