<?php

	$uri	=	"http://as";
	$a	=	"aaa";
	var_dump(preg_match('#[a-zA-Z]+\:\/\/.*#',$uri));
	var_dump(preg_match('#[a-zA-Z]+\:\/\/.*#',$a));
