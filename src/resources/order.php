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
         *    getOrder() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/order/order/get.html
         */
        "getOrder" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/order-service/order/{id}?includeOptional={includeOptional}",
            "summary" => "Retrieve order(s) (https://www.brightpearl.com/developer/latest/order/order/get.html)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Order id",
                    "required" => true,
                ),
                "includeOptional" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "optional parameters",
                    "required" => false,
                ),

            ),
        ),
        
        /**
         *    postSalesOrder() method
         *
         *    reference: https://api-docs.brightpearl.com/order/sales-order/post.html
         */
        "postSalesOrder" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/order-service/sales-order/",
            "summary" => "Create Sales order(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "customer" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The customer id to assign the Order to.",
                    "required" => true,
                    "id" => array(
                        "type" => "integer",
                        "location" => "json",
                    ),
                    "address" => array(
                        "type" => "array",
                        "location" => "json",
                        "addressFullName" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "companyName" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine1" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine2" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine3" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine4" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "postalCode" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "countryId" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "countryIsoCode" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "telephone" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "mobileTelephone" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "email" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                    ),
                ),
                
                "billing" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The ID of the customer you wish to use as the billing contact for this order. If not specified the primary contact of the customers organisation will be used.",
                    "required" => false,
                    "contactId" => array(
                        "type" => "integer",
                        "location" => "json",
                    ),
                    "address" => array(
                        "type" => "array",
                        "location" => "json",
                        "addressFullName" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "companyName" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine1" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine2" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine3" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine4" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "postalCode" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "countryId" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "countryIsoCode" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "telephone" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "mobileTelephone" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "email" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                    ),
                ),
                
                "ref" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The Customer reference you wish to assign to this order.",
                    "required" => false,
                ),
                
                "placedOn" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The date this Order was placed on. If this is not specified todays date will be used. (ISO8601 format)",
                    "required" => false,
                ),
                
                "taxDate" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The date this Order was placed on. If this is not specified todays date will be used. (ISO8601 format)",
                    "required" => false,
                ),
                
                "parentId" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "You can use parentId if you want to link your new order to an existing order in Brightpearl.",
                    "required" => false,
                ),
                
                "statusId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The ID of the status you wish to assign to this order. If no status ID is specified then the configured default is used.",
                    "required" => false,
                ),
                
                "warehouseId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The ID of the warehouse which will be used by default for fulfilment.",
                    "required" => false,
                ),
                
                "channelId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The ID of the channel you wish to assign this order to.",
                    "required" => false,
                ),
                
                "externalRef" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The external reference you wish to assign to this order. When both externalRef and installedIntegrationInstanceId are provided they form a unique compound key. If another order is posted with the same combination it will be assumed to be a duplicate and result in a 200 response. No changes will be made to the order in this case.",
                    "required" => false,
                ),
                
                "installedIntegrationInstanceId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "See note above for externalRef.",
                    "required" => false,
                ),
                
                "staffOwnerId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The ID of the staff member who owns this order. If you do not specify this value then it will be set automatically if you have the auto assign property enabled in your sales settings.",
                    "required" => false,
                ),
                
                "projectId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The ID of the project you wish to assign this order to.",
                    "required" => false,
                ),
                
                "leadSourceId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The ID of the lead source you wish to assign this order to. If not specified the default for the customer is used.",
                    "required" => false,
                ),
                
                "teamId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The ID of the team you wish to assign this order to.",
                    "required" => false,
                ),
                
                "priceListId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The ID of the price list you wish to use for this order. If no price list ID is provided the customer's assigned price list is used.",
                    "required" => false,
                ),
                
                "priceModeCode" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "INC or EXC. Allows you to override the price list's price mode.",
                    "required" => false,
                ),
                
                "currency" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The currency you wish to set this Order to be.",
                    "required" => false,
                    "code" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "fixedExchangeRate" => array(
                        "type" => "boolean",
                        "location" => "json",
                    ),
                    "exchangeRate" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                ),
                
                "delivery" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The date you wish to have the Order delivered On.",
                    "required" => false,
                    "date" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "address" => array(
                        "type" => "array",
                        "location" => "json",
                        "addressFullName" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "companyName" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine1" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine2" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine3" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine4" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "postalCode" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "countryId" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "countryIsoCode" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "telephone" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "mobileTelephone" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "email" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                    ),
                     "shippingMethodId" => array(
                        "type" => "integer",
                        "location" => "json",
                    ),
                ),
                
                "rows" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "An array of order rows associated with this order.",
                    "required" => false,
                    "productId" => array(
                        "type" => "integer",
                        "location" => "json",
                    ),
                    "name" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "quantity" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "taxCode" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "net" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "tax" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "nominalCode" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "sequence" => array(
                        "type" => "integer",
                        "location" => "json",
                    ),
                ),
            ),
        ),
        
        /**
         *    postOrder() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/order/order/post.html
         */
        "postOrder" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/order-service/order/",
            "summary" => "Create order(s)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "orderTypeCode" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "SO - Sales Order
                                      SC - Sales Credit
                                      PO - Purchase Order
                                      PC - Purchase Credit",
                    "required" => true,
                ),

                "reference" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The Customer/Supplier reference you wish to assign to this Order.",
                    "required" => false,
                ),

                "priceListId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The Id of the Price List you wish to use for this Order.
                                      If no Price List Id is sent in the Customer/Supplier's assigned Price List is used.",
                    "required" => false,
                ),

                "placedOn" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The date this Order was placed on. If this is not specified todays date will be used. (ISO8601 format)",
                    "required" => false,
                ),

                "orderStatus" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The Id of the Status you wish to assign to this Order.",
                    "required" => false,
                    "orderStatusId" => array(
                        "type" => "integer",
                        "location" => "json",
                    ),
                ),

                "delivery" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The date you wish to have the Order delivered On.",
                    "required" => false,
                    "deliveryDate" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "shippingMethodId" => array(
                        "type" => "integer",
                        "location" => "json",
                    ),
                ),

                "invoices" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "Array of invoice objects.",
                    "required" => false,
                ),

                "currency" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The currency you wish to set this Order to be.",
                    "required" => false,
                    "orderCurrencyCode" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                ),

                "parties" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "The date you wish to have the Order delivered On.",
                    "required" => true,
                    "customer" => array(
                        "type" => "array",
                        "location" => "json",
                        "contactId" => array(
                            "type" => "integer",
                            "location" => "json",
                        ),
                    ),
                    "supplier" => array(
                        "type" => "array",
                        "location" => "json",
                        "contactId" => array(
                            "type" => "integer",
                            "location" => "json",
                        ),
                    ),
                    "delivery" => array(
                        "type" => "array",
                        "location" => "json",
                        "addressFullName" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "companyName" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine1" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine2" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine3" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "addressLine4" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "postalCode" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "countryId" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "countryIsoCode" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "telephone" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "mobileTelephone" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "email" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                    ),
                    "shippingMethodId" => array(
                        "type" => "integer",
                        "location" => "json",
                    ),
                ),

                "assignment" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "Holds details of the assignment of the order such as which staff member is assigned to the order.",
                    "required" => false,
                    "current" => array(
                        "type" => "array",
                        "location" => "json",
                        "channelId" => array(
                            "type" => "integer",
                            "location" => "json",
                        ),
                        "leadSourceId" => array(
                            "type" => "integer",
                            "location" => "json",
                        ),
                        "projectId" => array(
                            "type" => "integer",
                            "location" => "json",
                        ),
                        "staffOwnerContactId" => array(
                            "type" => "integer",
                            "location" => "json",
                        ),
                        "teamId" => array(
                            "type" => "integer",
                            "location" => "json",
                        ),
                    ),
                ),

                "warehouseId" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The Id of the warehouse which will be used by default for fulfilment.",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    postOrderRow() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/order/order-row/post.html
         */
        "postOrderRow" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/order-service/order/{orderId}/row",
            "summary" => "Create order row",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "orderId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Order id",
                    "required" => true,
                ),

                "productId" => array(
                    "type" => "integer",
                    "location" => "json",
                    "description" => "The Id of the Product you wish to add an Order Row of.",
                    "required" => false,
                ),

                "productName" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "The name of the Product you wish to add an Order Row of.",
                    "required" => false,
                ),

                "quantity" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "Order Row Quantity",
                    "required" => true,
                    "magnitude" => array(
                        "type" => "string",
                        "location" => "json",
                        "description" => "The quantity of items in this row. For stock tracked Products this number has to be an integer, for non stock tracked Products this number can be a decimal with 2 decimal places.",
                        "required" => true,
                    ),
                ),

                "rowValue" => array(
                    "type" => "array",
                    "location" => "json",
                    "description" => "Order Row Value",
                    "required" => true,
                    "taxCode" => array(
                        "type" => "string",
                        "location" => "json",
                        "description" => "The Tax Code for this row.",
                        "required" => true,
                    ),
                    "rowNet" => array(
                        "type" => "array",
                        "location" => "json",
                        "description" => "The NET value of this row in the same currency as the order specified in two decimal places.",
                        "required" => true,
                        "value" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "order row net value",
                            "required" => true,
                        ),
                    ),
                    "rowTax" => array(
                        "type" => "array",
                        "location" => "json",
                        "description" => "The NET tax value of this row in the same currency as the order specified in two decimal places.",
                        "required" => true,
                        "value" => array(
                            "type" => "string",
                            "location" => "json",
                            "description" => "order row tax value",
                            "required" => true,
                        ),
                    ),
                ),

                "nominalCode" => array(
                    "type" => "",
                    "location" => "json",
                    "description" => "The nominal code for this row.
                If you do not provide a nominal code, then the following rules will be used to decipher which nominal code will be applied to the row
                - The nominal code associated to the contact will be used
                - If the contact does not have a nominal code, the nominal code associated with the product will be used
                - If the product does not have a nominal code or it is not a Brightpearl product the default sales/purchases nominal code is used",
                    "required" => false,
                ),

            ),
        ),

        /**
         *    patchOrderRow() method
         *
         *    reference: http://api-docs.brightpearl.com/order/order-row/patch.html
         */
        "patchOrderRow" => array(
            "httpMethod" => "PATCH",
            "uri" => "/{apiVersion}/{account_code}/order-service/order/{orderId}/row/{rowId}",
            "summary" => "Updated order row",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "orderId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Order id",
                    "required" => true,
                ),

                "rowId" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Order row id",
                    "required" => true,
                ),

                "body" => array(
                    "type" => "string",
                    "location" => "body",
                    "description" => "body string",
                    "required" => true,
                ),
            ),
        ),

        /**
         *    searchOrder() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/order/order/search.html
         */
        "searchOrder" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/order-service/order-search",
            "summary" => "Retrieve order(s) (https://www.brightpearl.com/developer/latest/order/order/get.html)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "columns" => array(
                    "type" => "array",
                    "location" => "query",
                    "description" => "You may control the set of columns that are included in the results and the order in which they are presented. You may use the columns parameters and provide a comma separated list of column names. e.g. /contact-search?columns=contactId,firstName",
                    "required" => false,
                ),

                "sort" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "When you execute a resource, you may change the default sort order by setting a query parameter sort. The value of this parameter is a comma delimited list of 1-n column names with an optional sort direction separated by a pipe. e.g. /goods-out-note-search?sort=warehouseId,price|DESC",
                    "required" => false,
                ),

                "pageSize" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "",
                    "required" => false,
                ),

                "firstResult" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "",
                    "required" => false,
                ),

                // filters

                "customerRef" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "Order reference no.",
                    "required" => false,
                ),

                "placedOn" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The date the order was placed.",
                    "required" => false,
                ),

                "deliveryDate" => array(
                    "type" => "string",
                    "location" => "query",
                    "description" => "The date the delivery is set for.",
                    "required" => false,
                ),

                "shippingMethodId" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "The ID of the Shipping Method.",
                    "required" => false,
                ),

                "staffOwnerContactId" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "The ID of the Staff member who owns the Order.",
                    "required" => false,
                ),

                "projectId" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "The ID of the project the Order is associated with.",
                    "required" => false,
                ),

                "departmentId" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "The ID of the department the Order is associated with.",
                    "required" => false,
                ),

                "leadSourceId" => array(
                    "type" => "integer",
                    "location" => "query",
                    "description" => "The ID of the lead source the Order is associated with.",
                    "required" => false,
                ),

                "isClone" => array(
                    "type" => "boolean",
                    "location" => "query",
                    "description" => "Whether the order is a clone or not.",
                    "required" => false,
                ),
            ),
        ),

        /**
         *    saveOrderStatus() method
         *
         *    reference: https://www.brightpearl.com/developer/latest/order/order-status-update/put.html
         */
        "saveOrderStatus" => array(
            "httpMethod" => "PUT",
            "uri" => "/{apiVersion}/{account_code}/order-service/order/{id}/status",
            "summary" => "Retrieve order(s) (https://www.brightpearl.com/developer/latest/order/order-status-update/put.html)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Order id",
                    "required" => true,
                ),
                "orderStatusId" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Status id",
                    "required" => true,
                ),
                "orderNote" => array(
                    "type" => "array",
                    "location" => "json",
                    "text" => array(
                        "type" => "string",
                        "location" => "json",
                    ),
                    "isPublic" => array(
                        "type" => "boolean",
                        "location" => "json",
                    ),
                    "fileId" => array(
                        "type" => "int",
                        "location" => "json",
                    )
                ),
            ),
        ),

        /**
         *    saveOrderNote() method
         *
         *    reference: http://api-docs.brightpearl.com/order/order-note/post.html
         */
        "saveOrderNote" => array(
            "httpMethod" => "POST",
            "uri" => "/{apiVersion}/{account_code}/order-service/order/{id}/note",
            "summary" => "Save order note(s) (http://api-docs.brightpearl.com/order/order-note/post.html)",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "Order id",
                    "required" => true,
                ),
                "text" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "text",
                    "required" => true,
                ),
                "fileId" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "file id",
                    "required" => false,
                ),
                "isPublic" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "is public",
                    "required" => false,
                ),
                "addedOn" => array(
                    "type" => "string",
                    "location" => "json",
                    "description" => "Added on",
                    "required" => false,
                ),
            ),
        ),

        /**
         *    getOrderCustomFields() method
         *
         *    reference: http://api-docs.brightpearl.com/order/order-customfields/get.html
         */
        "getOrderCustomFields" => array(
            "httpMethod" => "GET",
            "uri" => "/{apiVersion}/{account_code}/order-service/order/{id}/custom-field",
            "summary" => "Retrieve order custom fields",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(

                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "order id",
                    "required" => true,
                ),

            ),
        ),

        /**
         *    saveOrderCustomFields() method
         *
         *    reference: http://api-docs.brightpearl.com/order/order-customfields/patch.html
         */
        "saveOrderCustomFields" => array(
            "httpMethod" => "PATCH",
            "uri" => "/{apiVersion}/{account_code}/order-service/order/{id}/custom-field",
            "summary" => "Save order custom fields",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
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
        "ResponseSearchModel"
    ),
);
