<?php
/**
 * DisbursementsApi
 * PHP version 5
 *
 * @category Class
 * @package  FincraDeveloperApi
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace FincraDeveloperApi\Api;

use \FincraDeveloperApi\Configuration;
use \FincraDeveloperApi\ApiClient;
use \FincraDeveloperApi\ApiException;
use \FincraDeveloperApi\ObjectSerializer;

/**
 * DisbursementsApi Class Doc Comment
 *
 * @category Class
 * @package  FincraDeveloperApi
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisbursementsApi
{

    /**
     * API Client
     * @var \FincraDeveloperApi\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \FincraDeveloperApi\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://DEFAULT');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \FincraDeveloperApi\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \FincraDeveloperApi\ApiClient $apiClient set the API client
     * @return DisbursementsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * makeAPayout
     *
     * Make A Payout
     *
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function makeAPayout()
    {
        list($response, $statusCode, $httpHeader) = $this->makeAPayoutWithHttpInfo ();
        return $response; 
    }


    /**
     * makeAPayoutWithHttpInfo
     *
     * Make A Payout
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function makeAPayoutWithHttpInfo()
    {
        
  
        // parse inputs
        $resourcePath = "/disbursements/payouts";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * makeAnInternalPayout
     *
     * Make  An Internal  Payout
     *
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function makeAnInternalPayout()
    {
        list($response, $statusCode, $httpHeader) = $this->makeAnInternalPayoutWithHttpInfo ();
        return $response; 
    }


    /**
     * makeAnInternalPayoutWithHttpInfo
     *
     * Make  An Internal  Payout
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function makeAnInternalPayoutWithHttpInfo()
    {
        
  
        // parse inputs
        $resourcePath = "/disbursements/payouts/wallets";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * getallsettlementsforaBusiness
     *
     * Get all settlements for a Business
     *
     * @param string $business_id businessID (required)
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getallsettlementsforaBusiness($business_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getallsettlementsforaBusinessWithHttpInfo ($business_id);
        return $response; 
    }


    /**
     * getallsettlementsforaBusinessWithHttpInfo
     *
     * Get all settlements for a Business
     *
     * @param string $business_id businessID (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getallsettlementsforaBusinessWithHttpInfo($business_id)
    {
        
        // verify the required parameter 'business_id' is set
        if ($business_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_id when calling getallsettlementsforaBusiness');
        }
  
        // parse inputs
        $resourcePath = "/disbursements/settlements/search/business/{businessID}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($business_id !== null) {
            $resourcePath = str_replace(
                "{" . "businessID" . "}",
                $this->apiClient->getSerializer()->toPathValue($business_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * getasettlementforabusiness
     *
     * Get a settlement for a business
     *
     * @param string $settlement_id settlementId (required)
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getasettlementforabusiness($settlement_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getasettlementforabusinessWithHttpInfo ($settlement_id);
        return $response; 
    }


    /**
     * getasettlementforabusinessWithHttpInfo
     *
     * Get a settlement for a business
     *
     * @param string $settlement_id settlementId (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getasettlementforabusinessWithHttpInfo($settlement_id)
    {
        
        // verify the required parameter 'settlement_id' is set
        if ($settlement_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $settlement_id when calling getasettlementforabusiness');
        }
  
        // parse inputs
        $resourcePath = "/disbursements/settlements/{settlementId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($settlement_id !== null) {
            $resourcePath = str_replace(
                "{" . "settlementId" . "}",
                $this->apiClient->getSerializer()->toPathValue($settlement_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
}
