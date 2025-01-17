<?php
/*
 * Copyright 2019 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Walletobjects (v1).
 *
 * <p>
 * The Wallet Objects API allows you to connect your business to millions of
 * Google users and showcase your loyalty programs, offers, tickets, and more.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Walletobjects extends Google_Service
{
  /** You should never encounter this message. Please do not approve the access request.. */
  const WALLET_OBJECT_ISSUER =
      "https://www.googleapis.com/auth/wallet_object.issuer";
  /** You should never encounter this message. Please do not approve the access request.. */
  const WALLET_OBJECT_SANDBOX_ISSUER =
      "https://www.googleapis.com/auth/wallet_object_sandbox.issuer";

  public $eventticketclass;
  public $eventticketobject;
  public $flightclass;
  public $flightobject;
  public $giftcardclass;
  public $giftcardobject;
  public $issuer;
  public $jwt;
  public $loyaltyclass;
  public $loyaltyobject;
  public $offerclass;
  public $offerobject;
  public $permissions;
  public $smarttap;
  public $transitclass;
  public $transitobject;


  /**
   * Constructs the internal representation of the Walletobjects service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'walletobjects/v1/';
    $this->version = 'v1';
    $this->serviceName = 'walletobjects';

    $this->eventticketclass = new Google_Service_Walletobjects_Eventticketclass_Resource(
        $this,
        $this->serviceName,
        'eventticketclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'eventTicketClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'eventTicketClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'eventTicketClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'eventTicketClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'eventTicketClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'eventTicketClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->eventticketobject = new Google_Service_Walletobjects_Eventticketobject_Resource(
        $this,
        $this->serviceName,
        'eventticketobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'eventTicketObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'eventTicketObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'eventTicketObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'eventTicketObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'eventTicketObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'eventTicketObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->flightclass = new Google_Service_Walletobjects_Flightclass_Resource(
        $this,
        $this->serviceName,
        'flightclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'flightClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'flightClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'flightClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'flightClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'flightClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'flightClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->flightobject = new Google_Service_Walletobjects_Flightobject_Resource(
        $this,
        $this->serviceName,
        'flightobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'flightObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'flightObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'flightObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'flightObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'flightObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'flightObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->giftcardclass = new Google_Service_Walletobjects_Giftcardclass_Resource(
        $this,
        $this->serviceName,
        'giftcardclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'giftCardClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'giftCardClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'approvedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'giftCardClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'giftCardClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'giftCardClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'giftCardClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->giftcardobject = new Google_Service_Walletobjects_Giftcardobject_Resource(
        $this,
        $this->serviceName,
        'giftcardobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'giftCardObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'giftCardObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'giftCardObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'giftCardObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'giftCardObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'giftCardObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->issuer = new Google_Service_Walletobjects_Issuer_Resource(
        $this,
        $this->serviceName,
        'issuer',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'issuer/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'issuer',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'issuer',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'issuer/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'issuer/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->jwt = new Google_Service_Walletobjects_Jwt_Resource(
        $this,
        $this->serviceName,
        'jwt',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'jwt',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->loyaltyclass = new Google_Service_Walletobjects_Loyaltyclass_Resource(
        $this,
        $this->serviceName,
        'loyaltyclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'loyaltyClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'loyaltyClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'approvedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'loyaltyClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'loyaltyClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'loyaltyClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'loyaltyClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->loyaltyobject = new Google_Service_Walletobjects_Loyaltyobject_Resource(
        $this,
        $this->serviceName,
        'loyaltyobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'loyaltyObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'loyaltyObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'loyaltyObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'loyaltyObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'modifylinkedofferobjects' => array(
              'path' => 'loyaltyObject/{resourceId}/modifyLinkedOfferObjects',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'loyaltyObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'loyaltyObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->offerclass = new Google_Service_Walletobjects_Offerclass_Resource(
        $this,
        $this->serviceName,
        'offerclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'offerClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'offerClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'approvedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'offerClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'offerClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'offerClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'offerClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->offerobject = new Google_Service_Walletobjects_Offerobject_Resource(
        $this,
        $this->serviceName,
        'offerobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'offerObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'offerObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'offerObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'offerObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'offerObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'offerObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->permissions = new Google_Service_Walletobjects_Permissions_Resource(
        $this,
        $this->serviceName,
        'permissions',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'permissions/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'permissions/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'permissions/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->smarttap = new Google_Service_Walletobjects_Smarttap_Resource(
        $this,
        $this->serviceName,
        'smarttap',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'smartTap',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->transitclass = new Google_Service_Walletobjects_Transitclass_Resource(
        $this,
        $this->serviceName,
        'transitclass',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'transitClass/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'transitClass/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'approvedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'transitClass',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'transitClass',
              'httpMethod' => 'GET',
              'parameters' => array(
                'issuerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'transitClass/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'transitClass/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->transitobject = new Google_Service_Walletobjects_Transitobject_Resource(
        $this,
        $this->serviceName,
        'transitobject',
        array(
          'methods' => array(
            'addmessage' => array(
              'path' => 'transitObject/{resourceId}/addMessage',
              'httpMethod' => 'POST',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'transitObject/{resourceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'transitObject',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'transitObject',
              'httpMethod' => 'GET',
              'parameters' => array(
                'classId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'transitObject/{resourceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'transitObject/{resourceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'resourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "eventticketclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $eventticketclass = $walletobjectsService->eventticketclass;
 *  </code>
 */
class Google_Service_Walletobjects_Eventticketclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the event ticket class referenced by the given class ID.
   * (eventticketclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_EventTicketClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_EventTicketClassAddMessageResponse");
  }

  /**
   * Returns the event ticket class with the given class ID.
   * (eventticketclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_EventTicketClass");
  }

  /**
   * Inserts an event ticket class with the given ID and properties.
   * (eventticketclass.insert)
   *
   * @param Google_EventTicketClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClass
   */
  public function insert(Google_Service_Walletobjects_EventTicketClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_EventTicketClass");
  }

  /**
   * Returns a list of all event ticket classes for a given issuer ID.
   * (eventticketclass.listEventticketclass)
   *
   * @param string $issuerId The ID of the issuer authorized to list classes.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with maxResults
   * set to 20, list will return the first 20 classes and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 classes.
   * @return Google_Service_Walletobjects_EventTicketClassListResponse
   */
  public function listEventticketclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_EventTicketClassListResponse");
  }

  /**
   * Updates the event ticket class referenced by the given class ID. This method
   * supports patch semantics. (eventticketclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_EventTicketClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_EventTicketClass");
  }

  /**
   * Updates the event ticket class referenced by the given class ID.
   * (eventticketclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketClass
   */
  public function update($resourceId, Google_Service_Walletobjects_EventTicketClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_EventTicketClass");
  }
}

/**
 * The "eventticketobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $eventticketobject = $walletobjectsService->eventticketobject;
 *  </code>
 */
class Google_Service_Walletobjects_Eventticketobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the event ticket object referenced by the given object ID.
   * (eventticketobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_EventTicketObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_EventTicketObjectAddMessageResponse");
  }

  /**
   * Returns the event ticket object with the given object ID.
   * (eventticketobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_EventTicketObject");
  }

  /**
   * Inserts an event ticket object with the given ID and properties.
   * (eventticketobject.insert)
   *
   * @param Google_EventTicketObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObject
   */
  public function insert(Google_Service_Walletobjects_EventTicketObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_EventTicketObject");
  }

  /**
   * Returns a list of all event ticket objects for a given class ID.
   * (eventticketobject.listEventticketobject)
   *
   * @param string $classId The ID of the class whose objects will be listed.
   *
   * This value should follow the format issuer ID.identifier where the former is
   * issued by Google and latter is chosen by you. Your unique identifier should
   * only include alphanumeric characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with maxResults
   * set to 20, list will return the first 20 objects and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 objects.
   * @return Google_Service_Walletobjects_EventTicketObjectListResponse
   */
  public function listEventticketobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_EventTicketObjectListResponse");
  }

  /**
   * Updates the event ticket object referenced by the given object ID. This
   * method supports patch semantics. (eventticketobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_EventTicketObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_EventTicketObject");
  }

  /**
   * Updates the event ticket object referenced by the given object ID.
   * (eventticketobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_EventTicketObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_EventTicketObject
   */
  public function update($resourceId, Google_Service_Walletobjects_EventTicketObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_EventTicketObject");
  }
}

/**
 * The "flightclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $flightclass = $walletobjectsService->flightclass;
 *  </code>
 */
class Google_Service_Walletobjects_Flightclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the flight class referenced by the given class ID.
   * (flightclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_FlightClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_FlightClassAddMessageResponse");
  }

  /**
   * Returns the flight class with the given class ID. (flightclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_FlightClass");
  }

  /**
   * Inserts an flight class with the given ID and properties.
   * (flightclass.insert)
   *
   * @param Google_FlightClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClass
   */
  public function insert(Google_Service_Walletobjects_FlightClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_FlightClass");
  }

  /**
   * Returns a list of all flight classes for a given issuer ID.
   * (flightclass.listFlightclass)
   *
   * @param string $issuerId The ID of the issuer authorized to list classes.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with maxResults
   * set to 20, list will return the first 20 classes and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 classes.
   * @return Google_Service_Walletobjects_FlightClassListResponse
   */
  public function listFlightclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_FlightClassListResponse");
  }

  /**
   * Updates the flight class referenced by the given class ID. This method
   * supports patch semantics. (flightclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_FlightClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_FlightClass");
  }

  /**
   * Updates the flight class referenced by the given class ID.
   * (flightclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightClass
   */
  public function update($resourceId, Google_Service_Walletobjects_FlightClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_FlightClass");
  }
}

/**
 * The "flightobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $flightobject = $walletobjectsService->flightobject;
 *  </code>
 */
class Google_Service_Walletobjects_Flightobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the flight object referenced by the given object ID.
   * (flightobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_FlightObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_FlightObjectAddMessageResponse");
  }

  /**
   * Returns the flight object with the given object ID. (flightobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_FlightObject");
  }

  /**
   * Inserts an flight object with the given ID and properties.
   * (flightobject.insert)
   *
   * @param Google_FlightObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObject
   */
  public function insert(Google_Service_Walletobjects_FlightObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_FlightObject");
  }

  /**
   * Returns a list of all flight objects for a given class ID.
   * (flightobject.listFlightobject)
   *
   * @param string $classId The ID of the class whose objects will be listed.
   *
   * This value should follow the format issuer ID.identifier where the former is
   * issued by Google and latter is chosen by you. Your unique identifier should
   * only include alphanumeric characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with maxResults
   * set to 20, list will return the first 20 objects and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 objects.
   * @return Google_Service_Walletobjects_FlightObjectListResponse
   */
  public function listFlightobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_FlightObjectListResponse");
  }

  /**
   * Updates the flight object referenced by the given object ID. This method
   * supports patch semantics. (flightobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_FlightObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_FlightObject");
  }

  /**
   * Updates the flight object referenced by the given object ID.
   * (flightobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_FlightObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_FlightObject
   */
  public function update($resourceId, Google_Service_Walletobjects_FlightObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_FlightObject");
  }
}

/**
 * The "giftcardclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $giftcardclass = $walletobjectsService->giftcardclass;
 *  </code>
 */
class Google_Service_Walletobjects_Giftcardclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the gift card class referenced by the given class ID.
   * (giftcardclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_GiftCardClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_GiftCardClassAddMessageResponse");
  }

  /**
   * Returns the gift card class with the given class ID. (giftcardclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool approvedOnly Deprecated
   * @opt_param string version Deprecated
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }

  /**
   * Inserts a gift card class with the given ID and properties.
   * (giftcardclass.insert)
   *
   * @param Google_GiftCardClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function insert(Google_Service_Walletobjects_GiftCardClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }

  /**
   * Returns a list of all gift card classes for a given issuer ID.
   * (giftcardclass.listGiftcardclass)
   *
   * @param string $issuerId The ID of the issuer authorized to list classes.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with maxResults
   * set to 20, list will return the first 20 classes and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 classes.
   * @return Google_Service_Walletobjects_GiftCardClassListResponse
   */
  public function listGiftcardclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_GiftCardClassListResponse");
  }

  /**
   * Updates the gift card class referenced by the given class ID. This method
   * supports patch semantics. (giftcardclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_GiftCardClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }

  /**
   * Updates the gift card class referenced by the given class ID.
   * (giftcardclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardClass
   */
  public function update($resourceId, Google_Service_Walletobjects_GiftCardClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_GiftCardClass");
  }
}

/**
 * The "giftcardobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $giftcardobject = $walletobjectsService->giftcardobject;
 *  </code>
 */
class Google_Service_Walletobjects_Giftcardobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the gift card object referenced by the given object ID.
   * (giftcardobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_GiftCardObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_GiftCardObjectAddMessageResponse");
  }

  /**
   * Returns the gift card object with the given object ID. (giftcardobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }

  /**
   * Inserts a gift card object with the given ID and properties.
   * (giftcardobject.insert)
   *
   * @param Google_GiftCardObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function insert(Google_Service_Walletobjects_GiftCardObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }

  /**
   * Returns a list of all gift card objects for a given class ID.
   * (giftcardobject.listGiftcardobject)
   *
   * @param string $classId The ID of the class whose objects will be listed.
   *
   * This value should follow the format issuer ID.identifier where the former is
   * issued by Google and latter is chosen by you. Your unique identifier should
   * only include alphanumeric characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with maxResults
   * set to 20, list will return the first 20 objects and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 objects.
   * @return Google_Service_Walletobjects_GiftCardObjectListResponse
   */
  public function listGiftcardobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_GiftCardObjectListResponse");
  }

  /**
   * Updates the gift card object referenced by the given object ID. This method
   * supports patch semantics. (giftcardobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_GiftCardObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }

  /**
   * Updates the gift card object referenced by the given object ID.
   * (giftcardobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_GiftCardObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_GiftCardObject
   */
  public function update($resourceId, Google_Service_Walletobjects_GiftCardObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_GiftCardObject");
  }
}

/**
 * The "issuer" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $issuer = $walletobjectsService->issuer;
 *  </code>
 */
class Google_Service_Walletobjects_Issuer_Resource extends Google_Service_Resource
{

  /**
   * Returns the issuer referenced by the given issuer ID. (issuer.get)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Issuer
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_Issuer");
  }

  /**
   * Inserts an issuer with the given properties. (issuer.insert)
   *
   * @param Google_Issuer $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Issuer
   */
  public function insert(Google_Service_Walletobjects_Issuer $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_Issuer");
  }

  /**
   * Lists all issuers shared to the caller of this API. (issuer.listIssuer)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_IssuerListResponse
   */
  public function listIssuer($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_IssuerListResponse");
  }

  /**
   * Updates the issuer referenced by the given issuer ID. This method supports
   * patch semantics. (issuer.patch)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param Google_Issuer $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Issuer
   */
  public function patch($resourceId, Google_Service_Walletobjects_Issuer $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_Issuer");
  }

  /**
   * Updates the issuer referenced by the given issuer ID. (issuer.update)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param Google_Issuer $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Issuer
   */
  public function update($resourceId, Google_Service_Walletobjects_Issuer $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_Issuer");
  }
}

/**
 * The "jwt" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $jwt = $walletobjectsService->jwt;
 *  </code>
 */
class Google_Service_Walletobjects_Jwt_Resource extends Google_Service_Resource
{

  /**
   * Inserts the given JSON web token for the issuer referenced inside.
   * (jwt.insert)
   *
   * @param Google_JwtResource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_JwtResource
   */
  public function insert(Google_Service_Walletobjects_JwtResource $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_JwtResource");
  }
}

/**
 * The "loyaltyclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $loyaltyclass = $walletobjectsService->loyaltyclass;
 *  </code>
 */
class Google_Service_Walletobjects_Loyaltyclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the loyalty class referenced by the given class ID.
   * (loyaltyclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_LoyaltyClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_LoyaltyClassAddMessageResponse");
  }

  /**
   * Returns the loyalty class with the given class ID. (loyaltyclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool approvedOnly Deprecated
   * @opt_param string version Deprecated
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }

  /**
   * Inserts a loyalty class with the given ID and properties.
   * (loyaltyclass.insert)
   *
   * @param Google_LoyaltyClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function insert(Google_Service_Walletobjects_LoyaltyClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }

  /**
   * Returns a list of all loyalty classes for a given issuer ID.
   * (loyaltyclass.listLoyaltyclass)
   *
   * @param string $issuerId The ID of the issuer authorized to list classes.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with maxResults
   * set to 20, list will return the first 20 classes and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 classes.
   * @return Google_Service_Walletobjects_LoyaltyClassListResponse
   */
  public function listLoyaltyclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_LoyaltyClassListResponse");
  }

  /**
   * Updates the loyalty class referenced by the given class ID. This method
   * supports patch semantics. (loyaltyclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_LoyaltyClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }

  /**
   * Updates the loyalty class referenced by the given class ID.
   * (loyaltyclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyClass
   */
  public function update($resourceId, Google_Service_Walletobjects_LoyaltyClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_LoyaltyClass");
  }
}

/**
 * The "loyaltyobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $loyaltyobject = $walletobjectsService->loyaltyobject;
 *  </code>
 */
class Google_Service_Walletobjects_Loyaltyobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the loyalty object referenced by the given object ID.
   * (loyaltyobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_LoyaltyObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse");
  }

  /**
   * Returns the loyalty object with the given object ID. (loyaltyobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }

  /**
   * Inserts a loyalty object with the given ID and properties.
   * (loyaltyobject.insert)
   *
   * @param Google_LoyaltyObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function insert(Google_Service_Walletobjects_LoyaltyObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }

  /**
   * Returns a list of all loyalty objects for a given class ID.
   * (loyaltyobject.listLoyaltyobject)
   *
   * @param string $classId The ID of the class whose objects will be listed.
   *
   * This value should follow the format issuer ID.identifier where the former is
   * issued by Google and latter is chosen by you. Your unique identifier should
   * only include alphanumeric characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with maxResults
   * set to 20, list will return the first 20 objects and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 objects.
   * @return Google_Service_Walletobjects_LoyaltyObjectListResponse
   */
  public function listLoyaltyobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_LoyaltyObjectListResponse");
  }

  /**
   * Add (and remove) linked offer objects, specified by ID, to the loyalty object
   * referenced by the resource ID. (loyaltyobject.modifylinkedofferobjects)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyObjectModifyLinkedOfferObjectsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObjectModifyLinkedOfferObjectsResponse
   */
  public function modifylinkedofferobjects($resourceId, Google_Service_Walletobjects_LoyaltyObjectModifyLinkedOfferObjectsRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('modifylinkedofferobjects', array($params), "Google_Service_Walletobjects_LoyaltyObjectModifyLinkedOfferObjectsResponse");
  }

  /**
   * Updates the loyalty object referenced by the given object ID. This method
   * supports patch semantics. (loyaltyobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_LoyaltyObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }

  /**
   * Updates the loyalty object referenced by the given object ID.
   * (loyaltyobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_LoyaltyObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_LoyaltyObject
   */
  public function update($resourceId, Google_Service_Walletobjects_LoyaltyObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_LoyaltyObject");
  }
}

/**
 * The "offerclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $offerclass = $walletobjectsService->offerclass;
 *  </code>
 */
class Google_Service_Walletobjects_Offerclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the offer class referenced by the given class ID.
   * (offerclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_OfferClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_OfferClassAddMessageResponse");
  }

  /**
   * Returns the offer class with the given class ID. (offerclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool approvedOnly Deprecated
   * @opt_param string version Deprecated
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_OfferClass");
  }

  /**
   * Inserts an offer class with the given ID and properties. (offerclass.insert)
   *
   * @param Google_OfferClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function insert(Google_Service_Walletobjects_OfferClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_OfferClass");
  }

  /**
   * Returns a list of all offer classes for a given issuer ID.
   * (offerclass.listOfferclass)
   *
   * @param string $issuerId The ID of the issuer authorized to list classes.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with maxResults
   * set to 20, list will return the first 20 classes and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 classes.
   * @return Google_Service_Walletobjects_OfferClassListResponse
   */
  public function listOfferclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_OfferClassListResponse");
  }

  /**
   * Updates the offer class referenced by the given class ID. This method
   * supports patch semantics. (offerclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_OfferClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_OfferClass");
  }

  /**
   * Updates the offer class referenced by the given class ID. (offerclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferClass
   */
  public function update($resourceId, Google_Service_Walletobjects_OfferClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_OfferClass");
  }
}

/**
 * The "offerobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $offerobject = $walletobjectsService->offerobject;
 *  </code>
 */
class Google_Service_Walletobjects_Offerobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the offer object referenced by the given object ID.
   * (offerobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_OfferObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_OfferObjectAddMessageResponse");
  }

  /**
   * Returns the offer object with the given object ID. (offerobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_OfferObject");
  }

  /**
   * Inserts an offer object with the given ID and properties.
   * (offerobject.insert)
   *
   * @param Google_OfferObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function insert(Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_OfferObject");
  }

  /**
   * Returns a list of all offer objects for a given class ID.
   * (offerobject.listOfferobject)
   *
   * @param string $classId The ID of the class whose objects will be listed.
   *
   * This value should follow the format issuer ID.identifier where the former is
   * issued by Google and latter is chosen by you. Your unique identifier should
   * only include alphanumeric characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with maxResults
   * set to 20, list will return the first 20 objects and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 objects.
   * @return Google_Service_Walletobjects_OfferObjectListResponse
   */
  public function listOfferobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_OfferObjectListResponse");
  }

  /**
   * Updates the offer object referenced by the given object ID. This method
   * supports patch semantics. (offerobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_OfferObject");
  }

  /**
   * Updates the offer object referenced by the given object ID.
   * (offerobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_OfferObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_OfferObject
   */
  public function update($resourceId, Google_Service_Walletobjects_OfferObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_OfferObject");
  }
}

/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $permissions = $walletobjectsService->permissions;
 *  </code>
 */
class Google_Service_Walletobjects_Permissions_Resource extends Google_Service_Resource
{

  /**
   * Returns the permissions for the issuer referenced by the given issuer ID.
   * (permissions.get)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Permissions
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_Permissions");
  }

  /**
   * Updates the permissions for the issuer referenced by the given issuer ID.
   * This method supports patch semantics. (permissions.patch)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param Google_Permissions $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Permissions
   */
  public function patch($resourceId, Google_Service_Walletobjects_Permissions $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_Permissions");
  }

  /**
   * Updates the permissions for the issuer referenced by the given issuer ID.
   * (permissions.update)
   *
   * @param string $resourceId The unique identifier for an issuer. This ID must
   * be unique across all issuers.
   * @param Google_Permissions $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_Permissions
   */
  public function update($resourceId, Google_Service_Walletobjects_Permissions $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_Permissions");
  }
}

/**
 * The "smarttap" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $smarttap = $walletobjectsService->smarttap;
 *  </code>
 */
class Google_Service_Walletobjects_Smarttap_Resource extends Google_Service_Resource
{

  /**
   * Inserts the Smart Tap. (smarttap.insert)
   *
   * @param Google_SmartTap $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_SmartTap
   */
  public function insert(Google_Service_Walletobjects_SmartTap $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_SmartTap");
  }
}

/**
 * The "transitclass" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $transitclass = $walletobjectsService->transitclass;
 *  </code>
 */
class Google_Service_Walletobjects_Transitclass_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the transit class referenced by the given class ID.
   * (transitclass.addmessage)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitClassAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitClassAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_TransitClassAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_TransitClassAddMessageResponse");
  }

  /**
   * Returns the transit class with the given class ID. (transitclass.get)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool approvedOnly Deprecated
   * @opt_param string version Deprecated
   * @return Google_Service_Walletobjects_TransitClass
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_TransitClass");
  }

  /**
   * Inserts an transit class with the given ID and properties.
   * (transitclass.insert)
   *
   * @param Google_TransitClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitClass
   */
  public function insert(Google_Service_Walletobjects_TransitClass $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_TransitClass");
  }

  /**
   * Returns a list of all transit classes for a given issuer ID.
   * (transitclass.listTransitclass)
   *
   * @param string $issuerId The ID of the issuer authorized to list classes.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults classes are available in a list. For
   * example, if you have a list of 200 classes and you call list with maxResults
   * set to 20, list will return the first 20 classes and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 classes.
   * @return Google_Service_Walletobjects_TransitClassListResponse
   */
  public function listTransitclass($issuerId, $optParams = array())
  {
    $params = array('issuerId' => $issuerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_TransitClassListResponse");
  }

  /**
   * Updates the transit class referenced by the given class ID. This method
   * supports patch semantics. (transitclass.patch)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitClass
   */
  public function patch($resourceId, Google_Service_Walletobjects_TransitClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_TransitClass");
  }

  /**
   * Updates the transit class referenced by the given class ID.
   * (transitclass.update)
   *
   * @param string $resourceId The unique identifier for a class. This ID must be
   * unique across all classes from an issuer. This value should follow the format
   * issuer ID.identifier where the former is issued by Google and latter is
   * chosen by you. Your unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitClass $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitClass
   */
  public function update($resourceId, Google_Service_Walletobjects_TransitClass $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_TransitClass");
  }
}

/**
 * The "transitobject" collection of methods.
 * Typical usage is:
 *  <code>
 *   $walletobjectsService = new Google_Service_Walletobjects(...);
 *   $transitobject = $walletobjectsService->transitobject;
 *  </code>
 */
class Google_Service_Walletobjects_Transitobject_Resource extends Google_Service_Resource
{

  /**
   * Adds a message to the transit object referenced by the given object ID.
   * (transitobject.addmessage)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitObjectAddMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObjectAddMessageResponse
   */
  public function addmessage($resourceId, Google_Service_Walletobjects_TransitObjectAddMessageRequest $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addmessage', array($params), "Google_Service_Walletobjects_TransitObjectAddMessageResponse");
  }

  /**
   * Returns the transit object with the given object ID. (transitobject.get)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObject
   */
  public function get($resourceId, $optParams = array())
  {
    $params = array('resourceId' => $resourceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Walletobjects_TransitObject");
  }

  /**
   * Inserts an transit object with the given ID and properties.
   * (transitobject.insert)
   *
   * @param Google_TransitObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObject
   */
  public function insert(Google_Service_Walletobjects_TransitObject $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Walletobjects_TransitObject");
  }

  /**
   * Returns a list of all transit objects for a given class ID.
   * (transitobject.listTransitobject)
   *
   * @param string $classId The ID of the class whose objects will be listed.
   *
   * This value should follow the format issuer ID.identifier where the former is
   * issued by Google and latter is chosen by you. Your unique identifier should
   * only include alphanumeric characters, '.', '_', or '-'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Identifies the max number of results returned by a
   * list. All results are returned if maxResults isn't defined.
   * @opt_param string token Used to get the next set of results if maxResults is
   * specified, but more than maxResults objects are available in a list. For
   * example, if you have a list of 200 objects and you call list with maxResults
   * set to 20, list will return the first 20 objects and a token. Call list again
   * with maxResults set to 20 and the token to get the next 20 objects.
   * @return Google_Service_Walletobjects_TransitObjectListResponse
   */
  public function listTransitobject($classId, $optParams = array())
  {
    $params = array('classId' => $classId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Walletobjects_TransitObjectListResponse");
  }

  /**
   * Updates the transit object referenced by the given object ID. This method
   * supports patch semantics. (transitobject.patch)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObject
   */
  public function patch($resourceId, Google_Service_Walletobjects_TransitObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Walletobjects_TransitObject");
  }

  /**
   * Updates the transit object referenced by the given object ID.
   * (transitobject.update)
   *
   * @param string $resourceId The unique identifier for an object. This ID must
   * be unique across all objects from an issuer. This value should follow the
   * format issuer ID.identifier where the former is issued by Google and latter
   * is chosen by you. The unique identifier should only include alphanumeric
   * characters, '.', '_', or '-'.
   * @param Google_TransitObject $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Walletobjects_TransitObject
   */
  public function update($resourceId, Google_Service_Walletobjects_TransitObject $postBody, $optParams = array())
  {
    $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Walletobjects_TransitObject");
  }
}




class Google_Service_Walletobjects_AirportInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $airportIataCode;
  protected $airportNameOverrideType = 'Google_Service_Walletobjects_LocalizedString';
  protected $airportNameOverrideDataType = '';
  public $gate;
  public $kind;
  public $terminal;


  public function setAirportIataCode($airportIataCode)
  {
    $this->airportIataCode = $airportIataCode;
  }
  public function getAirportIataCode()
  {
    return $this->airportIataCode;
  }
  public function setAirportNameOverride(Google_Service_Walletobjects_LocalizedString $airportNameOverride)
  {
    $this->airportNameOverride = $airportNameOverride;
  }
  public function getAirportNameOverride()
  {
    return $this->airportNameOverride;
  }
  public function setGate($gate)
  {
    $this->gate = $gate;
  }
  public function getGate()
  {
    return $this->gate;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTerminal($terminal)
  {
    $this->terminal = $terminal;
  }
  public function getTerminal()
  {
    return $this->terminal;
  }
}

class Google_Service_Walletobjects_AuthenticationKey extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $publicKeyPem;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setPublicKeyPem($publicKeyPem)
  {
    $this->publicKeyPem = $publicKeyPem;
  }
  public function getPublicKeyPem()
  {
    return $this->publicKeyPem;
  }
}

class Google_Service_Walletobjects_Barcode extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $alternateText;
  public $kind;
  public $type;
  public $value;


  public function setAlternateText($alternateText)
  {
    $this->alternateText = $alternateText;
  }
  public function getAlternateText()
  {
    return $this->alternateText;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_BoardingAndSeatingInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $boardingDoor;
  public $boardingGroup;
  public $boardingPosition;
  protected $boardingPrivilegeImageType = 'Google_Service_Walletobjects_Image';
  protected $boardingPrivilegeImageDataType = '';
  public $kind;
  public $seatClass;
  public $seatNumber;
  public $sequenceNumber;


  public function setBoardingDoor($boardingDoor)
  {
    $this->boardingDoor = $boardingDoor;
  }
  public function getBoardingDoor()
  {
    return $this->boardingDoor;
  }
  public function setBoardingGroup($boardingGroup)
  {
    $this->boardingGroup = $boardingGroup;
  }
  public function getBoardingGroup()
  {
    return $this->boardingGroup;
  }
  public function setBoardingPosition($boardingPosition)
  {
    $this->boardingPosition = $boardingPosition;
  }
  public function getBoardingPosition()
  {
    return $this->boardingPosition;
  }
  public function setBoardingPrivilegeImage(Google_Service_Walletobjects_Image $boardingPrivilegeImage)
  {
    $this->boardingPrivilegeImage = $boardingPrivilegeImage;
  }
  public function getBoardingPrivilegeImage()
  {
    return $this->boardingPrivilegeImage;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setSeatClass($seatClass)
  {
    $this->seatClass = $seatClass;
  }
  public function getSeatClass()
  {
    return $this->seatClass;
  }
  public function setSeatNumber($seatNumber)
  {
    $this->seatNumber = $seatNumber;
  }
  public function getSeatNumber()
  {
    return $this->seatNumber;
  }
  public function setSequenceNumber($sequenceNumber)
  {
    $this->sequenceNumber = $sequenceNumber;
  }
  public function getSequenceNumber()
  {
    return $this->sequenceNumber;
  }
}

class Google_Service_Walletobjects_BoardingAndSeatingPolicy extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $boardingPolicy;
  public $kind;
  public $seatClassPolicy;


  public function setBoardingPolicy($boardingPolicy)
  {
    $this->boardingPolicy = $boardingPolicy;
  }
  public function getBoardingPolicy()
  {
    return $this->boardingPolicy;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setSeatClassPolicy($seatClassPolicy)
  {
    $this->seatClassPolicy = $seatClassPolicy;
  }
  public function getSeatClassPolicy()
  {
    return $this->seatClassPolicy;
  }
}

class Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $url;


  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}

class Google_Service_Walletobjects_CommonWalletObjectClassReview extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $comments;


  public function setComments($comments)
  {
    $this->comments = $comments;
  }
  public function getComments()
  {
    return $this->comments;
  }
}

class Google_Service_Walletobjects_DateTime extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $date;


  public function setDate($date)
  {
    $this->date = $date;
  }
  public function getDate()
  {
    return $this->date;
  }
}

class Google_Service_Walletobjects_DiscoverableProgram extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  protected $merchantSigninInfoType = 'Google_Service_Walletobjects_DiscoverableProgramMerchantSigninInfo';
  protected $merchantSigninInfoDataType = '';
  protected $merchantSignupInfoType = 'Google_Service_Walletobjects_DiscoverableProgramMerchantSignupInfo';
  protected $merchantSignupInfoDataType = '';
  public $state;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMerchantSigninInfo(Google_Service_Walletobjects_DiscoverableProgramMerchantSigninInfo $merchantSigninInfo)
  {
    $this->merchantSigninInfo = $merchantSigninInfo;
  }
  public function getMerchantSigninInfo()
  {
    return $this->merchantSigninInfo;
  }
  public function setMerchantSignupInfo(Google_Service_Walletobjects_DiscoverableProgramMerchantSignupInfo $merchantSignupInfo)
  {
    $this->merchantSignupInfo = $merchantSignupInfo;
  }
  public function getMerchantSignupInfo()
  {
    return $this->merchantSignupInfo;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}

class Google_Service_Walletobjects_DiscoverableProgramMerchantSigninInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $signinWebsiteType = 'Google_Service_Walletobjects_Uri';
  protected $signinWebsiteDataType = '';


  public function setSigninWebsite(Google_Service_Walletobjects_Uri $signinWebsite)
  {
    $this->signinWebsite = $signinWebsite;
  }
  public function getSigninWebsite()
  {
    return $this->signinWebsite;
  }
}

class Google_Service_Walletobjects_DiscoverableProgramMerchantSignupInfo extends Google_Collection
{
  protected $collection_key = 'signupSharedDatas';
  protected $internal_gapi_mappings = array(
  );
  public $signupSharedDatas;
  protected $signupWebsiteType = 'Google_Service_Walletobjects_Uri';
  protected $signupWebsiteDataType = '';


  public function setSignupSharedDatas($signupSharedDatas)
  {
    $this->signupSharedDatas = $signupSharedDatas;
  }
  public function getSignupSharedDatas()
  {
    return $this->signupSharedDatas;
  }
  public function setSignupWebsite(Google_Service_Walletobjects_Uri $signupWebsite)
  {
    $this->signupWebsite = $signupWebsite;
  }
  public function getSignupWebsite()
  {
    return $this->signupWebsite;
  }
}

class Google_Service_Walletobjects_EventDateTime extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $customDoorsOpenLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customDoorsOpenLabelDataType = '';
  public $doorsOpen;
  public $doorsOpenLabel;
  public $end;
  public $kind;
  public $start;


  public function setCustomDoorsOpenLabel(Google_Service_Walletobjects_LocalizedString $customDoorsOpenLabel)
  {
    $this->customDoorsOpenLabel = $customDoorsOpenLabel;
  }
  public function getCustomDoorsOpenLabel()
  {
    return $this->customDoorsOpenLabel;
  }
  public function setDoorsOpen($doorsOpen)
  {
    $this->doorsOpen = $doorsOpen;
  }
  public function getDoorsOpen()
  {
    return $this->doorsOpen;
  }
  public function setDoorsOpenLabel($doorsOpenLabel)
  {
    $this->doorsOpenLabel = $doorsOpenLabel;
  }
  public function getDoorsOpenLabel()
  {
    return $this->doorsOpenLabel;
  }
  public function setEnd($end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStart($start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class Google_Service_Walletobjects_EventReservationInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $confirmationCode;
  public $kind;


  public function setConfirmationCode($confirmationCode)
  {
    $this->confirmationCode = $confirmationCode;
  }
  public function getConfirmationCode()
  {
    return $this->confirmationCode;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_Walletobjects_EventSeat extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $gateType = 'Google_Service_Walletobjects_LocalizedString';
  protected $gateDataType = '';
  public $kind;
  protected $rowType = 'Google_Service_Walletobjects_LocalizedString';
  protected $rowDataType = '';
  protected $seatType = 'Google_Service_Walletobjects_LocalizedString';
  protected $seatDataType = '';
  protected $sectionType = 'Google_Service_Walletobjects_LocalizedString';
  protected $sectionDataType = '';


  public function setGate(Google_Service_Walletobjects_LocalizedString $gate)
  {
    $this->gate = $gate;
  }
  public function getGate()
  {
    return $this->gate;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRow(Google_Service_Walletobjects_LocalizedString $row)
  {
    $this->row = $row;
  }
  public function getRow()
  {
    return $this->row;
  }
  public function setSeat(Google_Service_Walletobjects_LocalizedString $seat)
  {
    $this->seat = $seat;
  }
  public function getSeat()
  {
    return $this->seat;
  }
  public function setSection(Google_Service_Walletobjects_LocalizedString $section)
  {
    $this->section = $section;
  }
  public function getSection()
  {
    return $this->section;
  }
}

class Google_Service_Walletobjects_EventTicketClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowMultipleUsersPerObject;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions';
  protected $callbackOptionsDataType = '';
  public $confirmationCodeLabel;
  public $countryCode;
  protected $customConfirmationCodeLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customConfirmationCodeLabelDataType = '';
  protected $customGateLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customGateLabelDataType = '';
  protected $customRowLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customRowLabelDataType = '';
  protected $customSeatLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customSeatLabelDataType = '';
  protected $customSectionLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customSectionLabelDataType = '';
  protected $dateTimeType = 'Google_Service_Walletobjects_EventDateTime';
  protected $dateTimeDataType = '';
  public $enableSmartTap;
  public $eventId;
  protected $eventNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $eventNameDataType = '';
  protected $finePrintType = 'Google_Service_Walletobjects_LocalizedString';
  protected $finePrintDataType = '';
  public $gateLabel;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $logoType = 'Google_Service_Walletobjects_Image';
  protected $logoDataType = '';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  public $rowLabel;
  public $seatLabel;
  public $sectionLabel;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $venueType = 'Google_Service_Walletobjects_EventVenue';
  protected $venueDataType = '';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setConfirmationCodeLabel($confirmationCodeLabel)
  {
    $this->confirmationCodeLabel = $confirmationCodeLabel;
  }
  public function getConfirmationCodeLabel()
  {
    return $this->confirmationCodeLabel;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setCustomConfirmationCodeLabel(Google_Service_Walletobjects_LocalizedString $customConfirmationCodeLabel)
  {
    $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
  }
  public function getCustomConfirmationCodeLabel()
  {
    return $this->customConfirmationCodeLabel;
  }
  public function setCustomGateLabel(Google_Service_Walletobjects_LocalizedString $customGateLabel)
  {
    $this->customGateLabel = $customGateLabel;
  }
  public function getCustomGateLabel()
  {
    return $this->customGateLabel;
  }
  public function setCustomRowLabel(Google_Service_Walletobjects_LocalizedString $customRowLabel)
  {
    $this->customRowLabel = $customRowLabel;
  }
  public function getCustomRowLabel()
  {
    return $this->customRowLabel;
  }
  public function setCustomSeatLabel(Google_Service_Walletobjects_LocalizedString $customSeatLabel)
  {
    $this->customSeatLabel = $customSeatLabel;
  }
  public function getCustomSeatLabel()
  {
    return $this->customSeatLabel;
  }
  public function setCustomSectionLabel(Google_Service_Walletobjects_LocalizedString $customSectionLabel)
  {
    $this->customSectionLabel = $customSectionLabel;
  }
  public function getCustomSectionLabel()
  {
    return $this->customSectionLabel;
  }
  public function setDateTime(Google_Service_Walletobjects_EventDateTime $dateTime)
  {
    $this->dateTime = $dateTime;
  }
  public function getDateTime()
  {
    return $this->dateTime;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }
  public function getEventId()
  {
    return $this->eventId;
  }
  public function setEventName(Google_Service_Walletobjects_LocalizedString $eventName)
  {
    $this->eventName = $eventName;
  }
  public function getEventName()
  {
    return $this->eventName;
  }
  public function setFinePrint(Google_Service_Walletobjects_LocalizedString $finePrint)
  {
    $this->finePrint = $finePrint;
  }
  public function getFinePrint()
  {
    return $this->finePrint;
  }
  public function setGateLabel($gateLabel)
  {
    $this->gateLabel = $gateLabel;
  }
  public function getGateLabel()
  {
    return $this->gateLabel;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setLogo(Google_Service_Walletobjects_Image $logo)
  {
    $this->logo = $logo;
  }
  public function getLogo()
  {
    return $this->logo;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setRowLabel($rowLabel)
  {
    $this->rowLabel = $rowLabel;
  }
  public function getRowLabel()
  {
    return $this->rowLabel;
  }
  public function setSeatLabel($seatLabel)
  {
    $this->seatLabel = $seatLabel;
  }
  public function getSeatLabel()
  {
    return $this->seatLabel;
  }
  public function setSectionLabel($sectionLabel)
  {
    $this->sectionLabel = $sectionLabel;
  }
  public function getSectionLabel()
  {
    return $this->sectionLabel;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setVenue(Google_Service_Walletobjects_EventVenue $venue)
  {
    $this->venue = $venue;
  }
  public function getVenue()
  {
    return $this->venue;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_EventTicketClassAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_EventTicketClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_EventTicketClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_EventTicketClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_EventTicketClassGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_EventTicketClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_EventTicketClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_EventTicketClassListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_EventTicketClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_EventTicketClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_EventTicketClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_EventTicketClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_EventTicketClassMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_EventTicketObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_EventTicketClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  protected $faceValueType = 'Google_Service_Walletobjects_Money';
  protected $faceValueDataType = '';
  public $hasLinkedDevice;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  protected $reservationInfoType = 'Google_Service_Walletobjects_EventReservationInfo';
  protected $reservationInfoDataType = '';
  protected $seatInfoType = 'Google_Service_Walletobjects_EventSeat';
  protected $seatInfoDataType = '';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $ticketHolderName;
  public $ticketNumber;
  protected $ticketTypeType = 'Google_Service_Walletobjects_LocalizedString';
  protected $ticketTypeDataType = '';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_EventTicketClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setFaceValue(Google_Service_Walletobjects_Money $faceValue)
  {
    $this->faceValue = $faceValue;
  }
  public function getFaceValue()
  {
    return $this->faceValue;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setReservationInfo(Google_Service_Walletobjects_EventReservationInfo $reservationInfo)
  {
    $this->reservationInfo = $reservationInfo;
  }
  public function getReservationInfo()
  {
    return $this->reservationInfo;
  }
  public function setSeatInfo(Google_Service_Walletobjects_EventSeat $seatInfo)
  {
    $this->seatInfo = $seatInfo;
  }
  public function getSeatInfo()
  {
    return $this->seatInfo;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setTicketHolderName($ticketHolderName)
  {
    $this->ticketHolderName = $ticketHolderName;
  }
  public function getTicketHolderName()
  {
    return $this->ticketHolderName;
  }
  public function setTicketNumber($ticketNumber)
  {
    $this->ticketNumber = $ticketNumber;
  }
  public function getTicketNumber()
  {
    return $this->ticketNumber;
  }
  public function setTicketType(Google_Service_Walletobjects_LocalizedString $ticketType)
  {
    $this->ticketType = $ticketType;
  }
  public function getTicketType()
  {
    return $this->ticketType;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_EventTicketObjectAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_EventTicketObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_EventTicketObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_EventTicketObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_EventTicketObjectGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_EventTicketObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_EventTicketObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_EventTicketObjectListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_EventTicketObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_EventTicketObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_EventTicketObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_EventTicketObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_EventTicketObjectMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_EventVenue extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $addressType = 'Google_Service_Walletobjects_LocalizedString';
  protected $addressDataType = '';
  public $kind;
  protected $nameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $nameDataType = '';


  public function setAddress(Google_Service_Walletobjects_LocalizedString $address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName(Google_Service_Walletobjects_LocalizedString $name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Google_Service_Walletobjects_FieldMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $id;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
}

class Google_Service_Walletobjects_FlightCarrier extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $airlineAllianceLogoType = 'Google_Service_Walletobjects_Image';
  protected $airlineAllianceLogoDataType = '';
  protected $airlineLogoType = 'Google_Service_Walletobjects_Image';
  protected $airlineLogoDataType = '';
  protected $airlineNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $airlineNameDataType = '';
  public $carrierIataCode;
  public $carrierIcaoCode;
  public $kind;


  public function setAirlineAllianceLogo(Google_Service_Walletobjects_Image $airlineAllianceLogo)
  {
    $this->airlineAllianceLogo = $airlineAllianceLogo;
  }
  public function getAirlineAllianceLogo()
  {
    return $this->airlineAllianceLogo;
  }
  public function setAirlineLogo(Google_Service_Walletobjects_Image $airlineLogo)
  {
    $this->airlineLogo = $airlineLogo;
  }
  public function getAirlineLogo()
  {
    return $this->airlineLogo;
  }
  public function setAirlineName(Google_Service_Walletobjects_LocalizedString $airlineName)
  {
    $this->airlineName = $airlineName;
  }
  public function getAirlineName()
  {
    return $this->airlineName;
  }
  public function setCarrierIataCode($carrierIataCode)
  {
    $this->carrierIataCode = $carrierIataCode;
  }
  public function getCarrierIataCode()
  {
    return $this->carrierIataCode;
  }
  public function setCarrierIcaoCode($carrierIcaoCode)
  {
    $this->carrierIcaoCode = $carrierIcaoCode;
  }
  public function getCarrierIcaoCode()
  {
    return $this->carrierIcaoCode;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_Walletobjects_FlightClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowMultipleUsersPerObject;
  protected $boardingAndSeatingPolicyType = 'Google_Service_Walletobjects_BoardingAndSeatingPolicy';
  protected $boardingAndSeatingPolicyDataType = '';
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions';
  protected $callbackOptionsDataType = '';
  public $countryCode;
  protected $destinationType = 'Google_Service_Walletobjects_AirportInfo';
  protected $destinationDataType = '';
  public $enableSmartTap;
  protected $flightHeaderType = 'Google_Service_Walletobjects_FlightHeader';
  protected $flightHeaderDataType = '';
  public $flightStatus;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  public $localBoardingDateTime;
  public $localEstimatedOrActualArrivalDateTime;
  public $localEstimatedOrActualDepartureDateTime;
  public $localGateClosingDateTime;
  public $localScheduledArrivalDateTime;
  public $localScheduledDepartureDateTime;
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  protected $originType = 'Google_Service_Walletobjects_AirportInfo';
  protected $originDataType = '';
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setBoardingAndSeatingPolicy(Google_Service_Walletobjects_BoardingAndSeatingPolicy $boardingAndSeatingPolicy)
  {
    $this->boardingAndSeatingPolicy = $boardingAndSeatingPolicy;
  }
  public function getBoardingAndSeatingPolicy()
  {
    return $this->boardingAndSeatingPolicy;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setDestination(Google_Service_Walletobjects_AirportInfo $destination)
  {
    $this->destination = $destination;
  }
  public function getDestination()
  {
    return $this->destination;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setFlightHeader(Google_Service_Walletobjects_FlightHeader $flightHeader)
  {
    $this->flightHeader = $flightHeader;
  }
  public function getFlightHeader()
  {
    return $this->flightHeader;
  }
  public function setFlightStatus($flightStatus)
  {
    $this->flightStatus = $flightStatus;
  }
  public function getFlightStatus()
  {
    return $this->flightStatus;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalBoardingDateTime($localBoardingDateTime)
  {
    $this->localBoardingDateTime = $localBoardingDateTime;
  }
  public function getLocalBoardingDateTime()
  {
    return $this->localBoardingDateTime;
  }
  public function setLocalEstimatedOrActualArrivalDateTime($localEstimatedOrActualArrivalDateTime)
  {
    $this->localEstimatedOrActualArrivalDateTime = $localEstimatedOrActualArrivalDateTime;
  }
  public function getLocalEstimatedOrActualArrivalDateTime()
  {
    return $this->localEstimatedOrActualArrivalDateTime;
  }
  public function setLocalEstimatedOrActualDepartureDateTime($localEstimatedOrActualDepartureDateTime)
  {
    $this->localEstimatedOrActualDepartureDateTime = $localEstimatedOrActualDepartureDateTime;
  }
  public function getLocalEstimatedOrActualDepartureDateTime()
  {
    return $this->localEstimatedOrActualDepartureDateTime;
  }
  public function setLocalGateClosingDateTime($localGateClosingDateTime)
  {
    $this->localGateClosingDateTime = $localGateClosingDateTime;
  }
  public function getLocalGateClosingDateTime()
  {
    return $this->localGateClosingDateTime;
  }
  public function setLocalScheduledArrivalDateTime($localScheduledArrivalDateTime)
  {
    $this->localScheduledArrivalDateTime = $localScheduledArrivalDateTime;
  }
  public function getLocalScheduledArrivalDateTime()
  {
    return $this->localScheduledArrivalDateTime;
  }
  public function setLocalScheduledDepartureDateTime($localScheduledDepartureDateTime)
  {
    $this->localScheduledDepartureDateTime = $localScheduledDepartureDateTime;
  }
  public function getLocalScheduledDepartureDateTime()
  {
    return $this->localScheduledDepartureDateTime;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setOrigin(Google_Service_Walletobjects_AirportInfo $origin)
  {
    $this->origin = $origin;
  }
  public function getOrigin()
  {
    return $this->origin;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_FlightClassAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_FlightClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_FlightClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_FlightClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_FlightClassGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_FlightClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_FlightClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_FlightClassListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_FlightClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_FlightClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_FlightClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_FlightClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_FlightClassMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_FlightHeader extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $carrierType = 'Google_Service_Walletobjects_FlightCarrier';
  protected $carrierDataType = '';
  public $flightNumber;
  public $kind;
  protected $operatingCarrierType = 'Google_Service_Walletobjects_FlightCarrier';
  protected $operatingCarrierDataType = '';
  public $operatingFlightNumber;


  public function setCarrier(Google_Service_Walletobjects_FlightCarrier $carrier)
  {
    $this->carrier = $carrier;
  }
  public function getCarrier()
  {
    return $this->carrier;
  }
  public function setFlightNumber($flightNumber)
  {
    $this->flightNumber = $flightNumber;
  }
  public function getFlightNumber()
  {
    return $this->flightNumber;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOperatingCarrier(Google_Service_Walletobjects_FlightCarrier $operatingCarrier)
  {
    $this->operatingCarrier = $operatingCarrier;
  }
  public function getOperatingCarrier()
  {
    return $this->operatingCarrier;
  }
  public function setOperatingFlightNumber($operatingFlightNumber)
  {
    $this->operatingFlightNumber = $operatingFlightNumber;
  }
  public function getOperatingFlightNumber()
  {
    return $this->operatingFlightNumber;
  }
}

class Google_Service_Walletobjects_FlightObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  protected $boardingAndSeatingInfoType = 'Google_Service_Walletobjects_BoardingAndSeatingInfo';
  protected $boardingAndSeatingInfoDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_FlightClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  public $hasLinkedDevice;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $passengerName;
  protected $reservationInfoType = 'Google_Service_Walletobjects_ReservationInfo';
  protected $reservationInfoDataType = '';
  protected $securityProgramLogoType = 'Google_Service_Walletobjects_Image';
  protected $securityProgramLogoDataType = '';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setBoardingAndSeatingInfo(Google_Service_Walletobjects_BoardingAndSeatingInfo $boardingAndSeatingInfo)
  {
    $this->boardingAndSeatingInfo = $boardingAndSeatingInfo;
  }
  public function getBoardingAndSeatingInfo()
  {
    return $this->boardingAndSeatingInfo;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_FlightClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setPassengerName($passengerName)
  {
    $this->passengerName = $passengerName;
  }
  public function getPassengerName()
  {
    return $this->passengerName;
  }
  public function setReservationInfo(Google_Service_Walletobjects_ReservationInfo $reservationInfo)
  {
    $this->reservationInfo = $reservationInfo;
  }
  public function getReservationInfo()
  {
    return $this->reservationInfo;
  }
  public function setSecurityProgramLogo(Google_Service_Walletobjects_Image $securityProgramLogo)
  {
    $this->securityProgramLogo = $securityProgramLogo;
  }
  public function getSecurityProgramLogo()
  {
    return $this->securityProgramLogo;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_FlightObjectAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_FlightObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_FlightObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_FlightObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_FlightObjectGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_FlightObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_FlightObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_FlightObjectListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_FlightObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_FlightObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_FlightObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_FlightObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_FlightObjectMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_FrequentFlyerInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $frequentFlyerNumber;
  protected $frequentFlyerProgramNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $frequentFlyerProgramNameDataType = '';
  public $kind;


  public function setFrequentFlyerNumber($frequentFlyerNumber)
  {
    $this->frequentFlyerNumber = $frequentFlyerNumber;
  }
  public function getFrequentFlyerNumber()
  {
    return $this->frequentFlyerNumber;
  }
  public function setFrequentFlyerProgramName(Google_Service_Walletobjects_LocalizedString $frequentFlyerProgramName)
  {
    $this->frequentFlyerProgramName = $frequentFlyerProgramName;
  }
  public function getFrequentFlyerProgramName()
  {
    return $this->frequentFlyerProgramName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_Walletobjects_GiftCardClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowBarcodeRedemption;
  public $allowMultipleUsersPerObject;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions';
  protected $callbackOptionsDataType = '';
  public $cardNumberLabel;
  public $countryCode;
  public $enableSmartTap;
  public $eventNumberLabel;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $localizedCardNumberLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedCardNumberLabelDataType = '';
  protected $localizedEventNumberLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedEventNumberLabelDataType = '';
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $localizedMerchantNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedMerchantNameDataType = '';
  protected $localizedPinLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedPinLabelDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  public $merchantName;
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  public $pinLabel;
  protected $programLogoType = 'Google_Service_Walletobjects_Image';
  protected $programLogoDataType = '';
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowBarcodeRedemption($allowBarcodeRedemption)
  {
    $this->allowBarcodeRedemption = $allowBarcodeRedemption;
  }
  public function getAllowBarcodeRedemption()
  {
    return $this->allowBarcodeRedemption;
  }
  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setCardNumberLabel($cardNumberLabel)
  {
    $this->cardNumberLabel = $cardNumberLabel;
  }
  public function getCardNumberLabel()
  {
    return $this->cardNumberLabel;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setEventNumberLabel($eventNumberLabel)
  {
    $this->eventNumberLabel = $eventNumberLabel;
  }
  public function getEventNumberLabel()
  {
    return $this->eventNumberLabel;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalizedCardNumberLabel(Google_Service_Walletobjects_LocalizedString $localizedCardNumberLabel)
  {
    $this->localizedCardNumberLabel = $localizedCardNumberLabel;
  }
  public function getLocalizedCardNumberLabel()
  {
    return $this->localizedCardNumberLabel;
  }
  public function setLocalizedEventNumberLabel(Google_Service_Walletobjects_LocalizedString $localizedEventNumberLabel)
  {
    $this->localizedEventNumberLabel = $localizedEventNumberLabel;
  }
  public function getLocalizedEventNumberLabel()
  {
    return $this->localizedEventNumberLabel;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocalizedMerchantName(Google_Service_Walletobjects_LocalizedString $localizedMerchantName)
  {
    $this->localizedMerchantName = $localizedMerchantName;
  }
  public function getLocalizedMerchantName()
  {
    return $this->localizedMerchantName;
  }
  public function setLocalizedPinLabel(Google_Service_Walletobjects_LocalizedString $localizedPinLabel)
  {
    $this->localizedPinLabel = $localizedPinLabel;
  }
  public function getLocalizedPinLabel()
  {
    return $this->localizedPinLabel;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMerchantName($merchantName)
  {
    $this->merchantName = $merchantName;
  }
  public function getMerchantName()
  {
    return $this->merchantName;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setPinLabel($pinLabel)
  {
    $this->pinLabel = $pinLabel;
  }
  public function getPinLabel()
  {
    return $this->pinLabel;
  }
  public function setProgramLogo(Google_Service_Walletobjects_Image $programLogo)
  {
    $this->programLogo = $programLogo;
  }
  public function getProgramLogo()
  {
    return $this->programLogo;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_GiftCardClassAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_GiftCardClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_GiftCardClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_GiftCardClassGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_GiftCardClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_GiftCardClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GiftCardClassListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_GiftCardClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_GiftCardClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GiftCardClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_GiftCardClassMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_GiftCardObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  protected $balanceType = 'Google_Service_Walletobjects_Money';
  protected $balanceDataType = '';
  protected $balanceUpdateTimeType = 'Google_Service_Walletobjects_DateTime';
  protected $balanceUpdateTimeDataType = '';
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $cardNumber;
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  public $eventNumber;
  public $hasLinkedDevice;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  public $linkedOfferIds;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $pin;
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setBalance(Google_Service_Walletobjects_Money $balance)
  {
    $this->balance = $balance;
  }
  public function getBalance()
  {
    return $this->balance;
  }
  public function setBalanceUpdateTime(Google_Service_Walletobjects_DateTime $balanceUpdateTime)
  {
    $this->balanceUpdateTime = $balanceUpdateTime;
  }
  public function getBalanceUpdateTime()
  {
    return $this->balanceUpdateTime;
  }
  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setCardNumber($cardNumber)
  {
    $this->cardNumber = $cardNumber;
  }
  public function getCardNumber()
  {
    return $this->cardNumber;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_GiftCardClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setEventNumber($eventNumber)
  {
    $this->eventNumber = $eventNumber;
  }
  public function getEventNumber()
  {
    return $this->eventNumber;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinkedOfferIds($linkedOfferIds)
  {
    $this->linkedOfferIds = $linkedOfferIds;
  }
  public function getLinkedOfferIds()
  {
    return $this->linkedOfferIds;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  public function getPin()
  {
    return $this->pin;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_GiftCardObjectAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_GiftCardObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_GiftCardObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_GiftCardObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_GiftCardObjectGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_GiftCardObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_GiftCardObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GiftCardObjectListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_GiftCardObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_GiftCardObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_GiftCardObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_GiftCardObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_GiftCardObjectMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_Image extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  protected $sourceUriType = 'Google_Service_Walletobjects_Uri';
  protected $sourceUriDataType = '';


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setSourceUri(Google_Service_Walletobjects_Uri $sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
  public function getSourceUri()
  {
    return $this->sourceUri;
  }
}

class Google_Service_Walletobjects_ImageModuleData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $mainImageType = 'Google_Service_Walletobjects_Image';
  protected $mainImageDataType = '';


  public function setMainImage(Google_Service_Walletobjects_Image $mainImage)
  {
    $this->mainImage = $mainImage;
  }
  public function getMainImage()
  {
    return $this->mainImage;
  }
}

class Google_Service_Walletobjects_InfoModuleData extends Google_Collection
{
  protected $collection_key = 'labelValueRows';
  protected $internal_gapi_mappings = array(
  );
  protected $labelValueRowsType = 'Google_Service_Walletobjects_LabelValueRow';
  protected $labelValueRowsDataType = 'array';
  public $showLastUpdateTime;


  public function setLabelValueRows($labelValueRows)
  {
    $this->labelValueRows = $labelValueRows;
  }
  public function getLabelValueRows()
  {
    return $this->labelValueRows;
  }
  public function setShowLastUpdateTime($showLastUpdateTime)
  {
    $this->showLastUpdateTime = $showLastUpdateTime;
  }
  public function getShowLastUpdateTime()
  {
    return $this->showLastUpdateTime;
  }
}

class Google_Service_Walletobjects_Issuer extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $contactInfoType = 'Google_Service_Walletobjects_IssuerContactInfo';
  protected $contactInfoDataType = '';
  public $homepageUrl;
  public $issuerId;
  public $name;
  protected $smartTapMerchantDataType = 'Google_Service_Walletobjects_SmartTapMerchantData';
  protected $smartTapMerchantDataDataType = '';


  public function setContactInfo(Google_Service_Walletobjects_IssuerContactInfo $contactInfo)
  {
    $this->contactInfo = $contactInfo;
  }
  public function getContactInfo()
  {
    return $this->contactInfo;
  }
  public function setHomepageUrl($homepageUrl)
  {
    $this->homepageUrl = $homepageUrl;
  }
  public function getHomepageUrl()
  {
    return $this->homepageUrl;
  }
  public function setIssuerId($issuerId)
  {
    $this->issuerId = $issuerId;
  }
  public function getIssuerId()
  {
    return $this->issuerId;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSmartTapMerchantData(Google_Service_Walletobjects_SmartTapMerchantData $smartTapMerchantData)
  {
    $this->smartTapMerchantData = $smartTapMerchantData;
  }
  public function getSmartTapMerchantData()
  {
    return $this->smartTapMerchantData;
  }
}

class Google_Service_Walletobjects_IssuerContactInfo extends Google_Collection
{
  protected $collection_key = 'alertsEmails';
  protected $internal_gapi_mappings = array(
  );
  public $alertsEmails;
  public $email;
  public $name;
  public $phone;


  public function setAlertsEmails($alertsEmails)
  {
    $this->alertsEmails = $alertsEmails;
  }
  public function getAlertsEmails()
  {
    return $this->alertsEmails;
  }
  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }
  public function getPhone()
  {
    return $this->phone;
  }
}

class Google_Service_Walletobjects_IssuerGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_IssuerMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_IssuerMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_IssuerListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_IssuerMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_IssuerMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_IssuerListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $resourcesType = 'Google_Service_Walletobjects_Issuer';
  protected $resourcesDataType = 'array';


  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_IssuerMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_IssuerToUserInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $action;
  protected $signUpInfoType = 'Google_Service_Walletobjects_SignUpInfo';
  protected $signUpInfoDataType = '';
  public $url;
  public $value;


  public function setAction($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function setSignUpInfo(Google_Service_Walletobjects_SignUpInfo $signUpInfo)
  {
    $this->signUpInfo = $signUpInfo;
  }
  public function getSignUpInfo()
  {
    return $this->signUpInfo;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_JwtResource extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $jwt;
  protected $resourcesType = 'Google_Service_Walletobjects_Resources';
  protected $resourcesDataType = '';
  public $saveUri;


  public function setJwt($jwt)
  {
    $this->jwt = $jwt;
  }
  public function getJwt()
  {
    return $this->jwt;
  }
  public function setResources(Google_Service_Walletobjects_Resources $resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
  public function setSaveUri($saveUri)
  {
    $this->saveUri = $saveUri;
  }
  public function getSaveUri()
  {
    return $this->saveUri;
  }
}

class Google_Service_Walletobjects_LabelValue extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $label;
  protected $localizedLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedLabelDataType = '';
  protected $localizedValueType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedValueDataType = '';
  public $value;


  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setLocalizedLabel(Google_Service_Walletobjects_LocalizedString $localizedLabel)
  {
    $this->localizedLabel = $localizedLabel;
  }
  public function getLocalizedLabel()
  {
    return $this->localizedLabel;
  }
  public function setLocalizedValue(Google_Service_Walletobjects_LocalizedString $localizedValue)
  {
    $this->localizedValue = $localizedValue;
  }
  public function getLocalizedValue()
  {
    return $this->localizedValue;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_LabelValueRow extends Google_Collection
{
  protected $collection_key = 'columns';
  protected $internal_gapi_mappings = array(
  );
  protected $columnsType = 'Google_Service_Walletobjects_LabelValue';
  protected $columnsDataType = 'array';


  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  public function getColumns()
  {
    return $this->columns;
  }
}

class Google_Service_Walletobjects_LatLongPoint extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $latitude;
  public $longitude;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
}

class Google_Service_Walletobjects_LinksModuleData extends Google_Collection
{
  protected $collection_key = 'uris';
  protected $internal_gapi_mappings = array(
  );
  protected $urisType = 'Google_Service_Walletobjects_Uri';
  protected $urisDataType = 'array';


  public function setUris($uris)
  {
    $this->uris = $uris;
  }
  public function getUris()
  {
    return $this->uris;
  }
}

class Google_Service_Walletobjects_LocalizedString extends Google_Collection
{
  protected $collection_key = 'translatedValues';
  protected $internal_gapi_mappings = array(
  );
  protected $defaultValueType = 'Google_Service_Walletobjects_TranslatedString';
  protected $defaultValueDataType = '';
  public $kind;
  protected $translatedValuesType = 'Google_Service_Walletobjects_TranslatedString';
  protected $translatedValuesDataType = 'array';


  public function setDefaultValue(Google_Service_Walletobjects_TranslatedString $defaultValue)
  {
    $this->defaultValue = $defaultValue;
  }
  public function getDefaultValue()
  {
    return $this->defaultValue;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTranslatedValues($translatedValues)
  {
    $this->translatedValues = $translatedValues;
  }
  public function getTranslatedValues()
  {
    return $this->translatedValues;
  }
}

class Google_Service_Walletobjects_LoyaltyClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $accountIdLabel;
  public $accountNameLabel;
  public $allowMultipleUsersPerObject;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions';
  protected $callbackOptionsDataType = '';
  public $countryCode;
  protected $discoverableProgramType = 'Google_Service_Walletobjects_DiscoverableProgram';
  protected $discoverableProgramDataType = '';
  public $enableSmartTap;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $localizedAccountIdLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedAccountIdLabelDataType = '';
  protected $localizedAccountNameLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedAccountNameLabelDataType = '';
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $localizedProgramNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedProgramNameDataType = '';
  protected $localizedRewardsTierType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedRewardsTierDataType = '';
  protected $localizedRewardsTierLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedRewardsTierLabelDataType = '';
  protected $localizedSecondaryRewardsTierType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedSecondaryRewardsTierDataType = '';
  protected $localizedSecondaryRewardsTierLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedSecondaryRewardsTierLabelDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  protected $programLogoType = 'Google_Service_Walletobjects_Image';
  protected $programLogoDataType = '';
  public $programName;
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  public $rewardsTier;
  public $rewardsTierLabel;
  public $secondaryRewardsTier;
  public $secondaryRewardsTierLabel;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAccountIdLabel($accountIdLabel)
  {
    $this->accountIdLabel = $accountIdLabel;
  }
  public function getAccountIdLabel()
  {
    return $this->accountIdLabel;
  }
  public function setAccountNameLabel($accountNameLabel)
  {
    $this->accountNameLabel = $accountNameLabel;
  }
  public function getAccountNameLabel()
  {
    return $this->accountNameLabel;
  }
  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setDiscoverableProgram(Google_Service_Walletobjects_DiscoverableProgram $discoverableProgram)
  {
    $this->discoverableProgram = $discoverableProgram;
  }
  public function getDiscoverableProgram()
  {
    return $this->discoverableProgram;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalizedAccountIdLabel(Google_Service_Walletobjects_LocalizedString $localizedAccountIdLabel)
  {
    $this->localizedAccountIdLabel = $localizedAccountIdLabel;
  }
  public function getLocalizedAccountIdLabel()
  {
    return $this->localizedAccountIdLabel;
  }
  public function setLocalizedAccountNameLabel(Google_Service_Walletobjects_LocalizedString $localizedAccountNameLabel)
  {
    $this->localizedAccountNameLabel = $localizedAccountNameLabel;
  }
  public function getLocalizedAccountNameLabel()
  {
    return $this->localizedAccountNameLabel;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocalizedProgramName(Google_Service_Walletobjects_LocalizedString $localizedProgramName)
  {
    $this->localizedProgramName = $localizedProgramName;
  }
  public function getLocalizedProgramName()
  {
    return $this->localizedProgramName;
  }
  public function setLocalizedRewardsTier(Google_Service_Walletobjects_LocalizedString $localizedRewardsTier)
  {
    $this->localizedRewardsTier = $localizedRewardsTier;
  }
  public function getLocalizedRewardsTier()
  {
    return $this->localizedRewardsTier;
  }
  public function setLocalizedRewardsTierLabel(Google_Service_Walletobjects_LocalizedString $localizedRewardsTierLabel)
  {
    $this->localizedRewardsTierLabel = $localizedRewardsTierLabel;
  }
  public function getLocalizedRewardsTierLabel()
  {
    return $this->localizedRewardsTierLabel;
  }
  public function setLocalizedSecondaryRewardsTier(Google_Service_Walletobjects_LocalizedString $localizedSecondaryRewardsTier)
  {
    $this->localizedSecondaryRewardsTier = $localizedSecondaryRewardsTier;
  }
  public function getLocalizedSecondaryRewardsTier()
  {
    return $this->localizedSecondaryRewardsTier;
  }
  public function setLocalizedSecondaryRewardsTierLabel(Google_Service_Walletobjects_LocalizedString $localizedSecondaryRewardsTierLabel)
  {
    $this->localizedSecondaryRewardsTierLabel = $localizedSecondaryRewardsTierLabel;
  }
  public function getLocalizedSecondaryRewardsTierLabel()
  {
    return $this->localizedSecondaryRewardsTierLabel;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setProgramLogo(Google_Service_Walletobjects_Image $programLogo)
  {
    $this->programLogo = $programLogo;
  }
  public function getProgramLogo()
  {
    return $this->programLogo;
  }
  public function setProgramName($programName)
  {
    $this->programName = $programName;
  }
  public function getProgramName()
  {
    return $this->programName;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setRewardsTier($rewardsTier)
  {
    $this->rewardsTier = $rewardsTier;
  }
  public function getRewardsTier()
  {
    return $this->rewardsTier;
  }
  public function setRewardsTierLabel($rewardsTierLabel)
  {
    $this->rewardsTierLabel = $rewardsTierLabel;
  }
  public function getRewardsTierLabel()
  {
    return $this->rewardsTierLabel;
  }
  public function setSecondaryRewardsTier($secondaryRewardsTier)
  {
    $this->secondaryRewardsTier = $secondaryRewardsTier;
  }
  public function getSecondaryRewardsTier()
  {
    return $this->secondaryRewardsTier;
  }
  public function setSecondaryRewardsTierLabel($secondaryRewardsTierLabel)
  {
    $this->secondaryRewardsTierLabel = $secondaryRewardsTierLabel;
  }
  public function getSecondaryRewardsTierLabel()
  {
    return $this->secondaryRewardsTierLabel;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_LoyaltyClassAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_LoyaltyClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_LoyaltyClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_LoyaltyClassGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_LoyaltyClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_LoyaltyClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_LoyaltyClassListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_LoyaltyClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_LoyaltyClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_LoyaltyClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_LoyaltyClassMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_LoyaltyObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $accountId;
  public $accountName;
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  public $hasLinkedDevice;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  public $linkedOfferIds;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $loyaltyPointsType = 'Google_Service_Walletobjects_LoyaltyPoints';
  protected $loyaltyPointsDataType = '';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  protected $secondaryLoyaltyPointsType = 'Google_Service_Walletobjects_LoyaltyPoints';
  protected $secondaryLoyaltyPointsDataType = '';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setAccountName($accountName)
  {
    $this->accountName = $accountName;
  }
  public function getAccountName()
  {
    return $this->accountName;
  }
  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_LoyaltyClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinkedOfferIds($linkedOfferIds)
  {
    $this->linkedOfferIds = $linkedOfferIds;
  }
  public function getLinkedOfferIds()
  {
    return $this->linkedOfferIds;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setLoyaltyPoints(Google_Service_Walletobjects_LoyaltyPoints $loyaltyPoints)
  {
    $this->loyaltyPoints = $loyaltyPoints;
  }
  public function getLoyaltyPoints()
  {
    return $this->loyaltyPoints;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setSecondaryLoyaltyPoints(Google_Service_Walletobjects_LoyaltyPoints $secondaryLoyaltyPoints)
  {
    $this->secondaryLoyaltyPoints = $secondaryLoyaltyPoints;
  }
  public function getSecondaryLoyaltyPoints()
  {
    return $this->secondaryLoyaltyPoints;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_LoyaltyObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_LoyaltyObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_LoyaltyObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_LoyaltyObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_LoyaltyObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_LoyaltyObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_LoyaltyObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectModifyLinkedOfferObjectsRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $linkedOfferObjectIdsType = 'Google_Service_Walletobjects_WalletObjectModifyLinkedOfferObjects';
  protected $linkedOfferObjectIdsDataType = '';


  public function setLinkedOfferObjectIds(Google_Service_Walletobjects_WalletObjectModifyLinkedOfferObjects $linkedOfferObjectIds)
  {
    $this->linkedOfferObjectIds = $linkedOfferObjectIds;
  }
  public function getLinkedOfferObjectIds()
  {
    return $this->linkedOfferObjectIds;
  }
}

class Google_Service_Walletobjects_LoyaltyObjectModifyLinkedOfferObjectsResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_LoyaltyObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_LoyaltyObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_LoyaltyPoints extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $balanceType = 'Google_Service_Walletobjects_LoyaltyPointsBalance';
  protected $balanceDataType = '';
  public $label;
  protected $localizedLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedLabelDataType = '';


  public function setBalance(Google_Service_Walletobjects_LoyaltyPointsBalance $balance)
  {
    $this->balance = $balance;
  }
  public function getBalance()
  {
    return $this->balance;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setLocalizedLabel(Google_Service_Walletobjects_LocalizedString $localizedLabel)
  {
    $this->localizedLabel = $localizedLabel;
  }
  public function getLocalizedLabel()
  {
    return $this->localizedLabel;
  }
}

class Google_Service_Walletobjects_LoyaltyPointsBalance extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $double;
  public $int;
  protected $moneyType = 'Google_Service_Walletobjects_Money';
  protected $moneyDataType = '';
  public $string;


  public function setDouble($double)
  {
    $this->double = $double;
  }
  public function getDouble()
  {
    return $this->double;
  }
  public function setInt($int)
  {
    $this->int = $int;
  }
  public function getInt()
  {
    return $this->int;
  }
  public function setMoney(Google_Service_Walletobjects_Money $money)
  {
    $this->money = $money;
  }
  public function getMoney()
  {
    return $this->money;
  }
  public function setString($string)
  {
    $this->string = $string;
  }
  public function getString()
  {
    return $this->string;
  }
}

class Google_Service_Walletobjects_Money extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currencyCode;
  public $kind;
  public $micros;


  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMicros($micros)
  {
    $this->micros = $micros;
  }
  public function getMicros()
  {
    return $this->micros;
  }
}

class Google_Service_Walletobjects_OfferClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowMultipleUsersPerObject;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions';
  protected $callbackOptionsDataType = '';
  public $countryCode;
  public $details;
  public $enableSmartTap;
  public $finePrint;
  protected $helpUriType = 'Google_Service_Walletobjects_Uri';
  protected $helpUriDataType = '';
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $localizedDetailsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedDetailsDataType = '';
  protected $localizedFinePrintType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedFinePrintDataType = '';
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $localizedProviderType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedProviderDataType = '';
  protected $localizedShortTitleType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedShortTitleDataType = '';
  protected $localizedTitleType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedTitleDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  public $provider;
  public $redemptionChannel;
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  public $shortTitle;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  public $title;
  protected $titleImageType = 'Google_Service_Walletobjects_Image';
  protected $titleImageDataType = '';
  public $version;
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setDetails($details)
  {
    $this->details = $details;
  }
  public function getDetails()
  {
    return $this->details;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setFinePrint($finePrint)
  {
    $this->finePrint = $finePrint;
  }
  public function getFinePrint()
  {
    return $this->finePrint;
  }
  public function setHelpUri(Google_Service_Walletobjects_Uri $helpUri)
  {
    $this->helpUri = $helpUri;
  }
  public function getHelpUri()
  {
    return $this->helpUri;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocalizedDetails(Google_Service_Walletobjects_LocalizedString $localizedDetails)
  {
    $this->localizedDetails = $localizedDetails;
  }
  public function getLocalizedDetails()
  {
    return $this->localizedDetails;
  }
  public function setLocalizedFinePrint(Google_Service_Walletobjects_LocalizedString $localizedFinePrint)
  {
    $this->localizedFinePrint = $localizedFinePrint;
  }
  public function getLocalizedFinePrint()
  {
    return $this->localizedFinePrint;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocalizedProvider(Google_Service_Walletobjects_LocalizedString $localizedProvider)
  {
    $this->localizedProvider = $localizedProvider;
  }
  public function getLocalizedProvider()
  {
    return $this->localizedProvider;
  }
  public function setLocalizedShortTitle(Google_Service_Walletobjects_LocalizedString $localizedShortTitle)
  {
    $this->localizedShortTitle = $localizedShortTitle;
  }
  public function getLocalizedShortTitle()
  {
    return $this->localizedShortTitle;
  }
  public function setLocalizedTitle(Google_Service_Walletobjects_LocalizedString $localizedTitle)
  {
    $this->localizedTitle = $localizedTitle;
  }
  public function getLocalizedTitle()
  {
    return $this->localizedTitle;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  public function getProvider()
  {
    return $this->provider;
  }
  public function setRedemptionChannel($redemptionChannel)
  {
    $this->redemptionChannel = $redemptionChannel;
  }
  public function getRedemptionChannel()
  {
    return $this->redemptionChannel;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setShortTitle($shortTitle)
  {
    $this->shortTitle = $shortTitle;
  }
  public function getShortTitle()
  {
    return $this->shortTitle;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setTitleImage(Google_Service_Walletobjects_Image $titleImage)
  {
    $this->titleImage = $titleImage;
  }
  public function getTitleImage()
  {
    return $this->titleImage;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_OfferClassAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_OfferClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_OfferClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_OfferClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_OfferClassGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_OfferClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_OfferClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_OfferClassListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_OfferClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_OfferClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_OfferClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_OfferClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_OfferClassMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_OfferObject extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_OfferClass';
  protected $classReferenceDataType = '';
  public $disableExpirationNotification;
  public $hasLinkedDevice;
  public $hasUsers;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $kind;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_OfferClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_OfferObjectAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_OfferObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_OfferObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_OfferObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_OfferObjectGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_OfferObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_OfferObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_OfferObjectListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_OfferObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_OfferObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_OfferObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_OfferObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_OfferObjectMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_Pagination extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $nextPageToken;
  public $resultsPerPage;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setResultsPerPage($resultsPerPage)
  {
    $this->resultsPerPage = $resultsPerPage;
  }
  public function getResultsPerPage()
  {
    return $this->resultsPerPage;
  }
}

class Google_Service_Walletobjects_Permission extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $emailAddress;
  public $role;


  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
}

class Google_Service_Walletobjects_Permissions extends Google_Collection
{
  protected $collection_key = 'permissions';
  protected $internal_gapi_mappings = array(
  );
  public $issuerId;
  protected $permissionsType = 'Google_Service_Walletobjects_Permission';
  protected $permissionsDataType = 'array';


  public function setIssuerId($issuerId)
  {
    $this->issuerId = $issuerId;
  }
  public function getIssuerId()
  {
    return $this->issuerId;
  }
  public function setPermissions($permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
}

class Google_Service_Walletobjects_PurchaseDetails extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $accountId;
  public $confirmationCode;
  public $purchaseDateTime;
  public $purchaseReceiptNumber;
  protected $ticketCostType = 'Google_Service_Walletobjects_TicketCost';
  protected $ticketCostDataType = '';


  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setConfirmationCode($confirmationCode)
  {
    $this->confirmationCode = $confirmationCode;
  }
  public function getConfirmationCode()
  {
    return $this->confirmationCode;
  }
  public function setPurchaseDateTime($purchaseDateTime)
  {
    $this->purchaseDateTime = $purchaseDateTime;
  }
  public function getPurchaseDateTime()
  {
    return $this->purchaseDateTime;
  }
  public function setPurchaseReceiptNumber($purchaseReceiptNumber)
  {
    $this->purchaseReceiptNumber = $purchaseReceiptNumber;
  }
  public function getPurchaseReceiptNumber()
  {
    return $this->purchaseReceiptNumber;
  }
  public function setTicketCost(Google_Service_Walletobjects_TicketCost $ticketCost)
  {
    $this->ticketCost = $ticketCost;
  }
  public function getTicketCost()
  {
    return $this->ticketCost;
  }
}

class Google_Service_Walletobjects_ReservationInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $confirmationCode;
  public $eticketNumber;
  protected $frequentFlyerInfoType = 'Google_Service_Walletobjects_FrequentFlyerInfo';
  protected $frequentFlyerInfoDataType = '';
  public $kind;


  public function setConfirmationCode($confirmationCode)
  {
    $this->confirmationCode = $confirmationCode;
  }
  public function getConfirmationCode()
  {
    return $this->confirmationCode;
  }
  public function setEticketNumber($eticketNumber)
  {
    $this->eticketNumber = $eticketNumber;
  }
  public function getEticketNumber()
  {
    return $this->eticketNumber;
  }
  public function setFrequentFlyerInfo(Google_Service_Walletobjects_FrequentFlyerInfo $frequentFlyerInfo)
  {
    $this->frequentFlyerInfo = $frequentFlyerInfo;
  }
  public function getFrequentFlyerInfo()
  {
    return $this->frequentFlyerInfo;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_Walletobjects_Resources extends Google_Collection
{
  protected $collection_key = 'offerObjects';
  protected $internal_gapi_mappings = array(
  );
  protected $eventTicketClassesType = 'Google_Service_Walletobjects_EventTicketClass';
  protected $eventTicketClassesDataType = 'array';
  protected $eventTicketObjectsType = 'Google_Service_Walletobjects_EventTicketObject';
  protected $eventTicketObjectsDataType = 'array';
  protected $flightClassesType = 'Google_Service_Walletobjects_FlightClass';
  protected $flightClassesDataType = 'array';
  protected $flightObjectsType = 'Google_Service_Walletobjects_FlightObject';
  protected $flightObjectsDataType = 'array';
  protected $giftCardClassesType = 'Google_Service_Walletobjects_GiftCardClass';
  protected $giftCardClassesDataType = 'array';
  protected $giftCardObjectsType = 'Google_Service_Walletobjects_GiftCardObject';
  protected $giftCardObjectsDataType = 'array';
  protected $loyaltyClassesType = 'Google_Service_Walletobjects_LoyaltyClass';
  protected $loyaltyClassesDataType = 'array';
  protected $loyaltyObjectsType = 'Google_Service_Walletobjects_LoyaltyObject';
  protected $loyaltyObjectsDataType = 'array';
  protected $offerClassesType = 'Google_Service_Walletobjects_OfferClass';
  protected $offerClassesDataType = 'array';
  protected $offerObjectsType = 'Google_Service_Walletobjects_OfferObject';
  protected $offerObjectsDataType = 'array';


  public function setEventTicketClasses($eventTicketClasses)
  {
    $this->eventTicketClasses = $eventTicketClasses;
  }
  public function getEventTicketClasses()
  {
    return $this->eventTicketClasses;
  }
  public function setEventTicketObjects($eventTicketObjects)
  {
    $this->eventTicketObjects = $eventTicketObjects;
  }
  public function getEventTicketObjects()
  {
    return $this->eventTicketObjects;
  }
  public function setFlightClasses($flightClasses)
  {
    $this->flightClasses = $flightClasses;
  }
  public function getFlightClasses()
  {
    return $this->flightClasses;
  }
  public function setFlightObjects($flightObjects)
  {
    $this->flightObjects = $flightObjects;
  }
  public function getFlightObjects()
  {
    return $this->flightObjects;
  }
  public function setGiftCardClasses($giftCardClasses)
  {
    $this->giftCardClasses = $giftCardClasses;
  }
  public function getGiftCardClasses()
  {
    return $this->giftCardClasses;
  }
  public function setGiftCardObjects($giftCardObjects)
  {
    $this->giftCardObjects = $giftCardObjects;
  }
  public function getGiftCardObjects()
  {
    return $this->giftCardObjects;
  }
  public function setLoyaltyClasses($loyaltyClasses)
  {
    $this->loyaltyClasses = $loyaltyClasses;
  }
  public function getLoyaltyClasses()
  {
    return $this->loyaltyClasses;
  }
  public function setLoyaltyObjects($loyaltyObjects)
  {
    $this->loyaltyObjects = $loyaltyObjects;
  }
  public function getLoyaltyObjects()
  {
    return $this->loyaltyObjects;
  }
  public function setOfferClasses($offerClasses)
  {
    $this->offerClasses = $offerClasses;
  }
  public function getOfferClasses()
  {
    return $this->offerClasses;
  }
  public function setOfferObjects($offerObjects)
  {
    $this->offerObjects = $offerObjects;
  }
  public function getOfferObjects()
  {
    return $this->offerObjects;
  }
}

class Google_Service_Walletobjects_SignUpInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $classId;


  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
}

class Google_Service_Walletobjects_SmartTap extends Google_Collection
{
  protected $collection_key = 'infos';
  protected $internal_gapi_mappings = array(
  );
  public $id;
  protected $infosType = 'Google_Service_Walletobjects_IssuerToUserInfo';
  protected $infosDataType = 'array';
  public $kind;
  public $merchantId;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInfos($infos)
  {
    $this->infos = $infos;
  }
  public function getInfos()
  {
    return $this->infos;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  public function getMerchantId()
  {
    return $this->merchantId;
  }
}

class Google_Service_Walletobjects_SmartTapMerchantData extends Google_Collection
{
  protected $collection_key = 'authenticationKeys';
  protected $internal_gapi_mappings = array(
  );
  protected $authenticationKeysType = 'Google_Service_Walletobjects_AuthenticationKey';
  protected $authenticationKeysDataType = 'array';
  public $smartTapMerchantId;


  public function setAuthenticationKeys($authenticationKeys)
  {
    $this->authenticationKeys = $authenticationKeys;
  }
  public function getAuthenticationKeys()
  {
    return $this->authenticationKeys;
  }
  public function setSmartTapMerchantId($smartTapMerchantId)
  {
    $this->smartTapMerchantId = $smartTapMerchantId;
  }
  public function getSmartTapMerchantId()
  {
    return $this->smartTapMerchantId;
  }
}

class Google_Service_Walletobjects_TextModuleData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $body;
  public $header;
  protected $localizedBodyType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedBodyDataType = '';
  protected $localizedHeaderType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedHeaderDataType = '';


  public function setBody($body)
  {
    $this->body = $body;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setHeader($header)
  {
    $this->header = $header;
  }
  public function getHeader()
  {
    return $this->header;
  }
  public function setLocalizedBody(Google_Service_Walletobjects_LocalizedString $localizedBody)
  {
    $this->localizedBody = $localizedBody;
  }
  public function getLocalizedBody()
  {
    return $this->localizedBody;
  }
  public function setLocalizedHeader(Google_Service_Walletobjects_LocalizedString $localizedHeader)
  {
    $this->localizedHeader = $localizedHeader;
  }
  public function getLocalizedHeader()
  {
    return $this->localizedHeader;
  }
}

class Google_Service_Walletobjects_TicketCost extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $discountMessageType = 'Google_Service_Walletobjects_LocalizedString';
  protected $discountMessageDataType = '';
  protected $faceValueType = 'Google_Service_Walletobjects_Money';
  protected $faceValueDataType = '';
  protected $purchasePriceType = 'Google_Service_Walletobjects_Money';
  protected $purchasePriceDataType = '';


  public function setDiscountMessage(Google_Service_Walletobjects_LocalizedString $discountMessage)
  {
    $this->discountMessage = $discountMessage;
  }
  public function getDiscountMessage()
  {
    return $this->discountMessage;
  }
  public function setFaceValue(Google_Service_Walletobjects_Money $faceValue)
  {
    $this->faceValue = $faceValue;
  }
  public function getFaceValue()
  {
    return $this->faceValue;
  }
  public function setPurchasePrice(Google_Service_Walletobjects_Money $purchasePrice)
  {
    $this->purchasePrice = $purchasePrice;
  }
  public function getPurchasePrice()
  {
    return $this->purchasePrice;
  }
}

class Google_Service_Walletobjects_TicketLeg extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $arrivalDateTime;
  public $carriage;
  public $departureDateTime;
  protected $destinationNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $destinationNameDataType = '';
  public $destinationStationCode;
  protected $fareNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $fareNameDataType = '';
  protected $originNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $originNameDataType = '';
  public $originStationCode;
  public $platform;
  protected $ticketSeatType = 'Google_Service_Walletobjects_TicketSeat';
  protected $ticketSeatDataType = '';
  public $zone;


  public function setArrivalDateTime($arrivalDateTime)
  {
    $this->arrivalDateTime = $arrivalDateTime;
  }
  public function getArrivalDateTime()
  {
    return $this->arrivalDateTime;
  }
  public function setCarriage($carriage)
  {
    $this->carriage = $carriage;
  }
  public function getCarriage()
  {
    return $this->carriage;
  }
  public function setDepartureDateTime($departureDateTime)
  {
    $this->departureDateTime = $departureDateTime;
  }
  public function getDepartureDateTime()
  {
    return $this->departureDateTime;
  }
  public function setDestinationName(Google_Service_Walletobjects_LocalizedString $destinationName)
  {
    $this->destinationName = $destinationName;
  }
  public function getDestinationName()
  {
    return $this->destinationName;
  }
  public function setDestinationStationCode($destinationStationCode)
  {
    $this->destinationStationCode = $destinationStationCode;
  }
  public function getDestinationStationCode()
  {
    return $this->destinationStationCode;
  }
  public function setFareName(Google_Service_Walletobjects_LocalizedString $fareName)
  {
    $this->fareName = $fareName;
  }
  public function getFareName()
  {
    return $this->fareName;
  }
  public function setOriginName(Google_Service_Walletobjects_LocalizedString $originName)
  {
    $this->originName = $originName;
  }
  public function getOriginName()
  {
    return $this->originName;
  }
  public function setOriginStationCode($originStationCode)
  {
    $this->originStationCode = $originStationCode;
  }
  public function getOriginStationCode()
  {
    return $this->originStationCode;
  }
  public function setPlatform($platform)
  {
    $this->platform = $platform;
  }
  public function getPlatform()
  {
    return $this->platform;
  }
  public function setTicketSeat(Google_Service_Walletobjects_TicketSeat $ticketSeat)
  {
    $this->ticketSeat = $ticketSeat;
  }
  public function getTicketSeat()
  {
    return $this->ticketSeat;
  }
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  public function getZone()
  {
    return $this->zone;
  }
}

class Google_Service_Walletobjects_TicketRestrictions extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $otherRestrictionsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $otherRestrictionsDataType = '';
  protected $routeRestrictionsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $routeRestrictionsDataType = '';
  protected $routeRestrictionsDetailsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $routeRestrictionsDetailsDataType = '';
  protected $timeRestrictionsType = 'Google_Service_Walletobjects_LocalizedString';
  protected $timeRestrictionsDataType = '';


  public function setOtherRestrictions(Google_Service_Walletobjects_LocalizedString $otherRestrictions)
  {
    $this->otherRestrictions = $otherRestrictions;
  }
  public function getOtherRestrictions()
  {
    return $this->otherRestrictions;
  }
  public function setRouteRestrictions(Google_Service_Walletobjects_LocalizedString $routeRestrictions)
  {
    $this->routeRestrictions = $routeRestrictions;
  }
  public function getRouteRestrictions()
  {
    return $this->routeRestrictions;
  }
  public function setRouteRestrictionsDetails(Google_Service_Walletobjects_LocalizedString $routeRestrictionsDetails)
  {
    $this->routeRestrictionsDetails = $routeRestrictionsDetails;
  }
  public function getRouteRestrictionsDetails()
  {
    return $this->routeRestrictionsDetails;
  }
  public function setTimeRestrictions(Google_Service_Walletobjects_LocalizedString $timeRestrictions)
  {
    $this->timeRestrictions = $timeRestrictions;
  }
  public function getTimeRestrictions()
  {
    return $this->timeRestrictions;
  }
}

class Google_Service_Walletobjects_TicketSeat extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $coach;
  protected $customFareClassType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customFareClassDataType = '';
  public $fareClass;
  public $seat;


  public function setCoach($coach)
  {
    $this->coach = $coach;
  }
  public function getCoach()
  {
    return $this->coach;
  }
  public function setCustomFareClass(Google_Service_Walletobjects_LocalizedString $customFareClass)
  {
    $this->customFareClass = $customFareClass;
  }
  public function getCustomFareClass()
  {
    return $this->customFareClass;
  }
  public function setFareClass($fareClass)
  {
    $this->fareClass = $fareClass;
  }
  public function getFareClass()
  {
    return $this->fareClass;
  }
  public function setSeat($seat)
  {
    $this->seat = $seat;
  }
  public function getSeat()
  {
    return $this->seat;
  }
}

class Google_Service_Walletobjects_TimeInterval extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $endType = 'Google_Service_Walletobjects_DateTime';
  protected $endDataType = '';
  public $kind;
  protected $startType = 'Google_Service_Walletobjects_DateTime';
  protected $startDataType = '';


  public function setEnd(Google_Service_Walletobjects_DateTime $end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStart(Google_Service_Walletobjects_DateTime $start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class Google_Service_Walletobjects_TransitClass extends Google_Collection
{
  protected $collection_key = 'textModulesData';
  protected $internal_gapi_mappings = array(
  );
  public $allowMultipleUsersPerObject;
  public $antiScreenshotAnimation;
  protected $callbackOptionsType = 'Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions';
  protected $callbackOptionsDataType = '';
  public $countryCode;
  protected $customArrivalDateLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customArrivalDateLabelDataType = '';
  protected $customCarriageLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customCarriageLabelDataType = '';
  protected $customCoachLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customCoachLabelDataType = '';
  protected $customConcessionCategoryLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customConcessionCategoryLabelDataType = '';
  protected $customConfirmationCodeLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customConfirmationCodeLabelDataType = '';
  protected $customDepartureDateLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customDepartureDateLabelDataType = '';
  protected $customDiscountMessageLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customDiscountMessageLabelDataType = '';
  protected $customFareClassLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customFareClassLabelDataType = '';
  protected $customFareNameLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customFareNameLabelDataType = '';
  protected $customOtherRestrictionsLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customOtherRestrictionsLabelDataType = '';
  protected $customPlatformLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customPlatformLabelDataType = '';
  protected $customPurchaseDateTimeLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customPurchaseDateTimeLabelDataType = '';
  protected $customPurchaseFaceValueLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customPurchaseFaceValueLabelDataType = '';
  protected $customPurchasePriceLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customPurchasePriceLabelDataType = '';
  protected $customPurchaseReceiptNumberLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customPurchaseReceiptNumberLabelDataType = '';
  protected $customRouteRestrictionsDetailsLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customRouteRestrictionsDetailsLabelDataType = '';
  protected $customRouteRestrictionsLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customRouteRestrictionsLabelDataType = '';
  protected $customSeatLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customSeatLabelDataType = '';
  protected $customTicketNumberLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customTicketNumberLabelDataType = '';
  protected $customTimeRestrictionsLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customTimeRestrictionsLabelDataType = '';
  protected $customTransitTerminusNameLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customTransitTerminusNameLabelDataType = '';
  protected $customValidityEndDateLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customValidityEndDateLabelDataType = '';
  protected $customValidityStartDateLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customValidityStartDateLabelDataType = '';
  protected $customZoneLabelType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customZoneLabelDataType = '';
  public $enableSmartTap;
  protected $heroImageType = 'Google_Service_Walletobjects_Image';
  protected $heroImageDataType = '';
  public $hexBackgroundColor;
  protected $homepageUriType = 'Google_Service_Walletobjects_Uri';
  protected $homepageUriDataType = '';
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  public $issuerName;
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  public $localeOverride;
  protected $localizedIssuerNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedIssuerNameDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $logoType = 'Google_Service_Walletobjects_Image';
  protected $logoDataType = '';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $multipleDevicesAndHoldersAllowedStatus;
  public $redemptionIssuers;
  protected $reviewType = 'Google_Service_Walletobjects_CommonWalletObjectClassReview';
  protected $reviewDataType = '';
  public $reviewStatus;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $transitOperatorNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $transitOperatorNameDataType = '';
  protected $transitTerminusNameType = 'Google_Service_Walletobjects_LocalizedString';
  protected $transitTerminusNameDataType = '';
  public $transitType;
  public $version;
  protected $watermarkType = 'Google_Service_Walletobjects_Image';
  protected $watermarkDataType = '';
  protected $wordMarkType = 'Google_Service_Walletobjects_Image';
  protected $wordMarkDataType = '';


  public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
  {
    $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
  }
  public function getAllowMultipleUsersPerObject()
  {
    return $this->allowMultipleUsersPerObject;
  }
  public function setAntiScreenshotAnimation($antiScreenshotAnimation)
  {
    $this->antiScreenshotAnimation = $antiScreenshotAnimation;
  }
  public function getAntiScreenshotAnimation()
  {
    return $this->antiScreenshotAnimation;
  }
  public function setCallbackOptions(Google_Service_Walletobjects_CommonWalletObjectClassCallbackOptions $callbackOptions)
  {
    $this->callbackOptions = $callbackOptions;
  }
  public function getCallbackOptions()
  {
    return $this->callbackOptions;
  }
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  public function setCustomArrivalDateLabel(Google_Service_Walletobjects_LocalizedString $customArrivalDateLabel)
  {
    $this->customArrivalDateLabel = $customArrivalDateLabel;
  }
  public function getCustomArrivalDateLabel()
  {
    return $this->customArrivalDateLabel;
  }
  public function setCustomCarriageLabel(Google_Service_Walletobjects_LocalizedString $customCarriageLabel)
  {
    $this->customCarriageLabel = $customCarriageLabel;
  }
  public function getCustomCarriageLabel()
  {
    return $this->customCarriageLabel;
  }
  public function setCustomCoachLabel(Google_Service_Walletobjects_LocalizedString $customCoachLabel)
  {
    $this->customCoachLabel = $customCoachLabel;
  }
  public function getCustomCoachLabel()
  {
    return $this->customCoachLabel;
  }
  public function setCustomConcessionCategoryLabel(Google_Service_Walletobjects_LocalizedString $customConcessionCategoryLabel)
  {
    $this->customConcessionCategoryLabel = $customConcessionCategoryLabel;
  }
  public function getCustomConcessionCategoryLabel()
  {
    return $this->customConcessionCategoryLabel;
  }
  public function setCustomConfirmationCodeLabel(Google_Service_Walletobjects_LocalizedString $customConfirmationCodeLabel)
  {
    $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
  }
  public function getCustomConfirmationCodeLabel()
  {
    return $this->customConfirmationCodeLabel;
  }
  public function setCustomDepartureDateLabel(Google_Service_Walletobjects_LocalizedString $customDepartureDateLabel)
  {
    $this->customDepartureDateLabel = $customDepartureDateLabel;
  }
  public function getCustomDepartureDateLabel()
  {
    return $this->customDepartureDateLabel;
  }
  public function setCustomDiscountMessageLabel(Google_Service_Walletobjects_LocalizedString $customDiscountMessageLabel)
  {
    $this->customDiscountMessageLabel = $customDiscountMessageLabel;
  }
  public function getCustomDiscountMessageLabel()
  {
    return $this->customDiscountMessageLabel;
  }
  public function setCustomFareClassLabel(Google_Service_Walletobjects_LocalizedString $customFareClassLabel)
  {
    $this->customFareClassLabel = $customFareClassLabel;
  }
  public function getCustomFareClassLabel()
  {
    return $this->customFareClassLabel;
  }
  public function setCustomFareNameLabel(Google_Service_Walletobjects_LocalizedString $customFareNameLabel)
  {
    $this->customFareNameLabel = $customFareNameLabel;
  }
  public function getCustomFareNameLabel()
  {
    return $this->customFareNameLabel;
  }
  public function setCustomOtherRestrictionsLabel(Google_Service_Walletobjects_LocalizedString $customOtherRestrictionsLabel)
  {
    $this->customOtherRestrictionsLabel = $customOtherRestrictionsLabel;
  }
  public function getCustomOtherRestrictionsLabel()
  {
    return $this->customOtherRestrictionsLabel;
  }
  public function setCustomPlatformLabel(Google_Service_Walletobjects_LocalizedString $customPlatformLabel)
  {
    $this->customPlatformLabel = $customPlatformLabel;
  }
  public function getCustomPlatformLabel()
  {
    return $this->customPlatformLabel;
  }
  public function setCustomPurchaseDateTimeLabel(Google_Service_Walletobjects_LocalizedString $customPurchaseDateTimeLabel)
  {
    $this->customPurchaseDateTimeLabel = $customPurchaseDateTimeLabel;
  }
  public function getCustomPurchaseDateTimeLabel()
  {
    return $this->customPurchaseDateTimeLabel;
  }
  public function setCustomPurchaseFaceValueLabel(Google_Service_Walletobjects_LocalizedString $customPurchaseFaceValueLabel)
  {
    $this->customPurchaseFaceValueLabel = $customPurchaseFaceValueLabel;
  }
  public function getCustomPurchaseFaceValueLabel()
  {
    return $this->customPurchaseFaceValueLabel;
  }
  public function setCustomPurchasePriceLabel(Google_Service_Walletobjects_LocalizedString $customPurchasePriceLabel)
  {
    $this->customPurchasePriceLabel = $customPurchasePriceLabel;
  }
  public function getCustomPurchasePriceLabel()
  {
    return $this->customPurchasePriceLabel;
  }
  public function setCustomPurchaseReceiptNumberLabel(Google_Service_Walletobjects_LocalizedString $customPurchaseReceiptNumberLabel)
  {
    $this->customPurchaseReceiptNumberLabel = $customPurchaseReceiptNumberLabel;
  }
  public function getCustomPurchaseReceiptNumberLabel()
  {
    return $this->customPurchaseReceiptNumberLabel;
  }
  public function setCustomRouteRestrictionsDetailsLabel(Google_Service_Walletobjects_LocalizedString $customRouteRestrictionsDetailsLabel)
  {
    $this->customRouteRestrictionsDetailsLabel = $customRouteRestrictionsDetailsLabel;
  }
  public function getCustomRouteRestrictionsDetailsLabel()
  {
    return $this->customRouteRestrictionsDetailsLabel;
  }
  public function setCustomRouteRestrictionsLabel(Google_Service_Walletobjects_LocalizedString $customRouteRestrictionsLabel)
  {
    $this->customRouteRestrictionsLabel = $customRouteRestrictionsLabel;
  }
  public function getCustomRouteRestrictionsLabel()
  {
    return $this->customRouteRestrictionsLabel;
  }
  public function setCustomSeatLabel(Google_Service_Walletobjects_LocalizedString $customSeatLabel)
  {
    $this->customSeatLabel = $customSeatLabel;
  }
  public function getCustomSeatLabel()
  {
    return $this->customSeatLabel;
  }
  public function setCustomTicketNumberLabel(Google_Service_Walletobjects_LocalizedString $customTicketNumberLabel)
  {
    $this->customTicketNumberLabel = $customTicketNumberLabel;
  }
  public function getCustomTicketNumberLabel()
  {
    return $this->customTicketNumberLabel;
  }
  public function setCustomTimeRestrictionsLabel(Google_Service_Walletobjects_LocalizedString $customTimeRestrictionsLabel)
  {
    $this->customTimeRestrictionsLabel = $customTimeRestrictionsLabel;
  }
  public function getCustomTimeRestrictionsLabel()
  {
    return $this->customTimeRestrictionsLabel;
  }
  public function setCustomTransitTerminusNameLabel(Google_Service_Walletobjects_LocalizedString $customTransitTerminusNameLabel)
  {
    $this->customTransitTerminusNameLabel = $customTransitTerminusNameLabel;
  }
  public function getCustomTransitTerminusNameLabel()
  {
    return $this->customTransitTerminusNameLabel;
  }
  public function setCustomValidityEndDateLabel(Google_Service_Walletobjects_LocalizedString $customValidityEndDateLabel)
  {
    $this->customValidityEndDateLabel = $customValidityEndDateLabel;
  }
  public function getCustomValidityEndDateLabel()
  {
    return $this->customValidityEndDateLabel;
  }
  public function setCustomValidityStartDateLabel(Google_Service_Walletobjects_LocalizedString $customValidityStartDateLabel)
  {
    $this->customValidityStartDateLabel = $customValidityStartDateLabel;
  }
  public function getCustomValidityStartDateLabel()
  {
    return $this->customValidityStartDateLabel;
  }
  public function setCustomZoneLabel(Google_Service_Walletobjects_LocalizedString $customZoneLabel)
  {
    $this->customZoneLabel = $customZoneLabel;
  }
  public function getCustomZoneLabel()
  {
    return $this->customZoneLabel;
  }
  public function setEnableSmartTap($enableSmartTap)
  {
    $this->enableSmartTap = $enableSmartTap;
  }
  public function getEnableSmartTap()
  {
    return $this->enableSmartTap;
  }
  public function setHeroImage(Google_Service_Walletobjects_Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setHomepageUri(Google_Service_Walletobjects_Uri $homepageUri)
  {
    $this->homepageUri = $homepageUri;
  }
  public function getHomepageUri()
  {
    return $this->homepageUri;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setIssuerName($issuerName)
  {
    $this->issuerName = $issuerName;
  }
  public function getIssuerName()
  {
    return $this->issuerName;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocaleOverride($localeOverride)
  {
    $this->localeOverride = $localeOverride;
  }
  public function getLocaleOverride()
  {
    return $this->localeOverride;
  }
  public function setLocalizedIssuerName(Google_Service_Walletobjects_LocalizedString $localizedIssuerName)
  {
    $this->localizedIssuerName = $localizedIssuerName;
  }
  public function getLocalizedIssuerName()
  {
    return $this->localizedIssuerName;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setLogo(Google_Service_Walletobjects_Image $logo)
  {
    $this->logo = $logo;
  }
  public function getLogo()
  {
    return $this->logo;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
  {
    $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
  }
  public function getMultipleDevicesAndHoldersAllowedStatus()
  {
    return $this->multipleDevicesAndHoldersAllowedStatus;
  }
  public function setRedemptionIssuers($redemptionIssuers)
  {
    $this->redemptionIssuers = $redemptionIssuers;
  }
  public function getRedemptionIssuers()
  {
    return $this->redemptionIssuers;
  }
  public function setReview(Google_Service_Walletobjects_CommonWalletObjectClassReview $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setTransitOperatorName(Google_Service_Walletobjects_LocalizedString $transitOperatorName)
  {
    $this->transitOperatorName = $transitOperatorName;
  }
  public function getTransitOperatorName()
  {
    return $this->transitOperatorName;
  }
  public function setTransitTerminusName(Google_Service_Walletobjects_LocalizedString $transitTerminusName)
  {
    $this->transitTerminusName = $transitTerminusName;
  }
  public function getTransitTerminusName()
  {
    return $this->transitTerminusName;
  }
  public function setTransitType($transitType)
  {
    $this->transitType = $transitType;
  }
  public function getTransitType()
  {
    return $this->transitType;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWatermark(Google_Service_Walletobjects_Image $watermark)
  {
    $this->watermark = $watermark;
  }
  public function getWatermark()
  {
    return $this->watermark;
  }
  public function setWordMark(Google_Service_Walletobjects_Image $wordMark)
  {
    $this->wordMark = $wordMark;
  }
  public function getWordMark()
  {
    return $this->wordMark;
  }
}

class Google_Service_Walletobjects_TransitClassAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';
  public $reviewStatus;


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

class Google_Service_Walletobjects_TransitClassAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_TransitClass';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_TransitClass $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_TransitClassGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_TransitClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_TransitClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_TransitClassListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_TransitClassMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_TransitClassMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_TransitClassListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_TransitClass';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_TransitClassMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_TransitObject extends Google_Collection
{
  protected $collection_key = 'ticketLegs';
  protected $internal_gapi_mappings = array(
  );
  protected $barcodeType = 'Google_Service_Walletobjects_Barcode';
  protected $barcodeDataType = '';
  public $classId;
  protected $classReferenceType = 'Google_Service_Walletobjects_TransitClass';
  protected $classReferenceDataType = '';
  public $concessionCategory;
  protected $customConcessionCategoryType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customConcessionCategoryDataType = '';
  protected $customTicketStatusType = 'Google_Service_Walletobjects_LocalizedString';
  protected $customTicketStatusDataType = '';
  public $disableExpirationNotification;
  public $hasLinkedDevice;
  public $hasUsers;
  public $hexBackgroundColor;
  public $id;
  protected $imageModulesDataType = 'Google_Service_Walletobjects_ImageModuleData';
  protected $imageModulesDataDataType = 'array';
  protected $infoModuleDataType = 'Google_Service_Walletobjects_InfoModuleData';
  protected $infoModuleDataDataType = '';
  protected $linksModuleDataType = 'Google_Service_Walletobjects_LinksModuleData';
  protected $linksModuleDataDataType = '';
  protected $locationsType = 'Google_Service_Walletobjects_LatLongPoint';
  protected $locationsDataType = 'array';
  protected $messagesType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messagesDataType = 'array';
  public $passengerNames;
  public $passengerType;
  protected $purchaseDetailsType = 'Google_Service_Walletobjects_PurchaseDetails';
  protected $purchaseDetailsDataType = '';
  public $smartTapRedemptionValue;
  public $state;
  protected $textModulesDataType = 'Google_Service_Walletobjects_TextModuleData';
  protected $textModulesDataDataType = 'array';
  protected $ticketLegsType = 'Google_Service_Walletobjects_TicketLeg';
  protected $ticketLegsDataType = 'array';
  public $ticketNumber;
  protected $ticketRestrictionsType = 'Google_Service_Walletobjects_TicketRestrictions';
  protected $ticketRestrictionsDataType = '';
  public $ticketStatus;
  public $tripId;
  protected $validTimeIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $validTimeIntervalDataType = '';
  public $version;


  public function setBarcode(Google_Service_Walletobjects_Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  public function getBarcode()
  {
    return $this->barcode;
  }
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  public function getClassId()
  {
    return $this->classId;
  }
  public function setClassReference(Google_Service_Walletobjects_TransitClass $classReference)
  {
    $this->classReference = $classReference;
  }
  public function getClassReference()
  {
    return $this->classReference;
  }
  public function setConcessionCategory($concessionCategory)
  {
    $this->concessionCategory = $concessionCategory;
  }
  public function getConcessionCategory()
  {
    return $this->concessionCategory;
  }
  public function setCustomConcessionCategory(Google_Service_Walletobjects_LocalizedString $customConcessionCategory)
  {
    $this->customConcessionCategory = $customConcessionCategory;
  }
  public function getCustomConcessionCategory()
  {
    return $this->customConcessionCategory;
  }
  public function setCustomTicketStatus(Google_Service_Walletobjects_LocalizedString $customTicketStatus)
  {
    $this->customTicketStatus = $customTicketStatus;
  }
  public function getCustomTicketStatus()
  {
    return $this->customTicketStatus;
  }
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  public function setHexBackgroundColor($hexBackgroundColor)
  {
    $this->hexBackgroundColor = $hexBackgroundColor;
  }
  public function getHexBackgroundColor()
  {
    return $this->hexBackgroundColor;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  public function setInfoModuleData(Google_Service_Walletobjects_InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  public function setLinksModuleData(Google_Service_Walletobjects_LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  public function getMessages()
  {
    return $this->messages;
  }
  public function setPassengerNames($passengerNames)
  {
    $this->passengerNames = $passengerNames;
  }
  public function getPassengerNames()
  {
    return $this->passengerNames;
  }
  public function setPassengerType($passengerType)
  {
    $this->passengerType = $passengerType;
  }
  public function getPassengerType()
  {
    return $this->passengerType;
  }
  public function setPurchaseDetails(Google_Service_Walletobjects_PurchaseDetails $purchaseDetails)
  {
    $this->purchaseDetails = $purchaseDetails;
  }
  public function getPurchaseDetails()
  {
    return $this->purchaseDetails;
  }
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  public function setTicketLegs($ticketLegs)
  {
    $this->ticketLegs = $ticketLegs;
  }
  public function getTicketLegs()
  {
    return $this->ticketLegs;
  }
  public function setTicketNumber($ticketNumber)
  {
    $this->ticketNumber = $ticketNumber;
  }
  public function getTicketNumber()
  {
    return $this->ticketNumber;
  }
  public function setTicketRestrictions(Google_Service_Walletobjects_TicketRestrictions $ticketRestrictions)
  {
    $this->ticketRestrictions = $ticketRestrictions;
  }
  public function getTicketRestrictions()
  {
    return $this->ticketRestrictions;
  }
  public function setTicketStatus($ticketStatus)
  {
    $this->ticketStatus = $ticketStatus;
  }
  public function getTicketStatus()
  {
    return $this->ticketStatus;
  }
  public function setTripId($tripId)
  {
    $this->tripId = $tripId;
  }
  public function getTripId()
  {
    return $this->tripId;
  }
  public function setValidTimeInterval(Google_Service_Walletobjects_TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
}

class Google_Service_Walletobjects_TransitObjectAddMessageRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $messageType = 'Google_Service_Walletobjects_WalletObjectMessage';
  protected $messageDataType = '';


  public function setMessage(Google_Service_Walletobjects_WalletObjectMessage $message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Google_Service_Walletobjects_TransitObjectAddMessageResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resourceType = 'Google_Service_Walletobjects_TransitObject';
  protected $resourceDataType = '';


  public function setResource(Google_Service_Walletobjects_TransitObject $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
}

class Google_Service_Walletobjects_TransitObjectGetRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_TransitObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_TransitObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_TransitObjectListRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $resultMaskType = 'Google_Service_Walletobjects_TransitObjectMask';
  protected $resultMaskDataType = '';


  public function setResultMask(Google_Service_Walletobjects_TransitObjectMask $resultMask)
  {
    $this->resultMask = $resultMask;
  }
  public function getResultMask()
  {
    return $this->resultMask;
  }
}

class Google_Service_Walletobjects_TransitObjectListResponse extends Google_Collection
{
  protected $collection_key = 'resources';
  protected $internal_gapi_mappings = array(
  );
  protected $paginationType = 'Google_Service_Walletobjects_Pagination';
  protected $paginationDataType = '';
  protected $resourcesType = 'Google_Service_Walletobjects_TransitObject';
  protected $resourcesDataType = 'array';


  public function setPagination(Google_Service_Walletobjects_Pagination $pagination)
  {
    $this->pagination = $pagination;
  }
  public function getPagination()
  {
    return $this->pagination;
  }
  public function setResources($resources)
  {
    $this->resources = $resources;
  }
  public function getResources()
  {
    return $this->resources;
  }
}

class Google_Service_Walletobjects_TransitObjectMask extends Google_Collection
{
  protected $collection_key = 'fields';
  protected $internal_gapi_mappings = array(
  );
  protected $fieldsType = 'Google_Service_Walletobjects_FieldMask';
  protected $fieldsDataType = 'array';
  public $projection;


  public function setFields($fields)
  {
    $this->fields = $fields;
  }
  public function getFields()
  {
    return $this->fields;
  }
  public function setProjection($projection)
  {
    $this->projection = $projection;
  }
  public function getProjection()
  {
    return $this->projection;
  }
}

class Google_Service_Walletobjects_TranslatedString extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $language;
  public $value;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  public function getLanguage()
  {
    return $this->language;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_Walletobjects_Uri extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;
  public $kind;
  protected $localizedDescriptionType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedDescriptionDataType = '';
  public $uri;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocalizedDescription(Google_Service_Walletobjects_LocalizedString $localizedDescription)
  {
    $this->localizedDescription = $localizedDescription;
  }
  public function getLocalizedDescription()
  {
    return $this->localizedDescription;
  }
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  public function getUri()
  {
    return $this->uri;
  }
}

class Google_Service_Walletobjects_WalletObjectMessage extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $body;
  protected $displayIntervalType = 'Google_Service_Walletobjects_TimeInterval';
  protected $displayIntervalDataType = '';
  public $header;
  public $id;
  public $kind;
  protected $localizedBodyType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedBodyDataType = '';
  protected $localizedHeaderType = 'Google_Service_Walletobjects_LocalizedString';
  protected $localizedHeaderDataType = '';
  public $messageType;


  public function setBody($body)
  {
    $this->body = $body;
  }
  public function getBody()
  {
    return $this->body;
  }
  public function setDisplayInterval(Google_Service_Walletobjects_TimeInterval $displayInterval)
  {
    $this->displayInterval = $displayInterval;
  }
  public function getDisplayInterval()
  {
    return $this->displayInterval;
  }
  public function setHeader($header)
  {
    $this->header = $header;
  }
  public function getHeader()
  {
    return $this->header;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocalizedBody(Google_Service_Walletobjects_LocalizedString $localizedBody)
  {
    $this->localizedBody = $localizedBody;
  }
  public function getLocalizedBody()
  {
    return $this->localizedBody;
  }
  public function setLocalizedHeader(Google_Service_Walletobjects_LocalizedString $localizedHeader)
  {
    $this->localizedHeader = $localizedHeader;
  }
  public function getLocalizedHeader()
  {
    return $this->localizedHeader;
  }
  public function setMessageType($messageType)
  {
    $this->messageType = $messageType;
  }
  public function getMessageType()
  {
    return $this->messageType;
  }
}

class Google_Service_Walletobjects_WalletObjectModifyLinkedOfferObjects extends Google_Collection
{
  protected $collection_key = 'removeLinkedOfferObjectIds';
  protected $internal_gapi_mappings = array(
  );
  public $addLinkedOfferObjectIds;
  public $kind;
  public $removeLinkedOfferObjectIds;


  public function setAddLinkedOfferObjectIds($addLinkedOfferObjectIds)
  {
    $this->addLinkedOfferObjectIds = $addLinkedOfferObjectIds;
  }
  public function getAddLinkedOfferObjectIds()
  {
    return $this->addLinkedOfferObjectIds;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRemoveLinkedOfferObjectIds($removeLinkedOfferObjectIds)
  {
    $this->removeLinkedOfferObjectIds = $removeLinkedOfferObjectIds;
  }
  public function getRemoveLinkedOfferObjectIds()
  {
    return $this->removeLinkedOfferObjectIds;
  }
}
