<?php
/*
 * Copyright 2010 Google Inc.
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
 * Service definition for MyBusiness (v3).
 *
 * <p>
 * The Google My Business API provides an interface for managing business
 * location information on Google.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/my-business/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_MyBusiness extends Google_Service
{


  public $accounts;
  public $accounts_admins;
  public $accounts_locations;
  public $accounts_locations_admins;
  public $accounts_locations_reviews;
  public $attributes;
  public $categories;
  

  /**
   * Constructs the internal representation of the MyBusiness service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://mybusiness.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v3';
    $this->serviceName = 'mybusiness';

    $this->accounts = new Google_Service_MyBusiness_Accounts_Resource(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'deleteNotifications' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getNotifications' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v3/accounts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'update' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'validateOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'updateNotifications' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_admins = new Google_Service_MyBusiness_AccountsAdmins_Resource(
        $this,
        $this->serviceName,
        'admins',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v3/{+name}/admins',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v3/{+name}/admins',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations = new Google_Service_MyBusiness_AccountsLocations_Resource(
        $this,
        $this->serviceName,
        'locations',
        array(
          'methods' => array(
            'associate' => array(
              'path' => 'v3/{+name}:associate',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchGet' => array(
              'path' => 'v3/{+name}/locations:batchGet',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'clearAssociation' => array(
              'path' => 'v3/{+name}:clearAssociation',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'create' => array(
              'path' => 'v3/{+name}/locations',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'validateOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'delete' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'findMatches' => array(
              'path' => 'v3/{+name}:findMatches',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getGoogleUpdated' => array(
              'path' => 'v3/{+name}:googleUpdated',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v3/{+name}/locations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'validateOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'fieldMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reportInsights' => array(
              'path' => 'v3/{+name}/locations:reportInsights',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'transfer' => array(
              'path' => 'v3/{+name}:transfer',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_admins = new Google_Service_MyBusiness_AccountsLocationsAdmins_Resource(
        $this,
        $this->serviceName,
        'admins',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v3/{+name}/admins',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v3/{+name}/admins',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_reviews = new Google_Service_MyBusiness_AccountsLocationsReviews_Resource(
        $this,
        $this->serviceName,
        'reviews',
        array(
          'methods' => array(
            'deleteReply' => array(
              'path' => 'v3/{+name}/reply',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v3/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v3/{+name}/reviews',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'reply' => array(
              'path' => 'v3/{+name}/reply',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->attributes = new Google_Service_MyBusiness_Attributes_Resource(
        $this,
        $this->serviceName,
        'attributes',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v3/attributes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'country' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'categoryId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->categories = new Google_Service_MyBusiness_Categories_Resource(
        $this,
        $this->serviceName,
        'categories',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v3/categories',
              'httpMethod' => 'GET',
              'parameters' => array(
                'searchTerm' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'regionCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $accounts = $mybusinessService->accounts;
 *  </code>
 */
class Google_Service_MyBusiness_Accounts_Resource extends Google_Service_Resource
{

  /**
   * Clears the pubsub notification settings for the account.
   *
   * Available since v3.1. (accounts.deleteNotifications)
   *
   * @param string $name The resource name for the notification settings to be
   * cleared.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function deleteNotifications($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('deleteNotifications', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Gets the specified account. Returns `NOT_FOUND` if the account does not exist
   * or if the caller does not have access rights to it. (accounts.get)
   *
   * @param string $name The name of the account to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Account
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Returns the pubsub notification settings for the account.
   *
   * Available since v3.1. (accounts.getNotifications)
   *
   * @param string $name The notification settings resource name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Notifications
   */
  public function getNotifications($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getNotifications', array($params), "Google_Service_MyBusiness_Notifications");
  }

  /**
   * Lists all of the accounts for the authenticated user. This includes all
   * accounts that the user owns, as well as any accounts for which the user has
   * management rights. (accounts.listAccounts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken If specified, the next page of accounts is
   * retrieved. The `pageToken` is returned when a call to `accounts.list` returns
   * more results than can fit into the requested page size.
   * @opt_param int pageSize How many accounts to fetch per page. Default is 50,
   * minimum is 1, and maximum page size is 50.
   * @return Google_Service_MyBusiness_ListAccountsResponse
   */
  public function listAccounts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAccountsResponse");
  }

  /**
   * Updates the specified business account. Personal accounts cannot be updated
   * using this method. Note: At this time the only editable field for an account
   * is `account_name`. Any other fields passed in (such as `type` or `role`) are
   * ignored. (accounts.update)
   *
   * @param string $name The name of the account to update.
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language of the account update.
   * @opt_param bool validateOnly If true, the request is validated without
   * actually updating the account.
   * @return Google_Service_MyBusiness_Account
   */
  public function update($name, Google_Service_MyBusiness_Account $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Sets the pubsub notification settings for the account informing MyBusiness
   * which topic to send pubsub notifications for:
   *
   * - New reviews for locations administered by the account. - New
   * `GoogleUpdates` for locations administered by the account.
   *
   * An account will only have one notification settings resource and only one
   * pubsub topic may be set.
   *
   * Available since v3.1. (accounts.updateNotifications)
   *
   * @param string $name The notification settings resource name.
   * @param Google_Notifications $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Notifications
   */
  public function updateNotifications($name, Google_Service_MyBusiness_Notifications $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateNotifications', array($params), "Google_Service_MyBusiness_Notifications");
  }
}

/**
 * The "admins" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $admins = $mybusinessService->admins;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsAdmins_Resource extends Google_Service_Resource
{

  /**
   * Invites the specified user to become an administrator for the specified
   * account. The invitee must accept the invitation in order to be granted access
   * to the account. (admins.create)
   *
   * @param string $name The resource name. For account admins, this is in the
   * form: `accounts/{account_id}/admins/{admin_id}`
   *
   * For location admins, this is in the form:
   * `accounts/{account_id}/locations/{location_id}/admins/{admin_id}`
   * @param Google_Admin $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Admin
   */
  public function create($name, Google_Service_MyBusiness_Admin $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Admin");
  }

  /**
   * Removes the specified admin from the specified account. (admins.delete)
   *
   * @param string $name The resource name of the admin to remove from the
   * account.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Lists the admins for the specified account. (admins.listAccountsAdmins)
   *
   * @param string $name The name of the account from which to retrieve a list of
   * admins.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ListAccountAdminsResponse
   */
  public function listAccountsAdmins($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAccountAdminsResponse");
  }
}
/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $locations = $mybusinessService->locations;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocations_Resource extends Google_Service_Resource
{

  /**
   * Associates a location to a place ID. Any previous association is overwritten.
   * This operation is only valid if the location is unverified. The association
   * must be valid, that is, it appears in the list of `FindMatchingLocations`.
   * (locations.associate)
   *
   * @param string $name The resource name of the location to associate.
   * @param Google_AssociateLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function associate($name, Google_Service_MyBusiness_AssociateLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('associate', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Gets all of the specified locations in the given account.
   * (locations.batchGet)
   *
   * @param string $name The name of the account from which to fetch locations.
   * @param Google_BatchGetLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_BatchGetLocationsResponse
   */
  public function batchGet($name, Google_Service_MyBusiness_BatchGetLocationsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', array($params), "Google_Service_MyBusiness_BatchGetLocationsResponse");
  }

  /**
   * Clears an association between a location and its place ID. This operation is
   * only valid if the location is unverified. (locations.clearAssociation)
   *
   * @param string $name The resource name of the location to disassociate.
   * @param Google_ClearLocationAssociationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function clearAssociation($name, Google_Service_MyBusiness_ClearLocationAssociationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('clearAssociation', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Creates a new location owned by the specified account, and returns it.
   * (locations.create)
   *
   * @param string $name The name of the account in which to create this location.
   * @param Google_Location $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language of the location.
   * @opt_param bool validateOnly If true, the request is validated without
   * actually creating the location.
   * @opt_param string requestId A unique request ID for the server to detect
   * duplicated requests. UUIDs are recommended. Max length is 50 characters.
   * @return Google_Service_MyBusiness_Location
   */
  public function create($name, Google_Service_MyBusiness_Location $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Deletes a location.
   *
   * Note: If this location has an associated Google+ page, as indicated by a
   * `plus_page_id` in the LocationKey, it cannot be deleted using the API;
   * instead, use the [Google My Business](https://business.google.com/manage/)
   * website.
   *
   * Returns `NOT_FOUND` if the location does not exist. (locations.delete)
   *
   * @param string $name The name of the location to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Finds all of the possible locations that are a match to the specified
   * location. This operation is only valid if the location is unverified.
   * (locations.findMatches)
   *
   * @param string $name The resource name of the location to find matches for.
   * @param Google_FindMatchingLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_FindMatchingLocationsResponse
   */
  public function findMatches($name, Google_Service_MyBusiness_FindMatchingLocationsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('findMatches', array($params), "Google_Service_MyBusiness_FindMatchingLocationsResponse");
  }

  /**
   * Gets the specified location. Returns `NOT_FOUND` if the location does not
   * exist. (locations.get)
   *
   * @param string $name The name of the location to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Location
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Gets the Google-updated version of the specified location. Returns
   * `NOT_FOUND` if the location does not exist. (locations.getGoogleUpdated)
   *
   * @param string $name The name of the location to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_GoogleUpdatedLocation
   */
  public function getGoogleUpdated($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getGoogleUpdated', array($params), "Google_Service_MyBusiness_GoogleUpdatedLocation");
  }

  /**
   * Lists the locations for the specified account.
   * (locations.listAccountsLocations)
   *
   * @param string $name The name of the account to fetch locations from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter A filter constraining the locations to return. The
   * response includes only entries that match the filter. If `filter` is empty,
   * then constraints are applied and all locations (paginated) are retrieved for
   * the requested account.
   *
   * For more information about valid fields and example usage, see [Work with
   * Location Data Guide](https://developers.google.com/my-business/content
   * /location-data#filter_results_when_listing_locations)
   * @opt_param string pageToken If specified, it fetches the next `page` of
   * locations. The page token is returned by previous calls to ListLocations when
   * there were more locations than could fit in the requested page size.
   * @opt_param int pageSize How many locations to fetch per page. Default is 100,
   * minimum is 1, and maximum page size is 100.
   * @return Google_Service_MyBusiness_ListLocationsResponse
   */
  public function listAccountsLocations($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListLocationsResponse");
  }

  /**
   * Updates the specified location.
   *
   * Photos are only allowed on a location that has a Google+ page.
   *
   * Returns `NOT_FOUND` if the location does not exist. (locations.patch)
   *
   * @param string $name The name of the location to update.
   * @param Google_Location $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language of the location update. Currently
   * this is used to disambiguate what localized categories are valid for this
   * update request.
   * @opt_param bool validateOnly If true, the request is validated without
   * actually updating the location.
   * @opt_param string fieldMask The specific fields to update. If no mask is
   * specified, then this is treated as a full update and all fields are set to
   * the values passed in, which may include unsetting empty fields in the
   * request.
   * @return Google_Service_MyBusiness_Location
   */
  public function patch($name, Google_Service_MyBusiness_Location $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Returns a report containing insights on one or more metrics by location.
   *
   * Note: Insight reports are limited to a batch size of 10 `location_names` per
   * call.
   *
   * Available since v3.2. (locations.reportInsights)
   *
   * @param string $name The account resource name.
   * @param Google_ReportLocationInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ReportLocationInsightsResponse
   */
  public function reportInsights($name, Google_Service_MyBusiness_ReportLocationInsightsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportInsights', array($params), "Google_Service_MyBusiness_ReportLocationInsightsResponse");
  }

  /**
   * Transfer a location from one account to another. To perform a transfer, a
   * user must be an owner of the account the location is currently associated
   * with and at least a manager of the destination account. Returns the Location
   * with its new resource name. (locations.transfer)
   *
   * @param string $name The name of the location to transfer.
   * @param Google_TransferLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Location
   */
  public function transfer($name, Google_Service_MyBusiness_TransferLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('transfer', array($params), "Google_Service_MyBusiness_Location");
  }
}

/**
 * The "admins" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $admins = $mybusinessService->admins;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsAdmins_Resource extends Google_Service_Resource
{

  /**
   * Invites the specified user to become an administrator for the specified
   * location. The invitee must accept the invitation in order to be granted
   * access to the location. (admins.create)
   *
   * @param string $name The resource name. For account admins, this is in the
   * form: `accounts/{account_id}/admins/{admin_id}`
   *
   * For location admins, this is in the form:
   * `accounts/{account_id}/locations/{location_id}/admins/{admin_id}`
   * @param Google_Admin $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Admin
   */
  public function create($name, Google_Service_MyBusiness_Admin $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Admin");
  }

  /**
   * Removes the specified admin as a manager of the specified location.
   * (admins.delete)
   *
   * @param string $name The resource name of the admin to remove from the
   * location.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Lists all of the admins for the specified location.
   * (admins.listAccountsLocationsAdmins)
   *
   * @param string $name The name of the location to list admins of.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ListLocationAdminsResponse
   */
  public function listAccountsLocationsAdmins($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListLocationAdminsResponse");
  }
}
/**
 * The "reviews" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $reviews = $mybusinessService->reviews;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsReviews_Resource extends Google_Service_Resource
{

  /**
   * Deletes the response to the specified review. This operation is only valid if
   * the specified location is verified. (reviews.deleteReply)
   *
   * @param string $name The name of the review reply to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function deleteReply($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('deleteReply', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Returns the specified review. This operation is only valid if the specified
   * location is verified. Returns `NOT_FOUND` if the review does not exist, or
   * has been deleted. (reviews.get)
   *
   * @param string $name The name of the review to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Review
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_Review");
  }

  /**
   * Returns the paginated list of reviews for the specified location. This
   * operation is only valid if the specified location is verified.
   * (reviews.listAccountsLocationsReviews)
   *
   * @param string $name The name of the location to fetch reviews for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy Specifies the field to sort reviews by. If
   * unspecified, the order of reviews returned will default to "update_timedesc".
   * Valid orders to sort by are `rating` and `ratingdesc` and `update_timedesc`.
   * @opt_param string pageToken If specified, it fetches the next ‘page’ of
   * reviews.
   * @opt_param int pageSize How many reviews to fetch per page. The maximum
   * page_size is 200.
   * @return Google_Service_MyBusiness_ListReviewsResponse
   */
  public function listAccountsLocationsReviews($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListReviewsResponse");
  }

  /**
   * Updates the reply to the specified review. A reply is created if one does not
   * exist. This operation is only valid if the specified location is verified.
   * (reviews.reply)
   *
   * @param string $name The name of the review to respond to.
   * @param Google_ReviewReply $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ReviewReply
   */
  public function reply($name, Google_Service_MyBusiness_ReviewReply $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reply', array($params), "Google_Service_MyBusiness_ReviewReply");
  }
}

/**
 * The "attributes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $attributes = $mybusinessService->attributes;
 *  </code>
 */
class Google_Service_MyBusiness_Attributes_Resource extends Google_Service_Resource
{

  /**
   * Returns the list of available attributes that would be available for a
   * location with the given primary category and country.
   * (attributes.listAttributes)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The BCP 47 code of language to get attribute
   * display names in. If this language is not available, they will be provided in
   * English.
   * @opt_param string name Resource name of the location to lookup available
   * attributes.
   * @opt_param int pageSize How many attributes to include per page. Default is
   * 200, minimum is 1.
   * @opt_param string country The ISO 3166-1 alpha-2 country code to find
   * available attributes.
   * @opt_param string pageToken If specified, the next page of attribute metadata
   * is retrieved. The `pageToken` is returned when a call to `attributes.list`
   * returns more results than can fit into the requested page size.
   * @opt_param string categoryId The primary category stable ID to find available
   * attributes.
   * @return Google_Service_MyBusiness_ListLocationAttributeMetadataResponse
   */
  public function listAttributes($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListLocationAttributeMetadataResponse");
  }
}

/**
 * The "categories" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $categories = $mybusinessService->categories;
 *  </code>
 */
class Google_Service_MyBusiness_Categories_Resource extends Google_Service_Resource
{

  /**
   * Returns a list of business categories. Search will match the category name
   * but not the category ID.
   *
   * Note: Currently search only matches the front of a category name (that is,
   * 'food' may return 'Food Court' but not 'Fast Food Restaurant').
   * (categories.listCategories)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string searchTerm Optional filter string from user.
   * @opt_param string regionCode The ISO 3166-1 alpha-2 country code.
   * @opt_param string pageToken If specified, the next page of categories will be
   * fetched.
   * @opt_param int pageSize How many categories to fetch per page. Default is
   * 100, minimum is 1, and maximum page size is 100.
   * @opt_param string languageCode The BCP 47 code of language. If the language
   * is not available, it will default to English.
   * @return Google_Service_MyBusiness_ListBusinessCategoriesResponse
   */
  public function listCategories($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListBusinessCategoriesResponse");
  }
}




class Google_Service_MyBusiness_Account extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $accountName;
  public $name;
  public $role;
  protected $stateType = 'Google_Service_MyBusiness_AccountState';
  protected $stateDataType = '';
  public $type;


  public function setAccountName($accountName)
  {
    $this->accountName = $accountName;
  }
  public function getAccountName()
  {
    return $this->accountName;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
  public function setState(Google_Service_MyBusiness_AccountState $state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_MyBusiness_AccountState extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $status;


  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_MyBusiness_AdWordsLocationExtensions extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $adPhone;


  public function setAdPhone($adPhone)
  {
    $this->adPhone = $adPhone;
  }
  public function getAdPhone()
  {
    return $this->adPhone;
  }
}

class Google_Service_MyBusiness_Address extends Google_Collection
{
  protected $collection_key = 'addressLines';
  protected $internal_gapi_mappings = array(
  );
  public $addressLines;
  public $administrativeArea;
  public $country;
  public $locality;
  public $postalCode;
  public $subLocality;


  public function setAddressLines($addressLines)
  {
    $this->addressLines = $addressLines;
  }
  public function getAddressLines()
  {
    return $this->addressLines;
  }
  public function setAdministrativeArea($administrativeArea)
  {
    $this->administrativeArea = $administrativeArea;
  }
  public function getAdministrativeArea()
  {
    return $this->administrativeArea;
  }
  public function setCountry($country)
  {
    $this->country = $country;
  }
  public function getCountry()
  {
    return $this->country;
  }
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  public function getLocality()
  {
    return $this->locality;
  }
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  public function setSubLocality($subLocality)
  {
    $this->subLocality = $subLocality;
  }
  public function getSubLocality()
  {
    return $this->subLocality;
  }
}

class Google_Service_MyBusiness_Admin extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $adminName;
  public $name;
  public $pendingInvitation;
  public $role;


  public function setAdminName($adminName)
  {
    $this->adminName = $adminName;
  }
  public function getAdminName()
  {
    return $this->adminName;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPendingInvitation($pendingInvitation)
  {
    $this->pendingInvitation = $pendingInvitation;
  }
  public function getPendingInvitation()
  {
    return $this->pendingInvitation;
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

class Google_Service_MyBusiness_AssociateLocationRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $placeId;


  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  public function getPlaceId()
  {
    return $this->placeId;
  }
}

class Google_Service_MyBusiness_Attribute extends Google_Collection
{
  protected $collection_key = 'values';
  protected $internal_gapi_mappings = array(
  );
  public $attributeId;
  protected $repeatedEnumValueType = 'Google_Service_MyBusiness_RepeatedEnumAttributeValue';
  protected $repeatedEnumValueDataType = '';
  protected $urlValuesType = 'Google_Service_MyBusiness_UrlAttributeValue';
  protected $urlValuesDataType = 'array';
  public $valueType;
  public $values;


  public function setAttributeId($attributeId)
  {
    $this->attributeId = $attributeId;
  }
  public function getAttributeId()
  {
    return $this->attributeId;
  }
  public function setRepeatedEnumValue(Google_Service_MyBusiness_RepeatedEnumAttributeValue $repeatedEnumValue)
  {
    $this->repeatedEnumValue = $repeatedEnumValue;
  }
  public function getRepeatedEnumValue()
  {
    return $this->repeatedEnumValue;
  }
  public function setUrlValues($urlValues)
  {
    $this->urlValues = $urlValues;
  }
  public function getUrlValues()
  {
    return $this->urlValues;
  }
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  public function getValueType()
  {
    return $this->valueType;
  }
  public function setValues($values)
  {
    $this->values = $values;
  }
  public function getValues()
  {
    return $this->values;
  }
}

class Google_Service_MyBusiness_AttributeMetadata extends Google_Collection
{
  protected $collection_key = 'valueMetadata';
  protected $internal_gapi_mappings = array(
  );
  public $attributeId;
  public $displayName;
  public $groupDisplayName;
  public $isDeprecated;
  public $isRepeatable;
  protected $valueMetadataType = 'Google_Service_MyBusiness_AttributeValueMetadata';
  protected $valueMetadataDataType = 'array';
  public $valueType;


  public function setAttributeId($attributeId)
  {
    $this->attributeId = $attributeId;
  }
  public function getAttributeId()
  {
    return $this->attributeId;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setGroupDisplayName($groupDisplayName)
  {
    $this->groupDisplayName = $groupDisplayName;
  }
  public function getGroupDisplayName()
  {
    return $this->groupDisplayName;
  }
  public function setIsDeprecated($isDeprecated)
  {
    $this->isDeprecated = $isDeprecated;
  }
  public function getIsDeprecated()
  {
    return $this->isDeprecated;
  }
  public function setIsRepeatable($isRepeatable)
  {
    $this->isRepeatable = $isRepeatable;
  }
  public function getIsRepeatable()
  {
    return $this->isRepeatable;
  }
  public function setValueMetadata($valueMetadata)
  {
    $this->valueMetadata = $valueMetadata;
  }
  public function getValueMetadata()
  {
    return $this->valueMetadata;
  }
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  public function getValueType()
  {
    return $this->valueType;
  }
}

class Google_Service_MyBusiness_AttributeValueMetadata extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $value;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
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

class Google_Service_MyBusiness_BasicMetricsRequest extends Google_Collection
{
  protected $collection_key = 'metricRequests';
  protected $internal_gapi_mappings = array(
  );
  protected $metricRequestsType = 'Google_Service_MyBusiness_MetricRequest';
  protected $metricRequestsDataType = 'array';
  protected $timeRangeType = 'Google_Service_MyBusiness_TimeRange';
  protected $timeRangeDataType = '';


  public function setMetricRequests($metricRequests)
  {
    $this->metricRequests = $metricRequests;
  }
  public function getMetricRequests()
  {
    return $this->metricRequests;
  }
  public function setTimeRange(Google_Service_MyBusiness_TimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class Google_Service_MyBusiness_BatchGetLocationsRequest extends Google_Collection
{
  protected $collection_key = 'locationNames';
  protected $internal_gapi_mappings = array(
  );
  public $locationNames;


  public function setLocationNames($locationNames)
  {
    $this->locationNames = $locationNames;
  }
  public function getLocationNames()
  {
    return $this->locationNames;
  }
}

class Google_Service_MyBusiness_BatchGetLocationsResponse extends Google_Collection
{
  protected $collection_key = 'locations';
  protected $internal_gapi_mappings = array(
  );
  protected $locationsType = 'Google_Service_MyBusiness_Location';
  protected $locationsDataType = 'array';


  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
}

class Google_Service_MyBusiness_BusinessHours extends Google_Collection
{
  protected $collection_key = 'periods';
  protected $internal_gapi_mappings = array(
  );
  protected $periodsType = 'Google_Service_MyBusiness_TimePeriod';
  protected $periodsDataType = 'array';


  public function setPeriods($periods)
  {
    $this->periods = $periods;
  }
  public function getPeriods()
  {
    return $this->periods;
  }
}

class Google_Service_MyBusiness_Category extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $categoryId;
  public $name;


  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  public function getCategoryId()
  {
    return $this->categoryId;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Google_Service_MyBusiness_ClearLocationAssociationRequest extends Google_Model
{
}

class Google_Service_MyBusiness_Date extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $day;
  public $month;
  public $year;


  public function setDay($day)
  {
    $this->day = $day;
  }
  public function getDay()
  {
    return $this->day;
  }
  public function setMonth($month)
  {
    $this->month = $month;
  }
  public function getMonth()
  {
    return $this->month;
  }
  public function setYear($year)
  {
    $this->year = $year;
  }
  public function getYear()
  {
    return $this->year;
  }
}

class Google_Service_MyBusiness_DimensionalMetricValue extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $metricOption;
  protected $timeDimensionType = 'Google_Service_MyBusiness_TimeDimension';
  protected $timeDimensionDataType = '';
  public $value;


  public function setMetricOption($metricOption)
  {
    $this->metricOption = $metricOption;
  }
  public function getMetricOption()
  {
    return $this->metricOption;
  }
  public function setTimeDimension(Google_Service_MyBusiness_TimeDimension $timeDimension)
  {
    $this->timeDimension = $timeDimension;
  }
  public function getTimeDimension()
  {
    return $this->timeDimension;
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

class Google_Service_MyBusiness_DrivingDirectionMetricsRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $languageCode;
  public $numDays;


  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setNumDays($numDays)
  {
    $this->numDays = $numDays;
  }
  public function getNumDays()
  {
    return $this->numDays;
  }
}

class Google_Service_MyBusiness_Duplicate extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $access;
  public $locationName;
  public $ownership;
  public $placeId;


  public function setAccess($access)
  {
    $this->access = $access;
  }
  public function getAccess()
  {
    return $this->access;
  }
  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setOwnership($ownership)
  {
    $this->ownership = $ownership;
  }
  public function getOwnership()
  {
    return $this->ownership;
  }
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  public function getPlaceId()
  {
    return $this->placeId;
  }
}

class Google_Service_MyBusiness_FindMatchingLocationsRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $languageCode;
  public $maxCacheDuration;
  public $numResults;


  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setMaxCacheDuration($maxCacheDuration)
  {
    $this->maxCacheDuration = $maxCacheDuration;
  }
  public function getMaxCacheDuration()
  {
    return $this->maxCacheDuration;
  }
  public function setNumResults($numResults)
  {
    $this->numResults = $numResults;
  }
  public function getNumResults()
  {
    return $this->numResults;
  }
}

class Google_Service_MyBusiness_FindMatchingLocationsResponse extends Google_Collection
{
  protected $collection_key = 'matchedLocations';
  protected $internal_gapi_mappings = array(
  );
  public $matchTime;
  protected $matchedLocationsType = 'Google_Service_MyBusiness_MatchedLocation';
  protected $matchedLocationsDataType = 'array';


  public function setMatchTime($matchTime)
  {
    $this->matchTime = $matchTime;
  }
  public function getMatchTime()
  {
    return $this->matchTime;
  }
  public function setMatchedLocations($matchedLocations)
  {
    $this->matchedLocations = $matchedLocations;
  }
  public function getMatchedLocations()
  {
    return $this->matchedLocations;
  }
}

class Google_Service_MyBusiness_GoogleUpdatedLocation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $diffMask;
  protected $locationType = 'Google_Service_MyBusiness_Location';
  protected $locationDataType = '';


  public function setDiffMask($diffMask)
  {
    $this->diffMask = $diffMask;
  }
  public function getDiffMask()
  {
    return $this->diffMask;
  }
  public function setLocation(Google_Service_MyBusiness_Location $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
}

class Google_Service_MyBusiness_Item extends Google_Collection
{
  protected $collection_key = 'photoUrls';
  protected $internal_gapi_mappings = array(
  );
  public $itemId;
  protected $labelsType = 'Google_Service_MyBusiness_Label';
  protected $labelsDataType = 'array';
  public $photoUrls;
  protected $priceType = 'Google_Service_MyBusiness_Money';
  protected $priceDataType = '';


  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  public function getItemId()
  {
    return $this->itemId;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setPhotoUrls($photoUrls)
  {
    $this->photoUrls = $photoUrls;
  }
  public function getPhotoUrls()
  {
    return $this->photoUrls;
  }
  public function setPrice(Google_Service_MyBusiness_Money $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }
}

class Google_Service_MyBusiness_Label extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;
  public $displayName;
  public $languageCode;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class Google_Service_MyBusiness_LatLng extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $latitude;
  public $longitude;


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

class Google_Service_MyBusiness_ListAccountAdminsResponse extends Google_Collection
{
  protected $collection_key = 'admins';
  protected $internal_gapi_mappings = array(
  );
  protected $adminsType = 'Google_Service_MyBusiness_Admin';
  protected $adminsDataType = 'array';


  public function setAdmins($admins)
  {
    $this->admins = $admins;
  }
  public function getAdmins()
  {
    return $this->admins;
  }
}

class Google_Service_MyBusiness_ListAccountsResponse extends Google_Collection
{
  protected $collection_key = 'accounts';
  protected $internal_gapi_mappings = array(
  );
  protected $accountsType = 'Google_Service_MyBusiness_Account';
  protected $accountsDataType = 'array';
  public $nextPageToken;


  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  public function getAccounts()
  {
    return $this->accounts;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_MyBusiness_ListBusinessCategoriesResponse extends Google_Collection
{
  protected $collection_key = 'categories';
  protected $internal_gapi_mappings = array(
  );
  protected $categoriesType = 'Google_Service_MyBusiness_Category';
  protected $categoriesDataType = 'array';
  public $nextPageToken;
  public $totalCategoryCount;


  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  public function getCategories()
  {
    return $this->categories;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTotalCategoryCount($totalCategoryCount)
  {
    $this->totalCategoryCount = $totalCategoryCount;
  }
  public function getTotalCategoryCount()
  {
    return $this->totalCategoryCount;
  }
}

class Google_Service_MyBusiness_ListLocationAdminsResponse extends Google_Collection
{
  protected $collection_key = 'admins';
  protected $internal_gapi_mappings = array(
  );
  protected $adminsType = 'Google_Service_MyBusiness_Admin';
  protected $adminsDataType = 'array';


  public function setAdmins($admins)
  {
    $this->admins = $admins;
  }
  public function getAdmins()
  {
    return $this->admins;
  }
}

class Google_Service_MyBusiness_ListLocationAttributeMetadataResponse extends Google_Collection
{
  protected $collection_key = 'attributes';
  protected $internal_gapi_mappings = array(
  );
  protected $attributesType = 'Google_Service_MyBusiness_AttributeMetadata';
  protected $attributesDataType = 'array';
  public $nextPageToken;


  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_MyBusiness_ListLocationsResponse extends Google_Collection
{
  protected $collection_key = 'locations';
  protected $internal_gapi_mappings = array(
  );
  protected $locationsType = 'Google_Service_MyBusiness_Location';
  protected $locationsDataType = 'array';
  public $nextPageToken;


  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_MyBusiness_ListReviewsResponse extends Google_Collection
{
  protected $collection_key = 'reviews';
  protected $internal_gapi_mappings = array(
  );
  public $averageRating;
  public $nextPageToken;
  protected $reviewsType = 'Google_Service_MyBusiness_Review';
  protected $reviewsDataType = 'array';
  public $totalReviewCount;


  public function setAverageRating($averageRating)
  {
    $this->averageRating = $averageRating;
  }
  public function getAverageRating()
  {
    return $this->averageRating;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setReviews($reviews)
  {
    $this->reviews = $reviews;
  }
  public function getReviews()
  {
    return $this->reviews;
  }
  public function setTotalReviewCount($totalReviewCount)
  {
    $this->totalReviewCount = $totalReviewCount;
  }
  public function getTotalReviewCount()
  {
    return $this->totalReviewCount;
  }
}

class Google_Service_MyBusiness_Location extends Google_Collection
{
  protected $collection_key = 'priceLists';
  protected $internal_gapi_mappings = array(
  );
  protected $adWordsLocationExtensionsType = 'Google_Service_MyBusiness_AdWordsLocationExtensions';
  protected $adWordsLocationExtensionsDataType = '';
  protected $additionalCategoriesType = 'Google_Service_MyBusiness_Category';
  protected $additionalCategoriesDataType = 'array';
  public $additionalPhones;
  protected $addressType = 'Google_Service_MyBusiness_Address';
  protected $addressDataType = '';
  protected $attributesType = 'Google_Service_MyBusiness_Attribute';
  protected $attributesDataType = 'array';
  public $labels;
  public $languageCode;
  protected $latlngType = 'Google_Service_MyBusiness_LatLng';
  protected $latlngDataType = '';
  protected $locationKeyType = 'Google_Service_MyBusiness_LocationKey';
  protected $locationKeyDataType = '';
  public $locationName;
  protected $locationStateType = 'Google_Service_MyBusiness_LocationState';
  protected $locationStateDataType = '';
  protected $metadataType = 'Google_Service_MyBusiness_Metadata';
  protected $metadataDataType = '';
  public $name;
  protected $openInfoType = 'Google_Service_MyBusiness_OpenInfo';
  protected $openInfoDataType = '';
  protected $photosType = 'Google_Service_MyBusiness_Photos';
  protected $photosDataType = '';
  protected $priceListsType = 'Google_Service_MyBusiness_PriceList';
  protected $priceListsDataType = 'array';
  protected $primaryCategoryType = 'Google_Service_MyBusiness_Category';
  protected $primaryCategoryDataType = '';
  public $primaryPhone;
  protected $regularHoursType = 'Google_Service_MyBusiness_BusinessHours';
  protected $regularHoursDataType = '';
  protected $serviceAreaType = 'Google_Service_MyBusiness_ServiceAreaBusiness';
  protected $serviceAreaDataType = '';
  protected $specialHoursType = 'Google_Service_MyBusiness_SpecialHours';
  protected $specialHoursDataType = '';
  public $storeCode;
  public $websiteUrl;


  public function setAdWordsLocationExtensions(Google_Service_MyBusiness_AdWordsLocationExtensions $adWordsLocationExtensions)
  {
    $this->adWordsLocationExtensions = $adWordsLocationExtensions;
  }
  public function getAdWordsLocationExtensions()
  {
    return $this->adWordsLocationExtensions;
  }
  public function setAdditionalCategories($additionalCategories)
  {
    $this->additionalCategories = $additionalCategories;
  }
  public function getAdditionalCategories()
  {
    return $this->additionalCategories;
  }
  public function setAdditionalPhones($additionalPhones)
  {
    $this->additionalPhones = $additionalPhones;
  }
  public function getAdditionalPhones()
  {
    return $this->additionalPhones;
  }
  public function setAddress(Google_Service_MyBusiness_Address $address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
  {
    $this->latlng = $latlng;
  }
  public function getLatlng()
  {
    return $this->latlng;
  }
  public function setLocationKey(Google_Service_MyBusiness_LocationKey $locationKey)
  {
    $this->locationKey = $locationKey;
  }
  public function getLocationKey()
  {
    return $this->locationKey;
  }
  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setLocationState(Google_Service_MyBusiness_LocationState $locationState)
  {
    $this->locationState = $locationState;
  }
  public function getLocationState()
  {
    return $this->locationState;
  }
  public function setMetadata(Google_Service_MyBusiness_Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOpenInfo(Google_Service_MyBusiness_OpenInfo $openInfo)
  {
    $this->openInfo = $openInfo;
  }
  public function getOpenInfo()
  {
    return $this->openInfo;
  }
  public function setPhotos(Google_Service_MyBusiness_Photos $photos)
  {
    $this->photos = $photos;
  }
  public function getPhotos()
  {
    return $this->photos;
  }
  public function setPriceLists($priceLists)
  {
    $this->priceLists = $priceLists;
  }
  public function getPriceLists()
  {
    return $this->priceLists;
  }
  public function setPrimaryCategory(Google_Service_MyBusiness_Category $primaryCategory)
  {
    $this->primaryCategory = $primaryCategory;
  }
  public function getPrimaryCategory()
  {
    return $this->primaryCategory;
  }
  public function setPrimaryPhone($primaryPhone)
  {
    $this->primaryPhone = $primaryPhone;
  }
  public function getPrimaryPhone()
  {
    return $this->primaryPhone;
  }
  public function setRegularHours(Google_Service_MyBusiness_BusinessHours $regularHours)
  {
    $this->regularHours = $regularHours;
  }
  public function getRegularHours()
  {
    return $this->regularHours;
  }
  public function setServiceArea(Google_Service_MyBusiness_ServiceAreaBusiness $serviceArea)
  {
    $this->serviceArea = $serviceArea;
  }
  public function getServiceArea()
  {
    return $this->serviceArea;
  }
  public function setSpecialHours(Google_Service_MyBusiness_SpecialHours $specialHours)
  {
    $this->specialHours = $specialHours;
  }
  public function getSpecialHours()
  {
    return $this->specialHours;
  }
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}

class Google_Service_MyBusiness_LocationDrivingDirectionMetrics extends Google_Collection
{
  protected $collection_key = 'topDirectionSources';
  protected $internal_gapi_mappings = array(
  );
  public $locationName;
  public $timeZone;
  protected $topDirectionSourcesType = 'Google_Service_MyBusiness_TopDirectionSources';
  protected $topDirectionSourcesDataType = 'array';


  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  public function setTopDirectionSources($topDirectionSources)
  {
    $this->topDirectionSources = $topDirectionSources;
  }
  public function getTopDirectionSources()
  {
    return $this->topDirectionSources;
  }
}

class Google_Service_MyBusiness_LocationKey extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $explicitNoPlaceId;
  public $placeId;
  public $plusPageId;
  public $requestId;


  public function setExplicitNoPlaceId($explicitNoPlaceId)
  {
    $this->explicitNoPlaceId = $explicitNoPlaceId;
  }
  public function getExplicitNoPlaceId()
  {
    return $this->explicitNoPlaceId;
  }
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  public function getPlaceId()
  {
    return $this->placeId;
  }
  public function setPlusPageId($plusPageId)
  {
    $this->plusPageId = $plusPageId;
  }
  public function getPlusPageId()
  {
    return $this->plusPageId;
  }
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  public function getRequestId()
  {
    return $this->requestId;
  }
}

class Google_Service_MyBusiness_LocationMetrics extends Google_Collection
{
  protected $collection_key = 'metricValues';
  protected $internal_gapi_mappings = array(
  );
  public $locationName;
  protected $metricValuesType = 'Google_Service_MyBusiness_MetricValue';
  protected $metricValuesDataType = 'array';
  public $timeZone;


  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setMetricValues($metricValues)
  {
    $this->metricValues = $metricValues;
  }
  public function getMetricValues()
  {
    return $this->metricValues;
  }
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

class Google_Service_MyBusiness_LocationState extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $canDelete;
  public $canUpdate;
  public $hasPendingVerification;
  public $isDisabled;
  public $isDisconnected;
  public $isDuplicate;
  public $isGoogleUpdated;
  public $isPendingReview;
  public $isPublished;
  public $isSuspended;
  public $isVerified;
  public $needsReverification;


  public function setCanDelete($canDelete)
  {
    $this->canDelete = $canDelete;
  }
  public function getCanDelete()
  {
    return $this->canDelete;
  }
  public function setCanUpdate($canUpdate)
  {
    $this->canUpdate = $canUpdate;
  }
  public function getCanUpdate()
  {
    return $this->canUpdate;
  }
  public function setHasPendingVerification($hasPendingVerification)
  {
    $this->hasPendingVerification = $hasPendingVerification;
  }
  public function getHasPendingVerification()
  {
    return $this->hasPendingVerification;
  }
  public function setIsDisabled($isDisabled)
  {
    $this->isDisabled = $isDisabled;
  }
  public function getIsDisabled()
  {
    return $this->isDisabled;
  }
  public function setIsDisconnected($isDisconnected)
  {
    $this->isDisconnected = $isDisconnected;
  }
  public function getIsDisconnected()
  {
    return $this->isDisconnected;
  }
  public function setIsDuplicate($isDuplicate)
  {
    $this->isDuplicate = $isDuplicate;
  }
  public function getIsDuplicate()
  {
    return $this->isDuplicate;
  }
  public function setIsGoogleUpdated($isGoogleUpdated)
  {
    $this->isGoogleUpdated = $isGoogleUpdated;
  }
  public function getIsGoogleUpdated()
  {
    return $this->isGoogleUpdated;
  }
  public function setIsPendingReview($isPendingReview)
  {
    $this->isPendingReview = $isPendingReview;
  }
  public function getIsPendingReview()
  {
    return $this->isPendingReview;
  }
  public function setIsPublished($isPublished)
  {
    $this->isPublished = $isPublished;
  }
  public function getIsPublished()
  {
    return $this->isPublished;
  }
  public function setIsSuspended($isSuspended)
  {
    $this->isSuspended = $isSuspended;
  }
  public function getIsSuspended()
  {
    return $this->isSuspended;
  }
  public function setIsVerified($isVerified)
  {
    $this->isVerified = $isVerified;
  }
  public function getIsVerified()
  {
    return $this->isVerified;
  }
  public function setNeedsReverification($needsReverification)
  {
    $this->needsReverification = $needsReverification;
  }
  public function getNeedsReverification()
  {
    return $this->needsReverification;
  }
}

class Google_Service_MyBusiness_MatchedLocation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $isExactMatch;
  protected $locationType = 'Google_Service_MyBusiness_Location';
  protected $locationDataType = '';


  public function setIsExactMatch($isExactMatch)
  {
    $this->isExactMatch = $isExactMatch;
  }
  public function getIsExactMatch()
  {
    return $this->isExactMatch;
  }
  public function setLocation(Google_Service_MyBusiness_Location $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
}

class Google_Service_MyBusiness_Metadata extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $duplicateType = 'Google_Service_MyBusiness_Duplicate';
  protected $duplicateDataType = '';
  public $mapsUrl;


  public function setDuplicate(Google_Service_MyBusiness_Duplicate $duplicate)
  {
    $this->duplicate = $duplicate;
  }
  public function getDuplicate()
  {
    return $this->duplicate;
  }
  public function setMapsUrl($mapsUrl)
  {
    $this->mapsUrl = $mapsUrl;
  }
  public function getMapsUrl()
  {
    return $this->mapsUrl;
  }
}

class Google_Service_MyBusiness_MetricRequest extends Google_Collection
{
  protected $collection_key = 'options';
  protected $internal_gapi_mappings = array(
  );
  public $metric;
  public $options;


  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  public function getMetric()
  {
    return $this->metric;
  }
  public function setOptions($options)
  {
    $this->options = $options;
  }
  public function getOptions()
  {
    return $this->options;
  }
}

class Google_Service_MyBusiness_MetricValue extends Google_Collection
{
  protected $collection_key = 'dimensionalValues';
  protected $internal_gapi_mappings = array(
  );
  protected $dimensionalValuesType = 'Google_Service_MyBusiness_DimensionalMetricValue';
  protected $dimensionalValuesDataType = 'array';
  public $metric;
  protected $totalValueType = 'Google_Service_MyBusiness_DimensionalMetricValue';
  protected $totalValueDataType = '';


  public function setDimensionalValues($dimensionalValues)
  {
    $this->dimensionalValues = $dimensionalValues;
  }
  public function getDimensionalValues()
  {
    return $this->dimensionalValues;
  }
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  public function getMetric()
  {
    return $this->metric;
  }
  public function setTotalValue(Google_Service_MyBusiness_DimensionalMetricValue $totalValue)
  {
    $this->totalValue = $totalValue;
  }
  public function getTotalValue()
  {
    return $this->totalValue;
  }
}

class Google_Service_MyBusiness_Money extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currencyCode;
  public $nanos;
  public $units;


  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  public function getNanos()
  {
    return $this->nanos;
  }
  public function setUnits($units)
  {
    $this->units = $units;
  }
  public function getUnits()
  {
    return $this->units;
  }
}

class Google_Service_MyBusiness_MybusinessEmpty extends Google_Model
{
}

class Google_Service_MyBusiness_Notifications extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $topicName;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class Google_Service_MyBusiness_OpenInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $canReopen;
  public $status;


  public function setCanReopen($canReopen)
  {
    $this->canReopen = $canReopen;
  }
  public function getCanReopen()
  {
    return $this->canReopen;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_MyBusiness_Photos extends Google_Collection
{
  protected $collection_key = 'teamPhotoUrls';
  protected $internal_gapi_mappings = array(
  );
  public $additionalPhotoUrls;
  public $commonAreasPhotoUrls;
  public $coverPhotoUrl;
  public $exteriorPhotoUrls;
  public $foodAndDrinkPhotoUrls;
  public $interiorPhotoUrls;
  public $logoPhotoUrl;
  public $menuPhotoUrls;
  public $photosAtWorkUrls;
  public $preferredPhoto;
  public $productPhotoUrls;
  public $profilePhotoUrl;
  public $roomsPhotoUrls;
  public $teamPhotoUrls;


  public function setAdditionalPhotoUrls($additionalPhotoUrls)
  {
    $this->additionalPhotoUrls = $additionalPhotoUrls;
  }
  public function getAdditionalPhotoUrls()
  {
    return $this->additionalPhotoUrls;
  }
  public function setCommonAreasPhotoUrls($commonAreasPhotoUrls)
  {
    $this->commonAreasPhotoUrls = $commonAreasPhotoUrls;
  }
  public function getCommonAreasPhotoUrls()
  {
    return $this->commonAreasPhotoUrls;
  }
  public function setCoverPhotoUrl($coverPhotoUrl)
  {
    $this->coverPhotoUrl = $coverPhotoUrl;
  }
  public function getCoverPhotoUrl()
  {
    return $this->coverPhotoUrl;
  }
  public function setExteriorPhotoUrls($exteriorPhotoUrls)
  {
    $this->exteriorPhotoUrls = $exteriorPhotoUrls;
  }
  public function getExteriorPhotoUrls()
  {
    return $this->exteriorPhotoUrls;
  }
  public function setFoodAndDrinkPhotoUrls($foodAndDrinkPhotoUrls)
  {
    $this->foodAndDrinkPhotoUrls = $foodAndDrinkPhotoUrls;
  }
  public function getFoodAndDrinkPhotoUrls()
  {
    return $this->foodAndDrinkPhotoUrls;
  }
  public function setInteriorPhotoUrls($interiorPhotoUrls)
  {
    $this->interiorPhotoUrls = $interiorPhotoUrls;
  }
  public function getInteriorPhotoUrls()
  {
    return $this->interiorPhotoUrls;
  }
  public function setLogoPhotoUrl($logoPhotoUrl)
  {
    $this->logoPhotoUrl = $logoPhotoUrl;
  }
  public function getLogoPhotoUrl()
  {
    return $this->logoPhotoUrl;
  }
  public function setMenuPhotoUrls($menuPhotoUrls)
  {
    $this->menuPhotoUrls = $menuPhotoUrls;
  }
  public function getMenuPhotoUrls()
  {
    return $this->menuPhotoUrls;
  }
  public function setPhotosAtWorkUrls($photosAtWorkUrls)
  {
    $this->photosAtWorkUrls = $photosAtWorkUrls;
  }
  public function getPhotosAtWorkUrls()
  {
    return $this->photosAtWorkUrls;
  }
  public function setPreferredPhoto($preferredPhoto)
  {
    $this->preferredPhoto = $preferredPhoto;
  }
  public function getPreferredPhoto()
  {
    return $this->preferredPhoto;
  }
  public function setProductPhotoUrls($productPhotoUrls)
  {
    $this->productPhotoUrls = $productPhotoUrls;
  }
  public function getProductPhotoUrls()
  {
    return $this->productPhotoUrls;
  }
  public function setProfilePhotoUrl($profilePhotoUrl)
  {
    $this->profilePhotoUrl = $profilePhotoUrl;
  }
  public function getProfilePhotoUrl()
  {
    return $this->profilePhotoUrl;
  }
  public function setRoomsPhotoUrls($roomsPhotoUrls)
  {
    $this->roomsPhotoUrls = $roomsPhotoUrls;
  }
  public function getRoomsPhotoUrls()
  {
    return $this->roomsPhotoUrls;
  }
  public function setTeamPhotoUrls($teamPhotoUrls)
  {
    $this->teamPhotoUrls = $teamPhotoUrls;
  }
  public function getTeamPhotoUrls()
  {
    return $this->teamPhotoUrls;
  }
}

class Google_Service_MyBusiness_PlaceInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $placeId;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  public function getPlaceId()
  {
    return $this->placeId;
  }
}

class Google_Service_MyBusiness_Places extends Google_Collection
{
  protected $collection_key = 'placeInfos';
  protected $internal_gapi_mappings = array(
  );
  protected $placeInfosType = 'Google_Service_MyBusiness_PlaceInfo';
  protected $placeInfosDataType = 'array';


  public function setPlaceInfos($placeInfos)
  {
    $this->placeInfos = $placeInfos;
  }
  public function getPlaceInfos()
  {
    return $this->placeInfos;
  }
}

class Google_Service_MyBusiness_PointRadius extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $latlngType = 'Google_Service_MyBusiness_LatLng';
  protected $latlngDataType = '';
  public $radiusKm;


  public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
  {
    $this->latlng = $latlng;
  }
  public function getLatlng()
  {
    return $this->latlng;
  }
  public function setRadiusKm($radiusKm)
  {
    $this->radiusKm = $radiusKm;
  }
  public function getRadiusKm()
  {
    return $this->radiusKm;
  }
}

class Google_Service_MyBusiness_PriceList extends Google_Collection
{
  protected $collection_key = 'sections';
  protected $internal_gapi_mappings = array(
  );
  protected $labelsType = 'Google_Service_MyBusiness_Label';
  protected $labelsDataType = 'array';
  public $priceListId;
  protected $sectionsType = 'Google_Service_MyBusiness_Section';
  protected $sectionsDataType = 'array';
  public $sourceUrl;


  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setPriceListId($priceListId)
  {
    $this->priceListId = $priceListId;
  }
  public function getPriceListId()
  {
    return $this->priceListId;
  }
  public function setSections($sections)
  {
    $this->sections = $sections;
  }
  public function getSections()
  {
    return $this->sections;
  }
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
}

class Google_Service_MyBusiness_RegionCount extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;
  public $label;
  protected $latlngType = 'Google_Service_MyBusiness_LatLng';
  protected $latlngDataType = '';


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
  {
    $this->latlng = $latlng;
  }
  public function getLatlng()
  {
    return $this->latlng;
  }
}

class Google_Service_MyBusiness_RepeatedEnumAttributeValue extends Google_Collection
{
  protected $collection_key = 'unsetValues';
  protected $internal_gapi_mappings = array(
  );
  public $setValues;
  public $unsetValues;


  public function setSetValues($setValues)
  {
    $this->setValues = $setValues;
  }
  public function getSetValues()
  {
    return $this->setValues;
  }
  public function setUnsetValues($unsetValues)
  {
    $this->unsetValues = $unsetValues;
  }
  public function getUnsetValues()
  {
    return $this->unsetValues;
  }
}

class Google_Service_MyBusiness_ReportLocationInsightsRequest extends Google_Collection
{
  protected $collection_key = 'locationNames';
  protected $internal_gapi_mappings = array(
  );
  protected $basicRequestType = 'Google_Service_MyBusiness_BasicMetricsRequest';
  protected $basicRequestDataType = '';
  protected $drivingDirectionsRequestType = 'Google_Service_MyBusiness_DrivingDirectionMetricsRequest';
  protected $drivingDirectionsRequestDataType = '';
  public $locationNames;


  public function setBasicRequest(Google_Service_MyBusiness_BasicMetricsRequest $basicRequest)
  {
    $this->basicRequest = $basicRequest;
  }
  public function getBasicRequest()
  {
    return $this->basicRequest;
  }
  public function setDrivingDirectionsRequest(Google_Service_MyBusiness_DrivingDirectionMetricsRequest $drivingDirectionsRequest)
  {
    $this->drivingDirectionsRequest = $drivingDirectionsRequest;
  }
  public function getDrivingDirectionsRequest()
  {
    return $this->drivingDirectionsRequest;
  }
  public function setLocationNames($locationNames)
  {
    $this->locationNames = $locationNames;
  }
  public function getLocationNames()
  {
    return $this->locationNames;
  }
}

class Google_Service_MyBusiness_ReportLocationInsightsResponse extends Google_Collection
{
  protected $collection_key = 'locationMetrics';
  protected $internal_gapi_mappings = array(
  );
  protected $locationDrivingDirectionMetricsType = 'Google_Service_MyBusiness_LocationDrivingDirectionMetrics';
  protected $locationDrivingDirectionMetricsDataType = 'array';
  protected $locationMetricsType = 'Google_Service_MyBusiness_LocationMetrics';
  protected $locationMetricsDataType = 'array';


  public function setLocationDrivingDirectionMetrics($locationDrivingDirectionMetrics)
  {
    $this->locationDrivingDirectionMetrics = $locationDrivingDirectionMetrics;
  }
  public function getLocationDrivingDirectionMetrics()
  {
    return $this->locationDrivingDirectionMetrics;
  }
  public function setLocationMetrics($locationMetrics)
  {
    $this->locationMetrics = $locationMetrics;
  }
  public function getLocationMetrics()
  {
    return $this->locationMetrics;
  }
}

class Google_Service_MyBusiness_Review extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $comment;
  public $createTime;
  public $reviewId;
  protected $reviewReplyType = 'Google_Service_MyBusiness_ReviewReply';
  protected $reviewReplyDataType = '';
  protected $reviewerType = 'Google_Service_MyBusiness_Reviewer';
  protected $reviewerDataType = '';
  public $starRating;
  public $updateTime;


  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  public function getComment()
  {
    return $this->comment;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setReviewId($reviewId)
  {
    $this->reviewId = $reviewId;
  }
  public function getReviewId()
  {
    return $this->reviewId;
  }
  public function setReviewReply(Google_Service_MyBusiness_ReviewReply $reviewReply)
  {
    $this->reviewReply = $reviewReply;
  }
  public function getReviewReply()
  {
    return $this->reviewReply;
  }
  public function setReviewer(Google_Service_MyBusiness_Reviewer $reviewer)
  {
    $this->reviewer = $reviewer;
  }
  public function getReviewer()
  {
    return $this->reviewer;
  }
  public function setStarRating($starRating)
  {
    $this->starRating = $starRating;
  }
  public function getStarRating()
  {
    return $this->starRating;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class Google_Service_MyBusiness_ReviewReply extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $comment;
  public $updateTime;


  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  public function getComment()
  {
    return $this->comment;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class Google_Service_MyBusiness_Reviewer extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $isAnonymous;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setIsAnonymous($isAnonymous)
  {
    $this->isAnonymous = $isAnonymous;
  }
  public function getIsAnonymous()
  {
    return $this->isAnonymous;
  }
}

class Google_Service_MyBusiness_Section extends Google_Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_MyBusiness_Item';
  protected $itemsDataType = 'array';
  protected $labelsType = 'Google_Service_MyBusiness_Label';
  protected $labelsDataType = 'array';
  public $sectionId;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setSectionId($sectionId)
  {
    $this->sectionId = $sectionId;
  }
  public function getSectionId()
  {
    return $this->sectionId;
  }
}

class Google_Service_MyBusiness_ServiceAreaBusiness extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $businessType;
  protected $placesType = 'Google_Service_MyBusiness_Places';
  protected $placesDataType = '';
  protected $radiusType = 'Google_Service_MyBusiness_PointRadius';
  protected $radiusDataType = '';


  public function setBusinessType($businessType)
  {
    $this->businessType = $businessType;
  }
  public function getBusinessType()
  {
    return $this->businessType;
  }
  public function setPlaces(Google_Service_MyBusiness_Places $places)
  {
    $this->places = $places;
  }
  public function getPlaces()
  {
    return $this->places;
  }
  public function setRadius(Google_Service_MyBusiness_PointRadius $radius)
  {
    $this->radius = $radius;
  }
  public function getRadius()
  {
    return $this->radius;
  }
}

class Google_Service_MyBusiness_SpecialHourPeriod extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $closeTime;
  protected $endDateType = 'Google_Service_MyBusiness_Date';
  protected $endDateDataType = '';
  public $isClosed;
  public $openTime;
  protected $startDateType = 'Google_Service_MyBusiness_Date';
  protected $startDateDataType = '';


  public function setCloseTime($closeTime)
  {
    $this->closeTime = $closeTime;
  }
  public function getCloseTime()
  {
    return $this->closeTime;
  }
  public function setEndDate(Google_Service_MyBusiness_Date $endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setIsClosed($isClosed)
  {
    $this->isClosed = $isClosed;
  }
  public function getIsClosed()
  {
    return $this->isClosed;
  }
  public function setOpenTime($openTime)
  {
    $this->openTime = $openTime;
  }
  public function getOpenTime()
  {
    return $this->openTime;
  }
  public function setStartDate(Google_Service_MyBusiness_Date $startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
}

class Google_Service_MyBusiness_SpecialHours extends Google_Collection
{
  protected $collection_key = 'specialHourPeriods';
  protected $internal_gapi_mappings = array(
  );
  protected $specialHourPeriodsType = 'Google_Service_MyBusiness_SpecialHourPeriod';
  protected $specialHourPeriodsDataType = 'array';


  public function setSpecialHourPeriods($specialHourPeriods)
  {
    $this->specialHourPeriods = $specialHourPeriods;
  }
  public function getSpecialHourPeriods()
  {
    return $this->specialHourPeriods;
  }
}

class Google_Service_MyBusiness_TimeDimension extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dayOfWeek;
  protected $timeOfDayType = 'Google_Service_MyBusiness_TimeOfDay';
  protected $timeOfDayDataType = '';
  protected $timeRangeType = 'Google_Service_MyBusiness_TimeRange';
  protected $timeRangeDataType = '';


  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
  public function setTimeOfDay(Google_Service_MyBusiness_TimeOfDay $timeOfDay)
  {
    $this->timeOfDay = $timeOfDay;
  }
  public function getTimeOfDay()
  {
    return $this->timeOfDay;
  }
  public function setTimeRange(Google_Service_MyBusiness_TimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class Google_Service_MyBusiness_TimeOfDay extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $hours;
  public $minutes;
  public $nanos;
  public $seconds;


  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  public function getHours()
  {
    return $this->hours;
  }
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  public function getMinutes()
  {
    return $this->minutes;
  }
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  public function getNanos()
  {
    return $this->nanos;
  }
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class Google_Service_MyBusiness_TimePeriod extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $closeDay;
  public $closeTime;
  public $openDay;
  public $openTime;


  public function setCloseDay($closeDay)
  {
    $this->closeDay = $closeDay;
  }
  public function getCloseDay()
  {
    return $this->closeDay;
  }
  public function setCloseTime($closeTime)
  {
    $this->closeTime = $closeTime;
  }
  public function getCloseTime()
  {
    return $this->closeTime;
  }
  public function setOpenDay($openDay)
  {
    $this->openDay = $openDay;
  }
  public function getOpenDay()
  {
    return $this->openDay;
  }
  public function setOpenTime($openTime)
  {
    $this->openTime = $openTime;
  }
  public function getOpenTime()
  {
    return $this->openTime;
  }
}

class Google_Service_MyBusiness_TimeRange extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $endTime;
  public $startTime;


  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class Google_Service_MyBusiness_TopDirectionSources extends Google_Collection
{
  protected $collection_key = 'regionCounts';
  protected $internal_gapi_mappings = array(
  );
  public $dayCount;
  protected $regionCountsType = 'Google_Service_MyBusiness_RegionCount';
  protected $regionCountsDataType = 'array';


  public function setDayCount($dayCount)
  {
    $this->dayCount = $dayCount;
  }
  public function getDayCount()
  {
    return $this->dayCount;
  }
  public function setRegionCounts($regionCounts)
  {
    $this->regionCounts = $regionCounts;
  }
  public function getRegionCounts()
  {
    return $this->regionCounts;
  }
}

class Google_Service_MyBusiness_TransferLocationRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $toAccount;


  public function setToAccount($toAccount)
  {
    $this->toAccount = $toAccount;
  }
  public function getToAccount()
  {
    return $this->toAccount;
  }
}

class Google_Service_MyBusiness_UrlAttributeValue extends Google_Model
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
