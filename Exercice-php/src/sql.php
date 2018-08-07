<?php
class DBConnection {
    private static $singleton = NULL;
    private $connection;

    private function __construct() {
        $this->connection = new \PDO(
            "mysql:host=" . $_ENV["MYSQL_HOST"] . ":3306;dbname=" . $_ENV["MYSQL_DATABASE"],
            $_ENV["MYSQL_USER"],
            $_ENV["MYSQL_PASSWORD"]
        );
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    private static function connect() {
        if (NULL == self::$singleton) {
           self::$singleton = new DBConnection();
        }
        return self::$singleton;
    }

    private function execute(string $query, array $params) {
        $query = $this->connection->prepare($query);
        $query->execute($params);

        return $query;
    }

    /**
     * Sends an INSERT query to database.
     * 
     * @param string $query SQL INSERT query.
     * @param array $params SQL query parameters.
     * @return int Last inserted id.
     * 
     */
    public static function insert(string $query, array $params = []) : int {
        $result = self::connect()->execute($query, $params);
        return self::$singleton->connection->lastInsertId();
    }

    /**
     * Sends an SELECT query to database.
     * 
     * @param string $query SQL SELECT query.
     * @param array $params SQL query parameters.
     * @return array Selected elements.
     * 
     */
    public static function select(string $query, array $params = []) : array {
        $result = self::connect()->execute($query, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Sends an UPDATE query to database.
     * 
     * @param string $query SQL UPDATE query.
     * @param array $params SQL query parameters.
     * @return int Affected rows count.
     * 
     */
    public static function update(string $query, array $params = []) : int {
        $result = self::connect()->execute($query, $params);
        return $result->rowCount();
    }

    /**
     * Sends an DELETE query to database.
     * 
     * @param string $query SQL DELETE query.
     * @param array $params SQL query parameters.
     * @return int Affected rows count.
     * 
     */
    public static function delete(string $query, array $params = []) : int {
        return self::update($query, $params);
    }

  }