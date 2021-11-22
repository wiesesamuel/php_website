CREATE TABLE `users`
(
    `id`         INT          NOT NULL AUTO_INCREMENT,
    `email`      VARCHAR(255) NOT NULL,
    `password`   VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE (`email`)
);

create table `groups`
(
    `id`           INT          NOT NULL AUTO_INCREMENT,
    `group`        varchar(255) NOT NULL,
    `session_time` INT          NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `groups` (`id`, `group`, `session_time`)
VALUES (1, 'Admin', 36000),
       (2, 'Cinema', 1800);

create table `user_group_allocation`
(
    `user_id`  INT NOT NULL,
    `group_id` INT NOT NULL,
    PRIMARY KEY (`user_id`, `group_id`)
);

create table `rights`
(
    `id`          INT          NOT NULL AUTO_INCREMENT,
    `right`       VARCHAR(255) NOT NULL DEFAULT '',
    `description` text         NOT NULL DEFAULT '',
);

INSERT INTO `rights` (`id`, `right`, `description`)
VALUES (1, "cinecal_show", "show cinecal page");