<?php

namespace App\Service\Repository;

use App\Entity\Mapper;
use Locaty\Service;
use RsORM\Driver;
use RsORM\Query;
use RsORM\Query\Engine\MySQL;

class Main extends Service\Basic {

    /**
     * @var Driver\MySQL
     */
    private $_driver;

    /**
     * @return Mapper\Task[]
     */
    public function loadTasks(): array {
        $query = Query\Engine\MySQL\Builder::select(['*'])->table('task')->build();
        return $this->_fetchAll($query, Mapper\Task::class);
    }

    protected function _init(): void {
        $this->_driver = new Driver\MySQL('mysql', 3306, 'dbuser', 'dbpass', 'main');
    }

    /**
     * @param MySQL\AbstractExpression|MySQL\Statement\AbstractStatement $statement
     * @param string $class
     * @return array
     */
    private function _fetchAll(Query\Engine\MySQL\AbstractExpression $statement, string $class): array {
        return $this->_driver->fetchAllClass($statement, $class);
    }
}