<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POST�̃T���v��</title>
  </head>
  <body>
    <?php
      //comment��POST����Ă���Ȃ�
      if(isset($_POST["comment"])){
        //�G�X�P�[�v���Ă���\��
        $comment = htmlspecialchars($_POST["comment"]);
        print("���Ȃ��̃R�����g�́u ${comment} �v�ł��B");
      } else {
    ?>
        <p>�R�����g���Ă��������B</p>
        <form method="POST" action="index.php">
          <input name="comment" />
          <input type="submit" value="���M" />
        </form>
    <?php
      }
    ?>
  </body>
</html>