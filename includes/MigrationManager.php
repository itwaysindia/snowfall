<?php

class MigrationManager
{
    private $db;
    private $migrationsDir;

    public function __construct($db, $migrationsDir = __DIR__ . '/migrations/')
    {
        $this->db = $db;
        $this->migrationsDir = $migrationsDir;
    }

    public function runMigrations()
    {
        // Create migrations table if not exists
        $this->db->query("
            CREATE TABLE IF NOT EXISTS `migrations` (
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `migration` VARCHAR(255) NOT NULL,
                `applied_at` DATETIME DEFAULT CURRENT_TIMESTAMP
            );
        ");

        // Get applied migrations
        $appliedMigrations = $this->getAppliedMigrations();

        // Scan migration files
        $migrationFiles = array_diff(scandir($this->migrationsDir), ['.', '..']);

        foreach ($migrationFiles as $file) {
            if (!in_array($file, $appliedMigrations)) {
                // Execute migration
                $migration = require $this->migrationsDir . $file;
                $migration($this->db);

                // Mark as applied
                $this->markMigrationAsApplied($file);
                echo "Applied migration: $file\n <br />";
            }
        }
        echo '<br /><a href="../auth/">Login</a>';
    }

    private function getAppliedMigrations()
    {
        $result = $this->db->query("SELECT migration FROM migrations");
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    private function markMigrationAsApplied($file)
    {
        $stmt = $this->db->prepare("INSERT INTO `migrations` (`migration`) VALUES (?)");
        $stmt->bind_param("s", $file);
        $stmt->execute();
        $stmt->close();
    }
}
