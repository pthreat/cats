<?php

	use fstange\cats\canvas\Element	as	CanvasElement;

	namespace stange\cats{

		use \stange\cats\resource\Javascript;
		use \stange\cats\resource\Stylesheet;

		class Canvas extends \DomDocument{

			private	$styleSheets	=	NULL;
			private	$javascripts	=	NULL;

			public function __construct($version=NULL,$encoding=NULL){

				$this->styleSheets	=	new \ArrayObject();
				$this->javascripts	=	new \ArrayObject();

				parent::__construct($version,$encoding);

			}

			public function addJavascript(Javascript $javascript){

				$this->styleSheets->push($style);

			}

			public function addStyleSheet(StyleSheet $style){

				$this->styleSheets->push($style);
				return $this;		

			}

			public function hasStyleSheet($name){

				return (boolean)$this->getStyleSheetByName($name);

			}

			public function getStyleSheetByName($name){

				$matching	=	Array();

				foreach($this->styleSheets as $style){

					if($style->getName()!==$name){

						continue;

					}
				
				}

				return $matching;

			}

			public function getStyleSheets(){

				return $this->styleSheets;

			}

		}

	}
