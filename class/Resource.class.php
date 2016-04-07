<?php

	namespace stange\cats{

		class Resource{

			private	$name			=	NULL;
			private	$type			=	NULL;
			private	$uri			=	NULL;

			public function __construct($uri,$type=NULL,$name=NULL){

				$this->setUri($uri);

				$name	=	trim($name);

				if(empty($name)){

					$name	=	basename($this->uri);

				}
				
				$this->setName($name);

				$type	=	trim($type);

				if(empty($type)){

					$resource	=	basename($resource);
					$type			=	substr($resource,strrpos($resource,'.'));

				}

				$this->setType($type);

			}

			public function setType($type){

				$type	=	trim($type);

				if(empty($type)){

					throw new \Exception("Type can not be empty");

				}

				return $this->type	=	$type;

			}

			public function setUri($uri){

				$uri	=	trim($uri);

				if(empty($uri)){

					throw new \Exception("URI can not be empty");

				}

				return $this->uri	=	$uri;

			}

			public function getUri(){

				return $this->uri;	

			}

			public function setName($name){

				$name			=	trim($name);

				if(empty($name)){

					throw new \Exception("Resource name can not be empty");

				}

				$this->name	=	$name;

				return $this;

			}

			public function getName(){

				return $this->name;

			}

			public function isExternal(){

				return (boolean)preg_match('#[a-zA-Z]+\:\/\/.*#',$this->uri);

			}

			public function isLocal(){

				return !$this->isExternal();

			}

			public function __toString(){

				return sprintf('%s',$this->uri);

			}

		}

	}
