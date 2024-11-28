<?php

class db
{
    use logger; // Use the LogTrait for logging

    protected $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli(HOSTS, USERNAME, PASSWORD, DATABASE);

        // Check for connection errors
        if ($this->mysqli->connect_error) {
            die('Connect Error (' . $this->mysqli->connect_errno . ') ' . $this->mysqli->connect_error);
        }
    }

      // Getter for mysqli
      public function getConnection() {
        return $this->mysqli;
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }

    function sanitize($data)
    {
        $data = filter_var($data, FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
        $data = trim($data);
        $data = stripslashes($data);
        $data = $this->mysqli->real_escape_string($data);
        return $data;
    }

    function int($data)
    {
        $data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
        return $data;
    }

    function getQuery($sql)
    {
        $data = $this->mysqli->query($sql);
        if ($data->num_rows == 1) {
            $row[] = $data->fetch_object();
        } else {
            while ($r = $data->fetch_object()) {
                $row[] = $r;
            }
        }
        return @$row;
    }

    function insert_query($table, $data, $token)
    {
        if (empty($table) || empty($data) || empty($token)) {
            return false;
        }

        if (!isset($_SESSION['token']) || $_SESSION['token'] !== $token) {
            return false;
        }

        $data = array_filter($data, fn($value) => $value !== null && $value !== '');
        $keys = array_keys($data);
        $placeholders = array_fill(0, count($keys), '?');

        $columns = implode(',', $keys);
        $placeholders = implode(',', $placeholders);
        $query = "INSERT INTO `$table` ($columns) VALUES ($placeholders)";

        if ($stmt = $this->mysqli->prepare($query)) {
            $types = str_repeat('s', count($data));
            $values = array_values($data);

            $stmt->bind_param($types, ...$values);

            if ($stmt->execute()) {
                $this->insertLog("Inserted into $table: " . json_encode($data), 'INFO');
                $stmt->close();
                return true;
            } else {
                $error = $stmt->error;
                $stmt->close();
                throw new Exception("Database Error: $error");
            }
        } else {
            throw new Exception("Failed to prepare the SQL statement.");
        }
    }

    function update_query($table, $data, $where, $token)
    {
        if (empty($table) || empty($data) || empty($where) || empty($token)) {
            return false;
        }

        if (!isset($_SESSION['token']) || $_SESSION['token'] !== $token) {
            return false;
        }

        $data = array_filter($data);
        $trail = "";
        foreach ($data as $key => $value) {
            $trail .= "$key = '" . $this->sanitize($value) . "',";
        }
        $trail = rtrim($trail, ',');

        $query = "UPDATE `$table` SET $trail WHERE $where";

        if ($this->mysqli->query($query)) {
            $this->insertLog("Updated $table: " . json_encode($data) . " WHERE $where", 'INFO');
            return true;
        } else {
            throw new Exception("Update Error: " . $this->mysqli->error);
        }
    }

    function update_id($table, $data, $where)
    {
        return $this->update_query($table, $data, "id = $where", $_SESSION['token'] ?? null);
    }

    function msg_set($data, $nav)
    {
        session_start();
        if ($data) {
            $_SESSION['suc'] = 'Updated Successfully';
        } else {
            $_SESSION['fal'] = 'Something went wrong! ' . $this->mysqli->error;
        }

        header("location: ?nav=" . $nav);
        die;
    }
}

?>
