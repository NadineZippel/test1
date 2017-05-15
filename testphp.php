<?php

echo 'Aloa' ;

session_start() ;

echo $_session['test'];

$_session['test'] = 'Hallo';

