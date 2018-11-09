<?php
function add_like($uid, $img, $type) {
	include '../Config/database.php';
	try {
			$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query= $dbh->prepare("INSERT INTO `like`(userid, galleryid, type) SELECT :userid, id, :type FROM gallery WHERE img=:img");
			$query->execute(array(':userid' => $uid, ':img' => $img, ':type' => $type));
			return (0);
		} catch (PDOException $e) {
			return ($e->getMessage());
		}
}

function update_like($uid, $img, $type) {
	include '../Config/database.php';
	try {
			$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query= $dbh->prepare("UPDATE `like`, gallery SET `like`.type=:type WHERE gallery.img=:img AND gallery.userid=:userid AND `like`.galleryid=gallery.id");
			$query->execute(array(':userid' => $uid, ':img' => $img, ':type' => $type));
			return (0);
		} catch (PDOException $e) {
			return ($e->getMessage());
		}
}

function get_like($uid, $img) {
	include '../Config/database.php';
	try {
			$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query= $dbh->prepare("SELECT type FROM `like`, gallery WHERE `like`.userid=:userid AND `like`.galleryid=gallery.id AND gallery.img=:img");
			$query->execute(array(':userid' => $uid, ':img' => $img));
			$val = $query->fetch();
			$query->closeCursor();
			return ($val);
		} catch (PDOException $e) {
			return ($e->getMessage());
		}
}

function get_nb_likes($img) {
	include '../Config/database.php';
	try {
			$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query= $dbh->prepare("SELECT COUNT(*) FROM `like`, gallery WHERE `like`.galleryid=gallery.id AND gallery.img=:img AND `like`.`type`='L'");
			$query->execute(array(':img' => $img));

			$count = 0;
			while ($val = $query->fetch()) {
				var_dump($val);
				$count++;
			}
			$query->closeCursor();
			return ($count);
		} catch (PDOException $e) {
			return ($e->getMessage());
		}
}

function get_nb_likes2($img) {
	include '../Config/database.php';
	try {
			$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query= $dbh->prepare("SELECT `type` FROM `like`, `gallery` WHERE `like`.galleryid = gallery.id AND gallery.img = '5bd1edca17be4.png' AND `like`.`type` = 'L'");
			$query->execute(array(':img' => $img));

			$count = 0;
			while ($val = $query->fetch()) {
				$count++;
			}
			$query->closeCursor();
			return ($count);
		} catch (PDOException $e) {
			return ($e->getMessage());
		}
}

function get_nb_dislikes($img) {
	include '../Config/database.php';
	try {
			$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query= $dbh->prepare("SELECT COUNT(*) FROM `like`, gallery WHERE `like`.galleryid=gallery.id AND gallery.img=:img AND `like`.type='D'");
			$query->execute(array(':img' => $img));

			$val = $query->fetch();
			$query->closeCursor();
			return ($val);
		} catch (PDOException $e) {
			return ($e->getMessage());
		}
}

function get_nb_dislikes2($img) {
	include '../Config/database.php';
	try {
			$dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query= $dbh->prepare("SELECT type FROM `like`, gallery WHERE `like`.galleryid=gallery.id AND gallery.img=:img AND `like`.type='D'");
			$query->execute(array(':img' => $img));

			$count = 0;
			while ($val = $query->fetch()) {
				$count++;
			}
			$query->closeCursor();
			return ($count);
		} catch (PDOException $e) {
			return ($e->getMessage());
		}
}

?>
