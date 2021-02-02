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
         *    getWebhook() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/integration/webhook/get.html
         */
        "getWebhook" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/integration-service/webhook/{id}",
            "summary" => "Get webhook(s) for resource events",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Id of webhook(s) to retrieve",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    postWebhook() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/integration/webhook/post.html
         */
        "postWebhook" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/integration-service/webhook",
            "summary" => "Create webhook for resource events",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "subscribeTo" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Resource event to hook",
                    "required" => true,
                ),

                "httpMethod" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "HTTP method to use for receiving the event data (ie. POST, GET, PUT, etc)",
                    "required" => true,
                ),

                "uriTemplate" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Your application's URI to receive the webhook's event",
                    "required" => true,
                ),

                "bodyTemplate" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Template to format the http body of the event",
                    "required" => true,
                ),

                "contentType" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Mime type of http body to use (xml, json, etc)",
                    "required" => true,
                ),

                "idSetAccepted" => array(
                    "type" => "boolean",
                    "location" => "json",
                    "description" => "Mime type of http body to use (xml, json, etc)",
                    "required" => true,
                ),

                "qualityOfService" => array(
                    "type" => "",
                    "location" => "json",
                    "description" => "Mime type of http body to use (xml, json, etc)",
                    "required" => true,
                ),

            ),
        ),

        /**
         *    deleteWebhook() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/integration/webhook/delete.html
         */
        "deleteWebhook" => array(
            "httpMethod" => "DELETE",
            "uri" => "/{apiVersion}/{account_code}/integration-service/webhook/{id}",
            "summary" => "Delete webhook for resource events",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "integer",
                    "location" => "uri",
                    "description" => "Id of webhook to delete",
                    "required" => false,
                ),

            ),
        ),
        
        /**
         *    simulateWebhook() method
         *
         *    reference: https://api-docs.brightpearl.com/integration/webhook-simulate/post.html
         */
        "simulateWebhook" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/integration-service/webhook/{id}/simulate",
            "summary" => "Test a registered webhook with test data",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                
                "id" => array(
                    "type" => "integer",
                    "location" => "uri",
                    "description" => "Id of webhook to simulate.",
                    "required" => true,
                ),
                
                "${account-code}" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The account code of the brightpearl account.",
                    "required" => false,
                ),
                
                "${resource-type}" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The name of the resource. i.e. product.",
                    "required" => false,
                ),
                
                "${resource-id}" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "An id set of all the effected resources.",
                    "required" => false,
                ),
                
                "${lifecycle-event}" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The lifecycle event such as Created.",
                    "required" => false,
                ),
                
                "${resource-specifier}" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The specifier for this resource.",
                    "required" => false,
                ),
                
                "${raised-on}" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Iso 8601 date time formatted time of when this event occurred.",
                    "required" => false,
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
