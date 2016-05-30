  <?php
  
  function createUser($firstName, $lastName, $email, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO member(email, firstName, lastName, password) VALUES (?, ?, ?, ?)");
    $stmt->execute(array($email, $firstName, $lastName, sha1($password)));
  }

  function isLoginCorrect($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM member 
                            WHERE email = ? AND password = ?");
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch() == true;
  }

  function getAllUsers() {
    global $conn;
    $stmt = $conn->prepare("SELECT memberid, firstname, lastname, email
                            FROM member");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function deleteUser($userid) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM member
                            WHERE memberid = ?");
    $stmt->execute(array($userid));
    return 'success';
  }

  function getUserIDByEmail($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT memberid 
                            FROM member 
                            WHERE email = ?");
    $stmt->execute(array($email));
    return $stmt->fetch();
  }

  function getUserName($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT firstname, lastname 
                            FROM member 
                            WHERE email = ?");
    $stmt->execute(array($email));
    return $stmt->fetch();
  }

  function editUserInfo($firstName, $lastName, $email, $password, $memberID) {
    global $conn;
    if ($password != "") {
      $stmt = $conn->prepare("UPDATE member
                              SET email = ?, firstname = ?, lastname = ?, password = ?
                              WHERE memberid = ?");
      $stmt->execute(array($email, $firstName, $lastName, sha1($password), $memberID));
    }
    else {
       $stmt = $conn->prepare("UPDATE member
                              SET email = ?, firstname = ?, lastname = ?
                              WHERE memberid = ?");
       $stmt->execute(array($email, $firstName, $lastName, $memberID));
    }
  }
?>