# php-google-my-business
Google MyBusiness

## Examples

### Creating a new post

```
$post_body = new \Google_Service_MyBusiness_LocalPost;
$post_body->setLanguageCode('en');
$post_body->setSummary('test'); // post text
$call = new \Google_Service_MyBusiness_CallToAction;
$call->setActionType('LEARN_MORE'); // call to action type, see https://developers.google.com/my-business/content/posts-data#call_to_action_posts
$call->setUrl('https://xxxxxx'); // URL to link to
$post_body->setCallToAction($call);
$media = new \Google_Service_MyBusiness_MediaItem;
$media->setMediaFormat('PHOTO');
$media->setSourceUrl('https://example.com/whatever.jpg'); // needs to be 10+k, GIFs are *not* supported
$post_body->setMedia($media);
$accounts = $service->accounts->listAccounts()->getAccounts(); // get accounts
$locations = $service->accounts_locations->listAccountsLocations($accounts[0]['name']); // get locations under first account
$service->accounts_locations_localPosts->create($locations[0]['name'], $post_body); // create post for the location

### Pulling metrics for location
$accounts = $service->accounts->listAccounts()->getAccounts();
$locations = $service->accounts_locations->listAccountsLocations($accounts[0]['name']); // get locations for the first account
$request = new \Google_Service_MyBusiness_ReportLocationInsightsRequest;
$request->setLocationNames($locations[0]['name']); // set first location to pull data for
$actions = new \Google_Service_MyBusiness_BasicMetricsRequest;
$actions->setMetricRequests(['metric' => 'ALL']);
$time = new \Google_Service_MyBusiness_TimeRange;
$time->setStartTime('2019-10-02T15:01:23.045123456Z');
$time->setEndTime('2020-01-31T15:01:23.045123456Z');
$actions->setTimeRange($time);
$request->setBasicRequest($actions);
$insights = $service->accounts_locations->reportInsights($accounts[0]['name'], $request);
print_r($insights); // see object result structure / insights available

### Driving metrics for a location
$locations = $service->accounts_locations->listAccountsLocations($accounts[0]['name']);
$request = new \Google_Service_MyBusiness_ReportLocationInsightsRequest;
$request->setLocationNames($locations[0]['name']);
$driving = new \Google_Service_MyBusiness_DrivingDirectionMetricsRequest;
$driving->setNumDays(90);
$request->setDrivingDirectionsRequest($driving);
$insights = $service->accounts_locations->reportInsights($accounts[0]['name'], $request);
print_r($insights);

### Other examples
$media = $service->accounts_locations_media->listAccountsLocationsMedia($locations[0]['name']); // media
$questions=$service->accounts_locations_questions->listAccountsLocationsQuestions($locations[0]['name'])); // questions
$notifications=$service->accounts->getNotifications($locations[0]['name'])); // get notifications
$recommended=$service->accounts->listRecommendGoogleLocations($accounts[0]['name']); // recommended locations
$admins=$service->accounts_admins->listAccountsAdmins($accounts[0]['name'])); // only for business account, not PERSON account
$reviews=$service->accounts_locations_reviews->listAccountsLocationsReviews($locations[0]['name'])); // get reviews
```
