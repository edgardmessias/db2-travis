<?php

$pdo = new PDO(
        'ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE=test;"HOSTNAME=127.0.0.1;PORT=50000;PROTOCOL=TCPIP'
        , 'test'
        , 'test'
);

$stmt = $pdo->prepare("select t.tabname from syscat.tables AS t");

$stmt->execute();

while ($row = $stmt->fetch()) {
    print_r($row);
}