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

  function isUserBanned($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT bannedmember 
                            FROM member 
                            WHERE email = ? AND bannedmember = 1");
    $stmt->execute(array($email));
    return $stmt->fetch() == true;
  }

  function getAllUsers() {
    global $conn;
    $stmt = $conn->prepare("SELECT memberid, firstname, lastname, email, bannedmember
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

  function getUserEmailByID($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT email 
                            FROM member 
                            WHERE memberid = ?");
    $stmt->execute(array($id));
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

  function getCartID($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT cartid
                            FROM member
                            WHERE email = ?");
    $stmt->execute(array($email));
    return $stmt->fetch();
  }

  function addCreditCardToMember($email, $piid) {
    global $conn;
    $stmt = $conn->prepare("UPDATE member
                            SET paymentinformationid = ?
                            WHERE email = ?");
    $stmt->execute(array($piid, $email));
  }

  function addBillingAddressToMember($email, $baid) {
    global $conn;
    $stmt = $conn->prepare("UPDATE member
                            SET billinginformationid = ?
                            WHERE email = ?");
    $stmt->execute(array($baid, $email));
  }

  function addDeliveryAddressToMember($email, $daid) {
    global $conn;
    $stmt = $conn->prepare("UPDATE member
                            SET deliveryadressid = ?
                            WHERE email = ?");
    $stmt->execute(array($daid, $email));
  }

  function banMember($id) {
     global $conn;
    $stmt = $conn->prepare("UPDATE member
                            SET bannedmember = 1
                            WHERE memberid = ?");
    $stmt->execute(array($id));
    return 'success';
  }

  function unbanMember($id) {
     global $conn;
    $stmt = $conn->prepare("UPDATE member
                            SET bannedmember = 0
                            WHERE memberid = ?");
    $stmt->execute(array($id));
    return 'success';
  }
?>