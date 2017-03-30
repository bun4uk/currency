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
     */
    public function up(Schema $schema)
    {
        $this->abortIf(
            $this->connection->getDatabasePlatform()->getName() !== 'mysql',
            'Migration can only be executed safely on \'mysql\'.'
        );

        $this->addSql(
                "INSERT INTO `currency` (`id`, `name`, `rate_id`) VALUES ('1', 'USD', '1');"
        );
        $this->addSql(
                "INSERT INTO `currency` (`id`, `name`, `rate_id`) VALUES ('2', 'EUR', '2');"
        );
        $this->addSql(
                "INSERT INTO `currency` (`id`, `name`, `rate_id`) VALUES ('3', 'RUR', '3');"
        );
        $this->addSql(
                "INSERT INTO `currency` (`id`, `name`, `rate_id`) VALUES ('4', 'BTC', '4');"
        );
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
