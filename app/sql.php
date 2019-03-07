<?php
$dsn = 'pgsql:dbname=TEST;host=pgsql;port=5432';
$user = 'postgres';
$pass = 'example';

try {
  // DB�ɐڑ�����
  $dbh = new PDO($dsn, $user, $pass);

  // �����ŃN�G�����s����
$sth = $dbh->prepare('INSERT INTO test_comments (name, text) VALUES (?, ?)');
  // DB��ؒf����
  $dbh = null;
} catch (PDOException $e) {
    // �ڑ��ɃG���[�����������ꍇ�����ɓ���
    print "DB ERROR: " . $e->getMessage() . "<br/>";
    die();
}
?>
<?php
  $name = "John";
  $text = "Power to the People";
  $sth->execute(array($name, $text));
?>