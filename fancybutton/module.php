<?php

declare(strict_types=1);
	class fancybutton extends IPSModule
	{
		public function Create()
		{
			//Never delete this line!
			parent::Create();
			
			$this->RegisterVariableBoolean('Switch','Switch');
			$this->EnableAction('Switch');

			$this->SetVisualizationType(1);
		}

		public function Destroy()
		{
			//Never delete this line!
			parent::Destroy();
		}

		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
		}

		public function RequestAction($ident, $value)
		{
			switch ($ident)
			{
				case 'Switch';
					$this->SetValue($ident, $value);
					break;
			}
		}

		public function GetVisualisationTile()
		{
			$htmlfile = file_get_contents(__DIR__ . '/module.html');
			return $htmlfile;
		}
	}