<?php
return array(
    'MyCompany\\V1\\Rest\\Customers\\Controller' => array(
        'description' => 'service  based on REST for get customer data from DB',
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/customers"
       },
       "first": {
           "href": "/customers?page={page}"
       },
       "prev": {
           "href": "/customers?page={page}"
       },
       "next": {
           "href": "/customers?page={page}"
       },
       "last": {
           "href": "/customers?page={page}"
       }
   }
   "_embedded": {
       "customers": [
           {
               "_links": {
                   "self": {
                       "href": "/customers[/:customers_id]"
                   }
               }
              "id": "",
              "name": "",
              "location": "",
              "activity": "",
              "phone": ""
           }
       ]
   }
}',
                'description' => '',
            ),
            'POST' => array(
                'request' => '{
   "id": "",
   "name": "",
   "location": "",
   "activity": "",
   "phone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customers[/:customers_id]"
       }
   }
   "id": "",
   "name": "",
   "location": "",
   "activity": "",
   "phone": ""
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/customers[/:customers_id]"
       }
   }
   "id": "",
   "name": "",
   "location": "",
   "activity": "",
   "phone": ""
}',
            ),
            'PATCH' => array(
                'request' => '{
   "id": "",
   "name": "",
   "location": "",
   "activity": "",
   "phone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customers[/:customers_id]"
       }
   }
   "id": "",
   "name": "",
   "location": "",
   "activity": "",
   "phone": ""
}',
            ),
            'PUT' => array(
                'request' => '{
   "id": "",
   "name": "",
   "location": "",
   "activity": "",
   "phone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customers[/:customers_id]"
       }
   }
   "id": "",
   "name": "",
   "location": "",
   "activity": "",
   "phone": ""
}',
            ),
            'DELETE' => array(
                'request' => '{
   "id": "",
   "name": "",
   "location": "",
   "activity": "",
   "phone": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customers[/:customers_id]"
       }
   }
   "id": "",
   "name": "",
   "location": "",
   "activity": "",
   "phone": ""
}',
            ),
        ),
    ),
);
