<?
class mysql {

    var $host; // Хост
    var $uname; // Имя пользователя
    var $pwd; // Пароль
    var $dbname; // Имя базы
    var $mysql_link; // Connection
    var $nrquery; // Количество сделанных запросов
    var $total_time; // Суммарное время выполнения запросов
    var $last_query_time; // Время выполнения последнего запроса
    var $qlist; // Массив, содержащий все выполненные запросы
    var $affected; // Количество затронутых преобразованием строк
    var $last_id; // auto_increment - последний ID

	// Конструктор. Создаем подключение к mysql
    function mysql($host, $uname, $pwd="", $dbname) {
        $this->host = $host;
        $this->uname = $uname;
        $this->pwd = $pwd;
        $this->dbname = $dbname;

        if (!$this->mysql_link = @mysql_pconnect($this->host, $this->uname, $this->pwd)) die("Ошибка. Невозможно установить соединение с базой. Пожалуйста, <a href=\"mailto:webmaster@shooting.ur.ru\">сообщите</a> администратору.");
        $this->query("SET NAMES 'utf8'");

        mysql_select_db($this->dbname, $this->mysql_link);
    }

	// Извлекаем в ассоциативном массиве результаты запроса
    function results($sql,$type=MYSQL_ASSOC) {
        $r = mysql_query($sql, $this->mysql_link);
        $query['sql'] = $sql;

        if ($r) {
            $nr = mysql_num_rows($r);
            if ($nr == 0) return 0; //Результат не содержит строк
            else {
                $nr = 0;
                while ($row = mysql_fetch_array($r,$type)) {
                    reset($row);
                    while (list($key, $val) = each($row)) {
                        $ret[$nr][$key] = $val;
                    }
                    $nr++;
                }
                return $ret;
            }
        }
        else return false;
    }

	// Извлекаем в ассоциативном массиве одну строку
    function result($sql,$type=MYSQL_ASSOC) {
        $r = mysql_query($sql, $this->mysql_link);
        $query['sql'] = $sql;

        if ($r) {
            $nr = mysql_num_rows($r);
            if ($nr == 0) return 0; //Результат не содержит строк
            else {
                $ret = mysql_fetch_array($r);

                return $ret;
            }
        }
        else return false;
    }

	// Делаем запрос к базе
    function query($sql) {
        $q = @mysql_query($sql, $this->mysql_link);
        $query['sql'] = $sql;

        if ($q) {
            $this->affected = mysql_affected_rows($this->mysql_link);
            $this->last_id = mysql_insert_id($this->mysql_link);
            $this->qlist[] = $query;
            return true;
        }
        else return false;
    }

	// Выводим текущее значение auto_increment
    function auto_increment($table_name) {
    	$ai = $this->result("SHOW TABLE STATUS FROM `" . DB_NAME . "` LIKE '" . $table_name . "'");
    	return $ai['Auto_increment'];
    }

	// Закрываем соединение
    function close() {
        mysql_close($this->mysql_link);
    }

}

$mysql = new mysql(DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>
