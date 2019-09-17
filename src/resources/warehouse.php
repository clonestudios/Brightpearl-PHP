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

    "models" => array(

    ),
);
