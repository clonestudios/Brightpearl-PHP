<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getWarehouse() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/warehouse/get.html
         */
        "getWarehouse" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/warehouse/{id}",
            "summary" => "Get warehouse(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of warehouse(s) to get",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    getWarehouseAvailability() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/warehouse/product-availability/get.html
         */
        "getWarehouseAvailability" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/product-availability/{id}",
            "summary" => "Get warehouse(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of warehouse(s) to get",
                    "required" => false,
                ),

            ),
        ),
        
        /**
         *    getBundleAvailability() method
         *
         *    reference: https://api-docs.brightpearl.com/warehouse/bundle-availability/get.html
         */
        "getBundleAvailability" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/bundle-availability/{id}",
            "summary" => "Returns the bundle availability for a given bundle product ID.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of bundle to get",
                    "required" => true,
                ),

            ),
        ),

        /**
         *    getWarehouseDefaultLocation() method
         *
         *    reference: http://api-docs.brightpearl.com/warehouse/default-location/get.html
         */
        "getWarehouseDefaultLocation" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/warehouse/{id}/location/default",
            "summary" => "Get warehouse(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of warehouse(s) to get",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    getGoodsOutNote() method
         *
         *    reference: http://api-docs.brightpearl.com/warehouse/goods-out-note/get.html
         */
        "getGoodsOutNote" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/order/{order_id}/goods-note/goods-out/{id}",
            "summary" => "Get goods out note(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "order_id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of order(s) to get the goods notes",
                    "required" => false,
                ),
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of goods out(s) to get",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    saveGoodsOutNoteEvent() method
         *
         *    reference: http://api-docs.brightpearl.com/warehouse/goods-out-note/put.html
         */
        "saveGoodsOutNote" => array(
            "httpMethod" => "PUT",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/goods-note/goods-out/{id}",
            "summary" => "save goods out note(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of goods out(s) to get",
                    "required" => true,
                ),
                "body" => array(
                    "type" => "string",
                    "location" => "body",
                    "description" => "save goods out note",
                    "required" => true,
                ),

            ),
        ),
        
        /**
         *    deleteGoodsOutNote() method
         *
         *    reference: http://api-docs.brightpearl.com/warehouse/goods-out-note/delete.html
         */
        "deleteGoodsOutNote" => array(
            "httpMethod" => "DELETE",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/order/{order_id}/goods-note/goods-out/{id}",
            "summary" => "delete goods out note",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "order_id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of order to delete the goods notes",
                    "required" => true,
                ),
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of goods out to delete",
                    "required" => true,
                ),

            ),
        ),

        /**
         *    saveGoodsOutNoteEvent() method
         *
         *    reference: http://api-docs.brightpearl.com/warehouse/goods-out-note/post.html
         */
        "saveGoodsOutNoteEvent" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/goods-note/goods-out/{id}/event",
            "summary" => "save goods out note(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of goods out(s) to get",
                    "required" => true,
                ),
                "events" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "save goods out note event",
                    "required" => true,
                ),

            ),
        ),

        /**
         *    stockCorrections() method
         *
         *    reference: http://api-docs.brightpearl.com/warehouse/stock-correction/post.html
         */
        "saveStockCorrections" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/warehouse/{warehouse_id}/stock-correction",
            "summary" => "save stock correction",
            "responseModel" => "defaultJsonResponse",

            "parameters" => array(

                "warehouse_id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "warehouse",
                    "required" => true,
                ),
                "corrections" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "corrections",
                    "required" => true,
                ),
            ),
        ),


        /**
         *    saveGoodsInNote() method
         *
         *    reference: http://api-docs.brightpearl.com/warehouse/goods-in-note/post.html
         */
        "saveGoodsInNote" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/order/{order_id}/goods-note/goods-in",
            "summary" => "save goods in note",
            "responseModel" => "defaultJsonResponse",

            "parameters" => array(

                "order_id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "order id",
                    "required" => true,
                ),
                "body" => array(
                    "type" => "string",
                    "location" => "body",
                    "description" => "body",
                    "required" => true,
                ),
            ),
        ),


        /**
         *    getStockTransfer() method
         *
         *    reference: http://api-docs.brightpearl.com/warehouse/stock-transfer/get.html
         */
        "getStockTransfer" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/stock-transfer/{id}",
            "summary" => "Get stock transfer(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of the transfer to get",
                    "required" => true,
                ),
            ),
        ),


        /**
         *    releaseQuarantine() method
         *
         *    reference: http://api-docs.brightpearl.com/warehouse/quarantine-release/post.html
         */
        "releaseQuarantine" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/warehouse-service/warehouse/{id}/quarantine/release",
            "summary" => "create Quarantine Release",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of the the warehouse",
                    "required" => true,
                ),
                "productId" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "product id",
                    "required" => true,
                ),
                "quantity" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "quantity",
                    "required" => true,
                ),
                "toLocationId" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "to locaiton id",
                    "required" => true,
                ),
            ),
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(),
);
