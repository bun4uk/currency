<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170306144345 extends AbstractMigration
{
    /**
     * @param Schema $schema
     * @throws \Doctrine\DBAL\Migrations\AbortMigrationException
     */
    public function up(Schema $schema)
    {
        $this->abortIf(
            $this->connection->getDatabasePlatform()->getName() !== 'mysql',
            'Migration can only be executed safely on \'mysql\'.'
        );


        $this->addSql(
            "INSERT INTO `currency` (`id`, `name`, `symbol`) VALUES ('1', 'HRN', '20B4');"
        );
        $this->addSql(
            "INSERT INTO `currency` (`id`, `name`, `symbol`) VALUES ('2', 'USD', '24');"
        );
        $this->addSql(
            "INSERT INTO `currency` (`id`, `name`, `symbol`) VALUES ('3', 'EUR', '20AC');"
        );
        $this->addSql(
            "INSERT INTO `currency` (`id`, `name`, `symbol`) VALUES ('4', 'RUR', '20BD');"
        );
        $this->addSql(
            "INSERT INTO `currency` (`id`, `name`, `symbol`) VALUES ('5', 'BTC', '20BF');"
        );
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql(
            "DELETE FROM `currency`;"
        );
    }
}
