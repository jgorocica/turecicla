ALTER TABLE `turecicla`.`users`
ADD COLUMN `avatar` VARCHAR(45) NULL DEFAULT 'no_avatar.jpg' AFTER `password`;
