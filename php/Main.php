<?php
/**
 * Copyright 2019 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once 'Config.php'; // define constants

require_once 'Services.php';

define('SAVE_LINK', "https://www.android.com/payapp/savetoandroidpay/"); // Save link that uses JWT. See https://developers.google.com/pay/passes/guides/get-started/implementing-the-api/save-to-google-pay#add-link-to-email



function demoFatJwt($verticalType, $classId, $objectId){
   printf(
          "\n#############################\n" .
          "#\n" .
          "#  Generates a signed \"fat\" JWT.\n" .
          "#  No REST calls made.\n" .
          "#\n" .
          "#  Use fat JWT in JS web button.\n" .
          "#  Fat JWT is too long to be used in Android intents.\n" .
          "#  Possibly might break in redirects.\n" .
          "#\n" .
          "#############################\n"
      );

    $services = new Services();
    $fatJwt = $services->makeFatJwt($verticalType, $classId, $objectId);

    if ($fatJwt != NULL){
        printf("\nThis is an \"fat\" jwt:\n%s\n" , $fatJwt);
        printf("\nyou can decode it with a tool to see the unsigned JWT representation:\n%s\n" , "https://developers.google.com/pay/passes/support/testing#test-and-debug-a-jwt");
        printf("\nTry this save link in your browser:\n%s%s\n", SAVE_LINK, $fatJwt);
        printf("\nHowever, because a \"fat\" jwt is long, they are not suited for hyperlinks (get truncated). Recommend only using \"fat\" JWt with web-JS button only. Check:\n%s" ,"https://developers.google.com/pay/passes/reference/s2w-reference\n\n");
    }
    return;
}

function demoObjectJwt($verticalType, $classId, $objectId){
    printf(
        "\n#############################\n" .
        "#\n" .
        "#  Generates a signed \"object\" JWT.\n" .
        "#  1 REST call is made to pre-insert class.\n" .
        "#\n" .
        "#  This JWT can be used in JS web button.\n" .
        "#  If this JWT only contains 1 object, usually isn't too long; can be used in Android intents/redirects.\n" .
        "#\n" .
        "#############################\n"
    );

    $services = new Services();
    $objectJwt = $services->makeObjectJwt($verticalType, $classId, $objectId);

    if ($objectJwt != null){
        printf("\nThis is an \"object\" jwt:\n%s\n" , $objectJwt);
        printf("\nyou can decode it with a tool to see the unsigned JWT representation:\n%s\n" , "https://developers.google.com/pay/passes/support/testing#test-and-debug-a-jwt");
        printf("\nTry this save link in your browser:\n%s%s\n\n\n", SAVE_LINK, $objectJwt);
    }
    return;
}

function demoSkinnyJwt($verticalType, $classId, $objectId){
    printf(
        "\n#############################\n" .
        "#\n" .
        "#  Generates a signed \"skinny\" JWT.\n" .
        "#  2 REST calls are made:\n" .
        "#  x1 pre-insert one classes\n" .
        "#  x1 pre-insert one object which uses previously inserted class\n" .
        "#\n" .
        "#  This JWT can be used in JS web button.\n" .
        "#  This is the shortest type of JWT; recommended for Android intents/redirects.\n" .
        "#\n" .
        "#############################\n"
    );

    $services = new Services();
    $skinnyJwt = $services->makeSkinnyJwt($verticalType, $classId, $objectId);

    if ($skinnyJwt  != null){
        printf("\nThis is an \"skinny\" jwt:\n%s\n" , $skinnyJwt );
        printf("\nyou can decode it with a tool to see the unsigned JWT representation:\n%s\n" , "https://developers.google.com/pay/passes/support/testing#test-and-debug-a-jwt");
        printf("\nTry this save link in your browser:\n%s%s\n", SAVE_LINK, $skinnyJwt );
        printf("\nthis is the shortest type of JWT; recommended for Android intents/redirects\n\n\n");
    }
    return;
}

/*******************************
*
* Demonstrates using your services which make JWTs
*
* The JWTs are used to generate save links or JS Web buttons to save Pass(es)
*
* 1) Get credentials and check prerequisistes in: https://developers.google.com/pay/passes/samples/quickstart-java
* 2) Modify Config.java so the credentials are correct
* 3) Try running it:  ./gradlew run . Check terminal output for server response, JWT, and save links.
*
*******************************/

// your classUid should be a hash based off of pass metadata. here we hardcode
$classUid = "my_class_id_01"; // CHANGEME
// check Reference API for format of "id" (https://developers.google.com/pay/passes/reference/v1/offerclass/insert).
// must be alphanumeric characters, ".", "_", or "-".
$classId = sprintf("%s.%s" , ISSUER_ID, $classUid);

// your objectUid should be a hash based off of pass metadata. Here we hardcode
$objectUid = "my_object_Id_01"; // CHANGEME
// check Reference API for format of "id" (https://developers.google.com/pay/passes/reference/v1/offerobject/insert).
// Must be alphanumeric characters, ".", "_", or "-".
$objectId = sprintf("%s.%s", ISSUER_ID, $objectUid);

// demonstrate the different "services" that make links/values for frontend to render a functional "save to phone" button
$verticalType = VerticalType::OFFER;
demoFatJwt($verticalType, $classId, $objectId);
demoObjectJwt($verticalType, $classId, $objectId);
demoSkinnyJwt($verticalType, $classId, $objectId);


?>
