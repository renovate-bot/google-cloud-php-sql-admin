<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START sqladmin_v1_generated_SqlInstancesService_AddServerCa_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Sql\V1\Client\SqlInstancesServiceClient;
use Google\Cloud\Sql\V1\Operation;
use Google\Cloud\Sql\V1\SqlInstancesAddServerCaRequest;

/**
 * Adds a new trusted Certificate Authority (CA) version for the specified
 * instance. Required to prepare for a certificate rotation. If a CA version
 * was previously added but never used in a certificate rotation, this
 * operation replaces that version. There cannot be more than one CA version
 * waiting to be rotated in. For instances that have enabled Certificate
 * Authority Service (CAS) based server CA, please use AddServerCertificate to
 * add a new server certificate.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function add_server_ca_sample(): void
{
    // Create a client.
    $sqlInstancesServiceClient = new SqlInstancesServiceClient();

    // Prepare the request message.
    $request = new SqlInstancesAddServerCaRequest();

    // Call the API and handle any network failures.
    try {
        /** @var Operation $response */
        $response = $sqlInstancesServiceClient->addServerCa($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END sqladmin_v1_generated_SqlInstancesService_AddServerCa_sync]
