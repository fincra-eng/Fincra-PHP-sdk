<?php
/**
 * CoreApi
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
 * CoreApi Class Doc Comment
 *
 * @category Class
 * @package  FincraDeveloperApi
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CoreApi
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
     * @return CoreApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getBankcode
     *
     * Get Bank code
     *
     * @param string $currency e.g NGN, GHS, KES (required)
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getBankcode($currency)
    {
        list($response, $statusCode, $httpHeader) = $this->getBankcodeWithHttpInfo ($currency);
        return $response; 
    }


    /**
     * getBankcodeWithHttpInfo
     *
     * Get Bank code
     *
     * @param string $currency e.g NGN, GHS, KES (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getBankcodeWithHttpInfo($currency)
    {
        
        // verify the required parameter 'currency' is set
        if ($currency === null) {
            throw new \InvalidArgumentException('Missing the required parameter $currency when calling getBankcode');
        }
  
        // parse inputs
        $resourcePath = "/core/banks";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($currency !== null) {
            $queryParams['currency'] = $this->apiClient->getSerializer()->toQueryValue($currency);
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
    
    /**
     * getbranchCode
     *
     * Get branch Code
     *
     * @param string $bank_id Id of the bank (required)
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getbranchCode($bank_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getbranchCodeWithHttpInfo ($bank_id);
        return $response; 
    }


    /**
     * getbranchCodeWithHttpInfo
     *
     * Get branch Code
     *
     * @param string $bank_id Id of the bank (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getbranchCodeWithHttpInfo($bank_id)
    {
        
        // verify the required parameter 'bank_id' is set
        if ($bank_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bank_id when calling getbranchCode');
        }
  
        // parse inputs
        $resourcePath = "/core/banks/{bankId}/branches";
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
        
        if ($bank_id !== null) {
            $resourcePath = str_replace(
                "{" . "bankId" . "}",
                $this->apiClient->getSerializer()->toPathValue($bank_id),
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
    
    /**
     * getadisbursementtransactionbycustomerreference
     *
     * Get a disbursement transaction by customer reference
     *
     * @param string $business The ID of the business (required)
     * @param string $customer_reference The reference of the customer/merchant (required)
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getadisbursementtransactionbycustomerreference($business, $customer_reference)
    {
        list($response, $statusCode, $httpHeader) = $this->getadisbursementtransactionbycustomerreferenceWithHttpInfo ($business, $customer_reference);
        return $response; 
    }


    /**
     * getadisbursementtransactionbycustomerreferenceWithHttpInfo
     *
     * Get a disbursement transaction by customer reference
     *
     * @param string $business The ID of the business (required)
     * @param string $customer_reference The reference of the customer/merchant (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getadisbursementtransactionbycustomerreferenceWithHttpInfo($business, $customer_reference)
    {
        
        // verify the required parameter 'business' is set
        if ($business === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business when calling getadisbursementtransactionbycustomerreference');
        }
        // verify the required parameter 'customer_reference' is set
        if ($customer_reference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_reference when calling getadisbursementtransactionbycustomerreference');
        }
  
        // parse inputs
        $resourcePath = "/core/transactions/disbursements/by-customer-reference";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($business !== null) {
            $queryParams['business'] = $this->apiClient->getSerializer()->toQueryValue($business);
        }// query params
        
        if ($customer_reference !== null) {
            $queryParams['customerReference'] = $this->apiClient->getSerializer()->toQueryValue($customer_reference);
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
    
    /**
     * getadisbursementtransactionbyreference
     *
     * Get a disbursement transaction by reference
     *
     * @param string $business The ID of business (required)
     * @param string $reference The reference of the transaction (required)
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getadisbursementtransactionbyreference($business, $reference)
    {
        list($response, $statusCode, $httpHeader) = $this->getadisbursementtransactionbyreferenceWithHttpInfo ($business, $reference);
        return $response; 
    }


    /**
     * getadisbursementtransactionbyreferenceWithHttpInfo
     *
     * Get a disbursement transaction by reference
     *
     * @param string $business The ID of business (required)
     * @param string $reference The reference of the transaction (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getadisbursementtransactionbyreferenceWithHttpInfo($business, $reference)
    {
        
        // verify the required parameter 'business' is set
        if ($business === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business when calling getadisbursementtransactionbyreference');
        }
        // verify the required parameter 'reference' is set
        if ($reference === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reference when calling getadisbursementtransactionbyreference');
        }
  
        // parse inputs
        $resourcePath = "/core/transactions/disbursements/by-reference";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($business !== null) {
            $queryParams['business'] = $this->apiClient->getSerializer()->toQueryValue($business);
        }// query params
        
        if ($reference !== null) {
            $queryParams['reference'] = $this->apiClient->getSerializer()->toQueryValue($reference);
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
    
    /**
     * getthetransactionsforaBusiness
     *
     * Get the transactions for a Business
     *
     * @param string $business_id This could be the ID of the business or the ID of a sub-account of the business (required)
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getthetransactionsforaBusiness($business_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getthetransactionsforaBusinessWithHttpInfo ($business_id);
        return $response; 
    }


    /**
     * getthetransactionsforaBusinessWithHttpInfo
     *
     * Get the transactions for a Business
     *
     * @param string $business_id This could be the ID of the business or the ID of a sub-account of the business (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getthetransactionsforaBusinessWithHttpInfo($business_id)
    {
        
        // verify the required parameter 'business_id' is set
        if ($business_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_id when calling getthetransactionsforaBusiness');
        }
  
        // parse inputs
        $resourcePath = "/core/transactions/search/business/{businessID}";
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
     * getthetransactionsforthesubAccountsofabusiness
     *
     * Get the transactions for the sub-accounts of a Business
     *
     * @param string $business_id The is the ID of a business (required)
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getthetransactionsforthesubAccountsofabusiness($business_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getthetransactionsforthesubAccountsofabusinessWithHttpInfo ($business_id);
        return $response; 
    }


    /**
     * getthetransactionsforthesubAccountsofabusinessWithHttpInfo
     *
     * Get the transactions for the sub-accounts of a Business
     *
     * @param string $business_id The is the ID of a business (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getthetransactionsforthesubAccountsofabusinessWithHttpInfo($business_id)
    {
        
        // verify the required parameter 'business_id' is set
        if ($business_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $business_id when calling getthetransactionsforthesubAccountsofabusiness');
        }
  
        // parse inputs
        $resourcePath = "/core/transactions/search/business/{businessID}/sub-accounts";
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
     * getatransactionforabusiness
     *
     * Get a transaction for a business
     *
     * @param string $transaction_id The reference or ID of the transaction (required)
     * @return void
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getatransactionforabusiness($transaction_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getatransactionforabusinessWithHttpInfo ($transaction_id);
        return $response; 
    }


    /**
     * getatransactionforabusinessWithHttpInfo
     *
     * Get a transaction for a business
     *
     * @param string $transaction_id The reference or ID of the transaction (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \FincraDeveloperApi\ApiException on non-2xx response
     */
    public function getatransactionforabusinessWithHttpInfo($transaction_id)
    {
        
        // verify the required parameter 'transaction_id' is set
        if ($transaction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transaction_id when calling getatransactionforabusiness');
        }
  
        // parse inputs
        $resourcePath = "/core/transactions/{transactionID}";
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
        
        if ($transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "transactionID" . "}",
                $this->apiClient->getSerializer()->toPathValue($transaction_id),
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
