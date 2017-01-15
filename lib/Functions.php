<?php

function isAdmin($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            if ($row['isAdmin'] == 1) {
                return true;
            }
        }
    }

    mysql_close($con);
    return false;
}

function isEMT($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            if ($row['isEMT'] == 1) {
                return true;
            }
        }
    }

    mysql_close($con);
    return false;
}

function isEMTDisp($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            if ($row['isEMT'] == "Yes") {
                return ", EMT";
            }
        }
    }

    mysql_close($con);
    return false;
}

function isEMTDispSEL($user, $yn) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            if ($yn == "Y") {
                if ($row['isEMT'] == "Yes") {
                    return " selected";
                }
            } elseif ($yn == "N") {
                if ($row['isEMT'] == "No") {
                    return " selected";
                }
            }
        }
    }

    mysql_close($con);
    return;
}

function isSupport($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            if ($row['tType'] == "Support") {
                return true;
            }
        }
    }

    mysql_close($con);
    return false;
}

function isSupportDisp($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            if ($row['tType'] == "Support") {
                return ", Support Team";
            }
        }
    }

    mysql_close($con);
    return false;
}

function getUserID($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['id'];
        }
    }

    mysql_close($con);
    return 0;
}

function getOEMS($id) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['id'] == $id) {
            return $row['oems'];
        }
    }

    mysql_close($con);
    return 0;
}

function getUserFromID($id) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['id'] == $id) {
            return $row['username'];
        }
    }

    mysql_close($con);
    return 0;
}

function getFirstName($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['firstName'];
        }
    }

    mysql_close($con);
    return 0;
}

function getLastName($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['lastName'];
        }
    }

    mysql_close($con);
    return 0;
}

function getDOB($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['dob'];
        }
    }

    mysql_close($con);
    return 0;
}

function getAddress($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['address'];
        }
    }

    mysql_close($con);
    return 0;
}

function getCellPhone($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['cellPhone'];
        }
    }

    mysql_close($con);
    return 0;
}

function getHomePhone($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['homePhone'];
        }
    }

    mysql_close($con);
    return 0;
}

function getGender($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['gender'];
        }
    }

    mysql_close($con);
    return 0;
}

function getRank($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['rank'];
        }
    }

    mysql_close($con);
    return 0;
}

function getRankDispSEL($user, $rank) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            if ($row['rank'] == $rank) {
                return " selected";
            }
        }
    }

    mysql_close($con);
    return 0;
}

function getTType($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            return $row['ttype'];
        }
    }

    mysql_close($con);
    return 0;
}

function getTTYpeDispSEL($user, $team) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.members");

    while ($row = mysql_fetch_array($res)) {
        if ($row['username'] == $user) {
            if ($team == "Squad") {
                if ($row['tType'] == "Squad") {
                    return " selected";
                }
            } elseif ($team == "Support") {
                if ($row['tType'] == "Support") {
                    return " selected";
                }
            }
        }
    }

    mysql_close($con);
    return false;
}

function getPostTitle($id) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.news");

    while ($row = mysql_fetch_array($res)) {
        if ($row['id'] == $id) {
            return $row['title'];
        }
    }

    mysql_close($con);
    return 0;
}

function backOne($page) {
    if ($page == 0) {
        return 0;
    } else {
        $page = $page - 1;
        return $page;
    }
}

function forwardOne($page) {
    return $page + 1;
}

function getFormCallType($type) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM e39.callTypes");

    while ($row = mysql_fetch_array($res)) {
        if ($row['name'] == $type) {
            if ($row['type'] == 'EMS') {
                return '<span class="tag tag-success">' . $row['name'] . '</span>';
            } elseif ($row['type'] == 'FIRE') {
                return '<span class="tag tag-danger">' . $row['name'] . '</span>';
            } elseif ($row['type'] == 'POLICE') {
                return '<span class="tag tag-primary">' . $row['name'] . '</span>';
            } else {
                return '<span class="tag tag-default">' . $row['name'] . '</span>';
            }
        }
    }

    mysql_close($con);
    return 0;
}