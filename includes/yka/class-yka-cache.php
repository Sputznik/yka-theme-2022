<?php

	class YKA_CACHE{
		
		var $cache;
		
		private static $instance;										// Hold an instance of the class
		
		function __construct(){
			
			$this->cache = array();
			
		}
		
		public static function getInstance(){
			if (!isset(self::$instance)) {
				self::$instance = new YKA_CACHE;
			}
			return self::$instance;
		}
		
		// Using & to return the object by reference
		function &getCache( $type ){
			
			
			if( !isset( $this->cache[ $type ] ) ){						// CHECK IF TYPE OF CACHE HAS BEEN ENABLED, IF NOT THEN INITIALIZE 
				$this->cache[ $type ] = array();
			}
			
			return $this->cache[ $type ];
			
		}
		
		function setCache( $type, $key, $value ){
			
			if( $type && $key && $value ){
				
				$cache = &$this->getCache( $type );								// GET FROM CLASS ATTRIBUTE
					
				$cache[ $key ] = $value;										// SET INTO CACHE
			
			}
			
		}
		
		function getData( $type, $key, $fn ){
			
			$cache = &$this->getCache( $type );									// GET FROM CLASS ATTRIBUTE
			
			if( ! isset( $cache[ $key ] ) ){									// CHECK IF DATA IS IN THE CACHE
				
				$value = call_user_func( $fn, $key );							// SET THE VALUE OF THE RETURN PARAMETER PASSED BY THE FUNCTION
				
				$this->setCache( $type, $key, $value );							// SET CACHE
				
			}
			if( isset( $cache[ $key ] ) ){
				return $cache[ $key ];
			}
			return false;												// RETURN CACHE OBJECT
		}
		
	}
