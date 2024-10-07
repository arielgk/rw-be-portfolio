---
title: Socialyz v1.0
language_tabs:
  - shell: Shell
  - http: HTTP
  - javascript: JavaScript
  - ruby: Ruby
  - python: Python
  - php: PHP
  - java: Java
  - go: Go
toc_footers: []
includes: []
search: true
highlight_theme: darkula
headingLevel: 2

---

<!-- Generator: Widdershins v4.0.1 -->

<h1 id="socialyz">Socialyz v1.0</h1>

> Scroll down for code samples, example requests and responses. Select a language for code samples from the tabs above or the mobile navigation menu.

Base URLs:

* <a href="http://socialyz.com">http://socialyz.com</a>

<h1 id="socialyz-default">Default</h1>

## deleteUser

<a id="opIddeleteUser"></a>

> Code samples

```shell
# You can also use wget
curl -X DELETE http://socialyz.com/users/{id} \
  -H 'Accept: application/json'

```

```http
DELETE http://socialyz.com/users/{id} HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/users/{id}',
{
  method: 'DELETE',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.delete 'http://socialyz.com/users/{id}',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.delete('http://socialyz.com/users/{id}', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('DELETE','http://socialyz.com/users/{id}', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/users/{id}");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("DELETE");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("DELETE", "http://socialyz.com/users/{id}", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`DELETE /users/{id}`

*Delete a single user*

<h3 id="deleteuser-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|id|path|integer(int64)|true|ID of the user|

> Example responses

> 200 Response

```json
{
  "code": 200,
  "message": "user successfully deleted"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="deleteuser-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|User successfully deleted|[Success](#schemasuccess)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## createPost

<a id="opIdcreatePost"></a>

> Code samples

```shell
# You can also use wget
curl -X POST http://socialyz.com/posts \
  -H 'Content-Type: application/json' \
  -H 'Accept: application/json'

```

```http
POST http://socialyz.com/posts HTTP/1.1
Host: socialyz.com
Content-Type: application/json
Accept: application/json

```

```javascript
const inputBody = '{
  "id": 10,
  "type": "image",
  "owner": 10,
  "created_at": "2021-08-14T21:03:30.000000Z",
  "images": [
    {
      "id": 1,
      "type": "original",
      "file": "original.jpg"
    },
    {
      "id": 1,
      "type": "alpha",
      "file": "alpha.jpg"
    }
  ],
  "video": "video.mp4"
}';
const headers = {
  'Content-Type':'application/json',
  'Accept':'application/json'
};

fetch('http://socialyz.com/posts',
{
  method: 'POST',
  body: inputBody,
  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Content-Type' => 'application/json',
  'Accept' => 'application/json'
}

result = RestClient.post 'http://socialyz.com/posts',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

r = requests.post('http://socialyz.com/posts', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('POST','http://socialyz.com/posts', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/posts");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("POST");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Content-Type": []string{"application/json"},
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("POST", "http://socialyz.com/posts", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`POST /posts`

*Create a new post*

> Body parameter

```json
{
  "id": 10,
  "type": "image",
  "owner": 10,
  "created_at": "2021-08-14T21:03:30.000000Z",
  "images": [
    {
      "id": 1,
      "type": "original",
      "file": "original.jpg"
    },
    {
      "id": 1,
      "type": "alpha",
      "file": "alpha.jpg"
    }
  ],
  "video": "video.mp4"
}
```

<h3 id="createpost-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|body|body|[Post](#schemapost)|false|Add Post to system|

> Example responses

> 201 Response

```json
{
  "code": 201,
  "message": "post successfully created"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="createpost-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|201|[Created](https://tools.ietf.org/html/rfc7231#section-6.3.2)|Post Successfully Added|[Success](#schemasuccess)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## deletePost

<a id="opIddeletePost"></a>

> Code samples

```shell
# You can also use wget
curl -X DELETE http://socialyz.com/posts/{id} \
  -H 'Accept: application/json'

```

```http
DELETE http://socialyz.com/posts/{id} HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/posts/{id}',
{
  method: 'DELETE',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.delete 'http://socialyz.com/posts/{id}',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.delete('http://socialyz.com/posts/{id}', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('DELETE','http://socialyz.com/posts/{id}', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/posts/{id}");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("DELETE");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("DELETE", "http://socialyz.com/posts/{id}", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`DELETE /posts/{id}`

*Delete a single post*

<h3 id="deletepost-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|id|path|integer(int64)|true|ID of the post|

> Example responses

> 200 Response

```json
{
  "code": 200,
  "message": "post successfully deleted"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="deletepost-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|Post successfully deleted|[Success](#schemasuccess)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## createComment

<a id="opIdcreateComment"></a>

> Code samples

```shell
# You can also use wget
curl -X POST http://socialyz.com/comments \
  -H 'Content-Type: application/json' \
  -H 'Accept: application/json'

```

```http
POST http://socialyz.com/comments HTTP/1.1
Host: socialyz.com
Content-Type: application/json
Accept: application/json

```

```javascript
const inputBody = '{
  "id": 23,
  "post": 32,
  "owner": 10,
  "body": "i like this post",
  "created_at": "2021-08-14T21:03:30.000000Z"
}';
const headers = {
  'Content-Type':'application/json',
  'Accept':'application/json'
};

fetch('http://socialyz.com/comments',
{
  method: 'POST',
  body: inputBody,
  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Content-Type' => 'application/json',
  'Accept' => 'application/json'
}

result = RestClient.post 'http://socialyz.com/comments',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

r = requests.post('http://socialyz.com/comments', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('POST','http://socialyz.com/comments', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/comments");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("POST");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Content-Type": []string{"application/json"},
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("POST", "http://socialyz.com/comments", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`POST /comments`

*Create a comment and attach to post*

> Body parameter

```json
{
  "id": 23,
  "post": 32,
  "owner": 10,
  "body": "i like this post",
  "created_at": "2021-08-14T21:03:30.000000Z"
}
```

<h3 id="createcomment-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|body|body|[Comment](#schemacomment)|false|Add Post to system|

> Example responses

> 201 Response

```json
{
  "code": 201,
  "message": "comment Successfuly Added"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="createcomment-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|201|[Created](https://tools.ietf.org/html/rfc7231#section-6.3.2)|Comment Successfuly added|[Success](#schemasuccess)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## getComment

<a id="opIdgetComment"></a>

> Code samples

```shell
# You can also use wget
curl -X GET http://socialyz.com/comments?post_id=0 \
  -H 'Accept: application/json'

```

```http
GET http://socialyz.com/comments?post_id=0 HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/comments?post_id=0',
{
  method: 'GET',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.get 'http://socialyz.com/comments',
  params: {
  'post_id' => 'integer'
}, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.get('http://socialyz.com/comments', params={
  'post_id': '0'
}, headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('GET','http://socialyz.com/comments', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/comments?post_id=0");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("GET");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("GET", "http://socialyz.com/comments", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`GET /comments`

*get comments of a post*

<h3 id="getcomment-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|post_id|query|integer|true|Type of user to be retrived.|

> Example responses

> 200 Response

```json
[
  {
    "id": 23,
    "post": 32,
    "owner": 10,
    "body": "example comment 1",
    "created_at": "2021-08-14T21:03:30.000000Z"
  },
  {
    "id": 24,
    "post": 32,
    "owner": 21,
    "body": "example comment 2",
    "created_at": "2021-08-14T21:03:30.000000Z"
  },
  {
    "id": 25,
    "post": 32,
    "owner": 14,
    "body": "example comment 3",
    "created_at": "2021-08-14T21:03:30.000000Z"
  }
]
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="getcomment-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|List comment for a post|[GetComments](#schemagetcomments)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## deleteComment

<a id="opIddeleteComment"></a>

> Code samples

```shell
# You can also use wget
curl -X DELETE http://socialyz.com/comments/{id} \
  -H 'Accept: application/json'

```

```http
DELETE http://socialyz.com/comments/{id} HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/comments/{id}',
{
  method: 'DELETE',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.delete 'http://socialyz.com/comments/{id}',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.delete('http://socialyz.com/comments/{id}', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('DELETE','http://socialyz.com/comments/{id}', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/comments/{id}");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("DELETE");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("DELETE", "http://socialyz.com/comments/{id}", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`DELETE /comments/{id}`

*Delete a single comment*

<h3 id="deletecomment-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|id|path|integer(int64)|true|ID of the comment|

> Example responses

> 200 Response

```json
{
  "code": 200,
  "message": "comment Successfuly Deleted"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="deletecomment-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|Comment Successfuly deleted|[Success](#schemasuccess)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## updateComment

<a id="opIdupdateComment"></a>

> Code samples

```shell
# You can also use wget
curl -X PUT http://socialyz.com/comments/{id} \
  -H 'Content-Type: application/json' \
  -H 'Accept: application/json'

```

```http
PUT http://socialyz.com/comments/{id} HTTP/1.1
Host: socialyz.com
Content-Type: application/json
Accept: application/json

```

```javascript
const inputBody = '{
  "id": 23,
  "post": 32,
  "owner": 10,
  "body": "i like this post",
  "created_at": "2021-08-14T21:03:30.000000Z"
}';
const headers = {
  'Content-Type':'application/json',
  'Accept':'application/json'
};

fetch('http://socialyz.com/comments/{id}',
{
  method: 'PUT',
  body: inputBody,
  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Content-Type' => 'application/json',
  'Accept' => 'application/json'
}

result = RestClient.put 'http://socialyz.com/comments/{id}',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

r = requests.put('http://socialyz.com/comments/{id}', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('PUT','http://socialyz.com/comments/{id}', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/comments/{id}");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("PUT");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Content-Type": []string{"application/json"},
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("PUT", "http://socialyz.com/comments/{id}", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`PUT /comments/{id}`

*Update a comment*

> Body parameter

```json
{
  "id": 23,
  "post": 32,
  "owner": 10,
  "body": "i like this post",
  "created_at": "2021-08-14T21:03:30.000000Z"
}
```

<h3 id="updatecomment-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|id|path|integer(int64)|true|ID of the comment|
|body|body|[Comment](#schemacomment)|false|Add Post|

> Example responses

> 200 Response

```json
{
  "id": 23,
  "post": 32,
  "owner": 10,
  "body": "updated comment",
  "created_at": "2021-08-14T21:03:30.000000Z"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="updatecomment-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|Comment after being updated|[Comment](#schemacomment)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## like

<a id="opIdlike"></a>

> Code samples

```shell
# You can also use wget
curl -X POST http://socialyz.com/likes \
  -H 'Content-Type: application/json' \
  -H 'Accept: application/json'

```

```http
POST http://socialyz.com/likes HTTP/1.1
Host: socialyz.com
Content-Type: application/json
Accept: application/json

```

```javascript
const inputBody = '{
  "id": 10,
  "post": 25,
  "owner": 10,
  "created_at": "2021-08-14T21:03:30.000000Z"
}';
const headers = {
  'Content-Type':'application/json',
  'Accept':'application/json'
};

fetch('http://socialyz.com/likes',
{
  method: 'POST',
  body: inputBody,
  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Content-Type' => 'application/json',
  'Accept' => 'application/json'
}

result = RestClient.post 'http://socialyz.com/likes',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

r = requests.post('http://socialyz.com/likes', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('POST','http://socialyz.com/likes', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/likes");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("POST");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Content-Type": []string{"application/json"},
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("POST", "http://socialyz.com/likes", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`POST /likes`

*Like a post*

> Body parameter

```json
{
  "id": 10,
  "post": 25,
  "owner": 10,
  "created_at": "2021-08-14T21:03:30.000000Z"
}
```

<h3 id="like-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|body|body|[Like](#schemalike)|false|Add Like to post|

> Example responses

> 201 Response

```json
{
  "code": 201,
  "message": "Post successfully liked"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="like-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|201|[Created](https://tools.ietf.org/html/rfc7231#section-6.3.2)|Post liked|[Success](#schemasuccess)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## getLike

<a id="opIdgetLike"></a>

> Code samples

```shell
# You can also use wget
curl -X GET http://socialyz.com/likes?post_id=0 \
  -H 'Accept: application/json'

```

```http
GET http://socialyz.com/likes?post_id=0 HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/likes?post_id=0',
{
  method: 'GET',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.get 'http://socialyz.com/likes',
  params: {
  'post_id' => 'integer'
}, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.get('http://socialyz.com/likes', params={
  'post_id': '0'
}, headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('GET','http://socialyz.com/likes', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/likes?post_id=0");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("GET");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("GET", "http://socialyz.com/likes", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`GET /likes`

*get likes of a post*

<h3 id="getlike-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|post_id|query|integer|true|id of post whose likes need to be retrieved|

> Example responses

> 200 Response

```json
[
  {
    "id": 10,
    "post": 25,
    "owner": {
      "id": 10,
      "name": "Test Tester",
      "username": "testtester",
      "image": "profile.jpg",
      "color": "#fff000"
    },
    "created_at": "2021-08-14T21:03:30.000000Z"
  }
]
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="getlike-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|List user that likes post|[GetLikes](#schemagetlikes)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## unlike

<a id="opIdunlike"></a>

> Code samples

```shell
# You can also use wget
curl -X DELETE http://socialyz.com/likes?post_id=1&user_id=1 \
  -H 'Accept: application/json'

```

```http
DELETE http://socialyz.com/likes?post_id=1&user_id=1 HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/likes?post_id=1&user_id=1',
{
  method: 'DELETE',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.delete 'http://socialyz.com/likes',
  params: {
  'post_id' => 'integer(int64)',
'user_id' => 'integer(int64)'
}, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.delete('http://socialyz.com/likes', params={
  'post_id': '1',  'user_id': '1'
}, headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('DELETE','http://socialyz.com/likes', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/likes?post_id=1&user_id=1");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("DELETE");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("DELETE", "http://socialyz.com/likes", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`DELETE /likes`

*Unlike a post*

<h3 id="unlike-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|post_id|query|integer(int64)|true|ID of post|
|user_id|query|integer(int64)|true|ID of user|

> Example responses

> 200 Response

```json
{
  "code": 200,
  "message": "Post successfully unliked"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="unlike-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|Post successfully unliked|[Success](#schemasuccess)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## createRelations

<a id="opIdcreateRelations"></a>

> Code samples

```shell
# You can also use wget
curl -X POST http://socialyz.com/relations \
  -H 'Content-Type: application/json' \
  -H 'Accept: application/json'

```

```http
POST http://socialyz.com/relations HTTP/1.1
Host: socialyz.com
Content-Type: application/json
Accept: application/json

```

```javascript
const inputBody = '{
  "id": 11,
  "owner": 10,
  "user": 12
}';
const headers = {
  'Content-Type':'application/json',
  'Accept':'application/json'
};

fetch('http://socialyz.com/relations',
{
  method: 'POST',
  body: inputBody,
  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Content-Type' => 'application/json',
  'Accept' => 'application/json'
}

result = RestClient.post 'http://socialyz.com/relations',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

r = requests.post('http://socialyz.com/relations', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('POST','http://socialyz.com/relations', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/relations");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("POST");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Content-Type": []string{"application/json"},
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("POST", "http://socialyz.com/relations", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`POST /relations`

*Create new relation between two users*

> Body parameter

```json
{
  "id": 11,
  "owner": 10,
  "user": 12
}
```

<h3 id="createrelations-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|body|body|[UserRelation](#schemauserrelation)|false|Information about users and type of relation|

> Example responses

> 201 Response

```json
{
  "code": 201,
  "message": "Relation successfully created"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="createrelations-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|201|[Created](https://tools.ietf.org/html/rfc7231#section-6.3.2)|Relation successfully created|[Success](#schemasuccess)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## getRelations

<a id="opIdgetRelations"></a>

> Code samples

```shell
# You can also use wget
curl -X GET http://socialyz.com/relations?user_id=0 \
  -H 'Accept: application/json'

```

```http
GET http://socialyz.com/relations?user_id=0 HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/relations?user_id=0',
{
  method: 'GET',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.get 'http://socialyz.com/relations',
  params: {
  'user_id' => 'integer'
}, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.get('http://socialyz.com/relations', params={
  'user_id': '0'
}, headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('GET','http://socialyz.com/relations', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/relations?user_id=0");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("GET");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("GET", "http://socialyz.com/relations", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`GET /relations`

*get all relations of a user*

<h3 id="getrelations-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|user_id|query|integer|true|id of users whose relations is to be listed|

> Example responses

> 200 Response

```json
[
  {
    "id": 10,
    "owner": 25,
    "user": {
      "id": 10,
      "name": "Test Tester",
      "username": "testtester",
      "image": "profile.jpg",
      "color": "#fff000"
    },
    "created_at": "2021-08-14T21:03:30.000000Z"
  }
]
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="getrelations-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|List user that are related to current user|[GetUserRelations](#schemagetuserrelations)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## unfollow

<a id="opIdunfollow"></a>

> Code samples

```shell
# You can also use wget
curl -X DELETE http://socialyz.com/relations?owner_id=1&user_id=1 \
  -H 'Accept: application/json'

```

```http
DELETE http://socialyz.com/relations?owner_id=1&user_id=1 HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/relations?owner_id=1&user_id=1',
{
  method: 'DELETE',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.delete 'http://socialyz.com/relations',
  params: {
  'owner_id' => 'integer(int64)',
'user_id' => 'integer(int64)'
}, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.delete('http://socialyz.com/relations', params={
  'owner_id': '1',  'user_id': '1'
}, headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('DELETE','http://socialyz.com/relations', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/relations?owner_id=1&user_id=1");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("DELETE");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("DELETE", "http://socialyz.com/relations", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`DELETE /relations`

*Remove relation between users*

<h3 id="unfollow-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|owner_id|query|integer(int64)|true|ID of user who is owner of relation ("Followed by")|
|user_id|query|integer(int64)|true|ID of user whom the owner is related to ("Followed to")|

> Example responses

> 200 Response

```json
{
  "code": 200,
  "message": "Relation successfully removed "
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="unfollow-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|Relation successfully removed|[Success](#schemasuccess)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

<h1 id="socialyz-user">user</h1>

## listUser

<a id="opIdlistUser"></a>

> Code samples

```shell
# You can also use wget
curl -X GET http://socialyz.com/users?type=all \
  -H 'Accept: application/json'

```

```http
GET http://socialyz.com/users?type=all HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/users?type=all',
{
  method: 'GET',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.get 'http://socialyz.com/users',
  params: {
  'type' => 'string'
}, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.get('http://socialyz.com/users', params={
  'type': 'all'
}, headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('GET','http://socialyz.com/users', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/users?type=all");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("GET");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("GET", "http://socialyz.com/users", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`GET /users`

*Returns list of users based on limit and offset*

<h3 id="listuser-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|offset|query|integer(int32)|false|none|
|limit|query|integer(int32)|false|none|
|type|query|string|true|Type of user to be retrived.|

#### Enumerated Values

|Parameter|Value|
|---|---|
|type|all|
|type|following|

> Example responses

> 200 Response

```json
[
  {
    "id": 10,
    "name": "Test Tester",
    "username": "testtester",
    "email": "test@tester.com",
    "img": "profile.jpg",
    "color": "#fff000"
  }
]
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="listuser-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|List of users|[Users](#schemausers)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## getUser

<a id="opIdgetUser"></a>

> Code samples

```shell
# You can also use wget
curl -X GET http://socialyz.com/users/{id} \
  -H 'Accept: application/json'

```

```http
GET http://socialyz.com/users/{id} HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/users/{id}',
{
  method: 'GET',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.get 'http://socialyz.com/users/{id}',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.get('http://socialyz.com/users/{id}', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('GET','http://socialyz.com/users/{id}', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/users/{id}");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("GET");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("GET", "http://socialyz.com/users/{id}", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`GET /users/{id}`

*Returns details about a particular user*

<h3 id="getuser-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|id|path|integer(int64)|true|ID of the user|

> Example responses

> Details about a user by ID

```json
{
  "id": 10,
  "name": "Test Tester",
  "username": "testtester",
  "email": "test@tester.com",
  "img": "profile.jpg",
  "color": "#fff000"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="getuser-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|Details about a user by ID|[User](#schemauser)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## updateUser

<a id="opIdupdateUser"></a>

> Code samples

```shell
# You can also use wget
curl -X PUT http://socialyz.com/users/{id} \
  -H 'Content-Type: application/json' \
  -H 'Accept: application/json'

```

```http
PUT http://socialyz.com/users/{id} HTTP/1.1
Host: socialyz.com
Content-Type: application/json
Accept: application/json

```

```javascript
const inputBody = '{
  "id": 21,
  "name": "Test Tester",
  "username": "testtester",
  "email": "test@tester.com",
  "img": "profile.jpg",
  "color": "#fff000"
}';
const headers = {
  'Content-Type':'application/json',
  'Accept':'application/json'
};

fetch('http://socialyz.com/users/{id}',
{
  method: 'PUT',
  body: inputBody,
  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Content-Type' => 'application/json',
  'Accept' => 'application/json'
}

result = RestClient.put 'http://socialyz.com/users/{id}',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

r = requests.put('http://socialyz.com/users/{id}', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('PUT','http://socialyz.com/users/{id}', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/users/{id}");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("PUT");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Content-Type": []string{"application/json"},
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("PUT", "http://socialyz.com/users/{id}", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`PUT /users/{id}`

*update detail about a single user*

> Body parameter

```json
{
  "id": 21,
  "name": "Test Tester",
  "username": "testtester",
  "email": "test@tester.com",
  "img": "profile.jpg",
  "color": "#fff000"
}
```

<h3 id="updateuser-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|id|path|integer(int64)|true|ID of the user|
|body|body|[User](#schemauser)|false|User to add to system|

> Example responses

> Updated user detail

```json
{
  "id": 10,
  "name": "Test Tester",
  "username": "testtester",
  "email": "test@tester.com",
  "img": "profile.jpg",
  "color": "#fff000"
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="updateuser-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|Updated user detail|[User](#schemauser)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

<h1 id="socialyz-post">post</h1>

## listPost

<a id="opIdlistPost"></a>

> Code samples

```shell
# You can also use wget
curl -X GET http://socialyz.com/posts?type=all \
  -H 'Accept: application/json'

```

```http
GET http://socialyz.com/posts?type=all HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/posts?type=all',
{
  method: 'GET',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.get 'http://socialyz.com/posts',
  params: {
  'type' => 'string'
}, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.get('http://socialyz.com/posts', params={
  'type': 'all'
}, headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('GET','http://socialyz.com/posts', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/posts?type=all");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("GET");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("GET", "http://socialyz.com/posts", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`GET /posts`

*Returns list of posts based on limit and offset*

<h3 id="listpost-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|offset|query|integer(int32)|false|none|
|limit|query|integer(int32)|false|none|
|type|query|string|true|type of posts to be retrieved.|

#### Enumerated Values

|Parameter|Value|
|---|---|
|type|all|
|type|following|
|type|user|

> Example responses

> 200 Response

```json
[
  {
    "id": 13,
    "type": "Image",
    "owner": {
      "id": 10,
      "name": "Test Tester",
      "username": "testtester",
      "image": "profile.jpg",
      "color": "#fff000"
    },
    "created_at": "2021-08-14T21:03:30.000000Z",
    "content": "I am a example description",
    "like_count": 9,
    "comment_count": 12,
    "images": [
      {
        "id": 1,
        "type": "original",
        "file": "original.jpg"
      },
      {
        "id": 1,
        "type": "alpha",
        "file": "alpha.jpg"
      }
    ],
    "video": "video.mp4"
  }
]
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="listpost-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|List of post|[GetPosts](#schemagetposts)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

## getPost

<a id="opIdgetPost"></a>

> Code samples

```shell
# You can also use wget
curl -X GET http://socialyz.com/posts/{id} \
  -H 'Accept: application/json'

```

```http
GET http://socialyz.com/posts/{id} HTTP/1.1
Host: socialyz.com
Accept: application/json

```

```javascript

const headers = {
  'Accept':'application/json'
};

fetch('http://socialyz.com/posts/{id}',
{
  method: 'GET',

  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

```

```ruby
require 'rest-client'
require 'json'

headers = {
  'Accept' => 'application/json'
}

result = RestClient.get 'http://socialyz.com/posts/{id}',
  params: {
  }, headers: headers

p JSON.parse(result)

```

```python
import requests
headers = {
  'Accept': 'application/json'
}

r = requests.get('http://socialyz.com/posts/{id}', headers = headers)

print(r.json())

```

```php
<?php

require 'vendor/autoload.php';

$headers = array(
    'Accept' => 'application/json',
);

$client = new \GuzzleHttp\Client();

// Define array of request body.
$request_body = array();

try {
    $response = $client->request('GET','http://socialyz.com/posts/{id}', array(
        'headers' => $headers,
        'json' => $request_body,
       )
    );
    print_r($response->getBody()->getContents());
 }
 catch (\GuzzleHttp\Exception\BadResponseException $e) {
    // handle exception or api errors.
    print_r($e->getMessage());
 }

 // ...

```

```java
URL obj = new URL("http://socialyz.com/posts/{id}");
HttpURLConnection con = (HttpURLConnection) obj.openConnection();
con.setRequestMethod("GET");
int responseCode = con.getResponseCode();
BufferedReader in = new BufferedReader(
    new InputStreamReader(con.getInputStream()));
String inputLine;
StringBuffer response = new StringBuffer();
while ((inputLine = in.readLine()) != null) {
    response.append(inputLine);
}
in.close();
System.out.println(response.toString());

```

```go
package main

import (
       "bytes"
       "net/http"
)

func main() {

    headers := map[string][]string{
        "Accept": []string{"application/json"},
    }

    data := bytes.NewBuffer([]byte{jsonReq})
    req, err := http.NewRequest("GET", "http://socialyz.com/posts/{id}", data)
    req.Header = headers

    client := &http.Client{}
    resp, err := client.Do(req)
    // ...
}

```

`GET /posts/{id}`

*Returns post detail*

<h3 id="getpost-parameters">Parameters</h3>

|Name|In|Type|Required|Description|
|---|---|---|---|---|
|id|path|integer(int64)|true|ID|

> Example responses

> 200 Response

```json
{
  "summary": "Example of post",
  "value": {
    "id": 13,
    "owner": {
      "id": 10,
      "name": "Test Tester",
      "username": "testtester",
      "image": "profile.jpg",
      "color": "#fff000"
    },
    "created_at": "2021-08-14T21:03:30.000000Z",
    "content": "Lorem ipsum ...",
    "like_count": 9,
    "comment_count": 12,
    "images": [
      {
        "id": 1,
        "type": "original",
        "file": "original.jpg"
      },
      {
        "id": 1,
        "type": "alpha",
        "file": "alpha.jpg"
      }
    ],
    "video": "video.mp4"
  }
}
```

> default Response

```json
{
  "code": 500,
  "message": "something went wrong!"
}
```

<h3 id="getpost-responses">Responses</h3>

|Status|Meaning|Description|Schema|
|---|---|---|---|
|200|[OK](https://tools.ietf.org/html/rfc7231#section-6.3.1)|Details about a post by ID|[GetPost](#schemagetpost)|
|default|Default|Unexpected error|[Error](#schemaerror)|

<aside class="success">
This operation does not require authentication
</aside>

# Schemas

<h2 id="tocS_Users">Users</h2>
<!-- backwards compatibility -->
<a id="schemausers"></a>
<a id="schema_Users"></a>
<a id="tocSusers"></a>
<a id="tocsusers"></a>

```json
[
  {
    "id": 21,
    "name": "Test Tester",
    "username": "testtester",
    "email": "test@tester.com",
    "img": "profile.jpg",
    "color": "#fff000"
  }
]

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|*anonymous*|[[User](#schemauser)]|false|none|none|

<h2 id="tocS_User">User</h2>
<!-- backwards compatibility -->
<a id="schemauser"></a>
<a id="schema_User"></a>
<a id="tocSuser"></a>
<a id="tocsuser"></a>

```json
{
  "id": 21,
  "name": "Test Tester",
  "username": "testtester",
  "email": "test@tester.com",
  "img": "profile.jpg",
  "color": "#fff000"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|false|none|none|
|name|string|true|none|none|
|username|string|true|none|none|
|email|string(email)|true|none|none|
|img|string|false|none|none|
|color|string|false|none|none|

<h2 id="tocS_UserRelation">UserRelation</h2>
<!-- backwards compatibility -->
<a id="schemauserrelation"></a>
<a id="schema_UserRelation"></a>
<a id="tocSuserrelation"></a>
<a id="tocsuserrelation"></a>

```json
{
  "id": 11,
  "owner": 10,
  "user": 12
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|false|none|none|
|owner|integer|true|none|none|
|user|integer|true|none|none|

<h2 id="tocS_GetUserRelations">GetUserRelations</h2>
<!-- backwards compatibility -->
<a id="schemagetuserrelations"></a>
<a id="schema_GetUserRelations"></a>
<a id="tocSgetuserrelations"></a>
<a id="tocsgetuserrelations"></a>

```json
[
  {
    "id": 11,
    "owner": 10,
    "user": {
      "id": 12,
      "name": "Test Tester",
      "username": "testtester",
      "img": "profile.jpg",
      "color": "#fff000"
    },
    "accepted": true
  }
]

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|*anonymous*|[[GetUserRelation](#schemagetuserrelation)]|false|none|none|

<h2 id="tocS_GetUserRelation">GetUserRelation</h2>
<!-- backwards compatibility -->
<a id="schemagetuserrelation"></a>
<a id="schema_GetUserRelation"></a>
<a id="tocSgetuserrelation"></a>
<a id="tocsgetuserrelation"></a>

```json
{
  "id": 11,
  "owner": 10,
  "user": {
    "id": 12,
    "name": "Test Tester",
    "username": "testtester",
    "img": "profile.jpg",
    "color": "#fff000"
  },
  "accepted": true
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|true|none|none|
|owner|integer|true|none|none|
|user|[User](#schemauser)|true|none|none|

<h2 id="tocS_Post">Post</h2>
<!-- backwards compatibility -->
<a id="schemapost"></a>
<a id="schema_Post"></a>
<a id="tocSpost"></a>
<a id="tocspost"></a>

```json
{
  "id": 10,
  "type": "image",
  "owner": 10,
  "created_at": "2021-08-14T21:03:30.000000Z",
  "images": [
    {
      "id": 1,
      "type": "original",
      "file": "original.jpg"
    },
    {
      "id": 1,
      "type": "alpha",
      "file": "alpha.jpg"
    }
  ],
  "video": "video.mp4"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|false|none|none|
|type|string|false|none|none|
|owner|integer(int64)|true|none|none|
|created_at|string(date-time)|false|none|none|
|images|[[Image](#schemaimage)]|false|none|none|
|video|string|false|none|none|

<h2 id="tocS_GetPosts">GetPosts</h2>
<!-- backwards compatibility -->
<a id="schemagetposts"></a>
<a id="schema_GetPosts"></a>
<a id="tocSgetposts"></a>
<a id="tocsgetposts"></a>

```json
[
  {
    "id": 10,
    "type": "Image",
    "owner": {
      "id": 10,
      "name": "Test Tester",
      "username": "testtester",
      "image": "profile.jpg",
      "color": "#fff000"
    },
    "created_at": "2021-08-14T21:03:30.000000Z",
    "like_count": 9,
    "comment_count": 12,
    "content": "example content",
    "images": [
      {
        "id": 1,
        "type": "original",
        "file": "original.jpg"
      },
      {
        "id": 1,
        "type": "alpha",
        "file": "alpha.jpg"
      }
    ],
    "video": "video.mp4"
  }
]

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|*anonymous*|[[GetPost](#schemagetpost)]|false|none|none|

<h2 id="tocS_GetPost">GetPost</h2>
<!-- backwards compatibility -->
<a id="schemagetpost"></a>
<a id="schema_GetPost"></a>
<a id="tocSgetpost"></a>
<a id="tocsgetpost"></a>

```json
{
  "id": 10,
  "type": "Image",
  "owner": {
    "id": 10,
    "name": "Test Tester",
    "username": "testtester",
    "image": "profile.jpg",
    "color": "#fff000"
  },
  "created_at": "2021-08-14T21:03:30.000000Z",
  "like_count": 9,
  "comment_count": 12,
  "content": "example content",
  "images": [
    {
      "id": 1,
      "type": "original",
      "file": "original.jpg"
    },
    {
      "id": 1,
      "type": "alpha",
      "file": "alpha.jpg"
    }
  ],
  "video": "video.mp4"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|true|none|none|
|owner|[User](#schemauser)|true|none|none|
|created_at|string(date-time)|false|none|none|
|like_count|integer(int64)|false|none|none|
|comment_count|integer(int64)|false|none|none|
|content|string|false|none|none|
|images|[[Image](#schemaimage)]|false|none|none|
|video|string|false|none|none|

<h2 id="tocS_GetComments">GetComments</h2>
<!-- backwards compatibility -->
<a id="schemagetcomments"></a>
<a id="schema_GetComments"></a>
<a id="tocSgetcomments"></a>
<a id="tocsgetcomments"></a>

```json
[
  {
    "id": 23,
    "post": 32,
    "owner": {
      "id": 10,
      "name": "Test Tester",
      "username": "testtester",
      "image": "profile.jpg",
      "color": "#fff000"
    },
    "body": "i like this post",
    "created_at": "2021-08-14T21:03:30.000000Z"
  }
]

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|*anonymous*|[[GetComment](#schemagetcomment)]|false|none|none|

<h2 id="tocS_GetComment">GetComment</h2>
<!-- backwards compatibility -->
<a id="schemagetcomment"></a>
<a id="schema_GetComment"></a>
<a id="tocSgetcomment"></a>
<a id="tocsgetcomment"></a>

```json
{
  "id": 23,
  "post": 32,
  "owner": {
    "id": 10,
    "name": "Test Tester",
    "username": "testtester",
    "image": "profile.jpg",
    "color": "#fff000"
  },
  "body": "i like this post",
  "created_at": "2021-08-14T21:03:30.000000Z"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|true|none|none|
|post|integer|true|none|none|
|owner|[User](#schemauser)|true|none|none|
|body|string|true|none|none|
|created_at|string(date-time)|false|none|none|

<h2 id="tocS_Comment">Comment</h2>
<!-- backwards compatibility -->
<a id="schemacomment"></a>
<a id="schema_Comment"></a>
<a id="tocScomment"></a>
<a id="tocscomment"></a>

```json
{
  "id": 23,
  "post": 32,
  "owner": 10,
  "body": "i like this post",
  "created_at": "2021-08-14T21:03:30.000000Z"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|false|none|none|
|post|integer|true|none|none|
|owner|integer|true|none|none|
|body|string|true|none|none|
|created_at|string(date-time)|false|none|none|

<h2 id="tocS_GetLikes">GetLikes</h2>
<!-- backwards compatibility -->
<a id="schemagetlikes"></a>
<a id="schema_GetLikes"></a>
<a id="tocSgetlikes"></a>
<a id="tocsgetlikes"></a>

```json
[
  {
    "id": 10,
    "post": 25,
    "owner": {
      "id": 10,
      "name": "Test Tester",
      "username": "testtester",
      "image": "profile.jpg",
      "color": "#fff000"
    },
    "created_at": "2021-08-14T21:03:30.000000Z"
  }
]

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|*anonymous*|[[GetLike](#schemagetlike)]|false|none|none|

<h2 id="tocS_GetLike">GetLike</h2>
<!-- backwards compatibility -->
<a id="schemagetlike"></a>
<a id="schema_GetLike"></a>
<a id="tocSgetlike"></a>
<a id="tocsgetlike"></a>

```json
{
  "id": 10,
  "post": 25,
  "owner": {
    "id": 10,
    "name": "Test Tester",
    "username": "testtester",
    "image": "profile.jpg",
    "color": "#fff000"
  },
  "created_at": "2021-08-14T21:03:30.000000Z"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|true|none|none|
|post|integer|true|none|none|
|owner|[User](#schemauser)|true|none|none|
|created_at|string(date-time)|false|none|none|

<h2 id="tocS_Like">Like</h2>
<!-- backwards compatibility -->
<a id="schemalike"></a>
<a id="schema_Like"></a>
<a id="tocSlike"></a>
<a id="tocslike"></a>

```json
{
  "id": 10,
  "post": 25,
  "owner": 10,
  "created_at": "2021-08-14T21:03:30.000000Z"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|false|none|none|
|post|integer|true|none|none|
|owner|integer|true|none|none|
|created_at|string(date-time)|false|none|none|

<h2 id="tocS_Image">Image</h2>
<!-- backwards compatibility -->
<a id="schemaimage"></a>
<a id="schema_Image"></a>
<a id="tocSimage"></a>
<a id="tocsimage"></a>

```json
{
  "id": 1,
  "type": "string",
  "file": "string"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|id|integer(int64)|true|none|none|
|type|string|true|none|none|
|file|string|true|none|none|

<h2 id="tocS_Success">Success</h2>
<!-- backwards compatibility -->
<a id="schemasuccess"></a>
<a id="schema_Success"></a>
<a id="tocSsuccess"></a>
<a id="tocssuccess"></a>

```json
{
  "code": 200,
  "message": "Object have been successfully added"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|code|integer(int32)|true|none|none|
|message|string|true|none|none|

<h2 id="tocS_Error">Error</h2>
<!-- backwards compatibility -->
<a id="schemaerror"></a>
<a id="schema_Error"></a>
<a id="tocSerror"></a>
<a id="tocserror"></a>

```json
{
  "code": 500,
  "message": "something went wrong!"
}

```

### Properties

|Name|Type|Required|Restrictions|Description|
|---|---|---|---|---|
|code|integer(int32)|true|none|none|
|message|string|true|none|none|

