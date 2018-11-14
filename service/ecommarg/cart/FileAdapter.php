<?php
	namespace ecommarg\cart;

	
	use ecommarg\cart\SaveAdapterInterface;
	
	class FileAdapter implements SaveAdapterInterface
	{
		const FILE='ecommarg_cart_list.txt';
		private $file = null;

		public function __construct($path, $file=null)
		{
			$this->file = sprintf('%s/%s',$path,
					null === $file ? self::FILE : $file

				);
		}

		public function set($key,$value)
		{
			file_put_contents($this->file, "$key=$value\n",\FILE_APPEND);
		}

		public function get($key)
		{
			return file_get_contents($this->file);
		}

		public function getAll()
		{
			return $this->get("");
		}

	
	}