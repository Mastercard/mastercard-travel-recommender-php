<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\TravelRecommender;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class Consumer extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "ba4cc9e2-64e9-4871-a6be-18cb49b96d42":
				return new OperationConfig("/labs/proxy/mtr/recommender/api/v1/consumer", "create", array(), array());
			case "33046de8-4f2e-49dc-b497-b5a2ab216535":
				return new OperationConfig("/labs/proxy/mtr/recommender/api/v1/consumer/{consumerId}", "delete", array(), array());
			case "ccefd68b-5279-4da3-b14e-6be6acf4ba5d":
				return new OperationConfig("/labs/proxy/mtr/recommender/api/v1/consumer/{consumerId}", "read", array(), array());
			case "376283ad-2ec7-480e-af38-65999a25d12a":
				return new OperationConfig("/labs/proxy/mtr/recommender/api/v1/consumer", "query", array("max","offset"), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
	}


   /**
	* Creates object of type Consumer
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Consumer of the response of created instance.
	*/
	public static function create($map)
	{
		return self::execute("ba4cc9e2-64e9-4871-a6be-18cb49b96d42", new Consumer($map));
	}








   /**
	* Delete object of type Consumer by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Consumer of the response.
	*/
	public static function deleteById($id, $requestMap = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if (!empty($requestMap)) {
			$map->setAll($requestMap);
		}
		return self::execute("33046de8-4f2e-49dc-b497-b5a2ab216535", new Consumer($map));
	}

   /**
	* Delete this object of type Consumer
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Consumer of the response.
	*/
	public function delete()
	{
		return self::execute("33046de8-4f2e-49dc-b497-b5a2ab216535", $this);
	}






	/**
	 * Returns objects of type Consumer by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Consumer of the response
	 */
	public static function read($id, $criteria = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if ($criteria != null) {
			$map->setAll($criteria);
		}
		return self::execute("ccefd68b-5279-4da3-b14e-6be6acf4ba5d",new Consumer($map));
	}






	/**
	 * Query objects of type Consumer by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Consumer of the response
	 */
	public static function query($criteria)
	{
		return self::execute("376283ad-2ec7-480e-af38-65999a25d12a",new Consumer($criteria));
	}


}

