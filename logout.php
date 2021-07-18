<?php
session_start();
session_unset();
session_commit();
header("location:index");