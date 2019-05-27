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
```
