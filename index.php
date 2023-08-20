<?php
if ($_SERVER['REQUEST_URI'] !== '/') {
  // Redirect ke halaman index paling depan
  header('Location: Dashboard/');
  exit();
}
