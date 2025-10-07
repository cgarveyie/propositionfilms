<?php

/******************************************************************************/
/******************************************************************************/

class Template
{
	/**************************************************************************/

	private $path;
	private $config;
	private $request;

	/**************************************************************************/

	function __construct()
	{
		global $config;

		require_once(dirname(__FILE__).'/../config.php');

		$this->path=null;
		$this->request=null;
		$this->config=$config;

		if($this->setRequest())
		{
			if(!in_array($this->request,array('home','menu')))
			{
				$this->setPath();
			}
		}	
	}

	/**************************************************************************/

	private function setPath()
	{
		$this->path=null;

		foreach($this->config['page'] as $data)
		{
			if($data['hash']==$this->request)
				$this->path='page/'.$data['fileHTML'];
		}	

		if(is_null($this->path))
			$this->path='page/'.basename($this->request);

		if(!file_exists($this->path))
		{
			$this->path=null;
			$this->request=null;
		}
	}

	/**************************************************************************/

	private function setRequest()
	{
		$key='_escaped_fragment_';

		if(!array_key_exists($key,$_GET)) return(false);
		if(!mb_strlen($_GET[$key],'UTF-8')) return(false);

		$this->request=trim($_GET[$key]);

		return(true);
	}

	/**************************************************************************/

	public function loadFile()
	{
		if(is_null($this->request)) return;
		if(in_array($this->request,array('home','menu'))) return;

		require_once($this->path);
	}

	/**************************************************************************/

	public function getURL($request=null)
	{
		if(is_null($request)) return($this->config['template']['hashBang']);
		return(($this->getRequestType()==2 ? '?_escaped_fragment_=' : $this->config['template']['hashBang']).$request);
	}

	/**************************************************************************/

	public function _getURL($page=null)
	{
		echo $this->getURL($page);
	}

	/**************************************************************************/

	public function getRequestType()
	{
		return(is_null($this->request) ? 1 : 2);
	}

	/**************************************************************************/

	public function getRequest()
	{
		return($this->request);
	}

	/**************************************************************************/

	public function getTitle()
	{
		return($this->getMeta('title'));
	}

	/**************************************************************************/

	public function getKeywords()
	{
		return($this->getMeta('keywords'));
	}

	/**************************************************************************/

	public function getDescription()
	{
		return($this->getMeta('description'));
	}

	/**************************************************************************/

	public function getMeta($name)
	{
		foreach($this->config['page'] as $value)
		{
			if($value['hash']==$this->request)
			{
				if(array_key_exists($name,$value)) return($value[$name]);
			}
		}

		return($this->config['template'][$name]);
	}

	/**************************************************************************/

	function processConfig()
	{
		global $config;

		require_once('config.php');

		$config['template']['requestType']=$this->getRequestType();
		$config['template']['requestCurrent']=$this->getRequestType()==2 ? $this->request : '';

		echo 'var config='.json_encode($config).';';
	}

	/**************************************************************************/

	static function _header($header,$subheaderFirstLine,$subheaderSecondLine)
	{
		$html=null;

		if(!Template::isEmpty($header))
			$html.='<h1 class="template-page-header"><span>'.$header.'</span></h1>';
		if((!Template::isEmpty($subheaderFirstLine)) || (!Template::isEmpty($subheaderSecondLine)))
		{
			$html.='<h3 class="template-page-subheader">';

			if(!Template::isEmpty($subheaderFirstLine)) $html.=$subheaderFirstLine;
			if(!Template::isEmpty($subheaderSecondLine)) $html.='<span>'.$subheaderSecondLine.'</span>';

			$html.='</h3>';
		}

		echo $html;
	}

	/**************************************************************************/

	static function _footer($file=null)
	{
		global $footerFile;

		$footerFile=dirname(__FILE__).'/../include/'.(is_null($file) ? 'footer_default.php' : $file);

		require_once(dirname(__FILE__).'/../include/footer.php');
	}

	/**************************************************************************/

	static function _include($file='sidebar.php')
	{
		require_once(dirname(__FILE__).'/../include/'.$file);			
	}

	/**************************************************************************/

	static function _html($text)
	{
		echo htmlspecialchars(trim($text));
	}

	/**************************************************************************/

	static function isEmpty($value)
	{
		return(mb_strlen(trim($value),'UTF-8') ? false : true);
	}

	/**************************************************************************/

	static function output($data,$path)
	{
		ob_start();
		include($path);
		return(ob_get_clean());
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/