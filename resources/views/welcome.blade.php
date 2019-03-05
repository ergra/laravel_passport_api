<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
    <div class="container" style="margin-top: 40px; margin-bottom: 40px;">
        <h3>Passport authentication</h3>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope=>METHOD</th>
                        <th>URL</th>
                        <th>Description</th>
                        <th>Return</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>POST</th>
                        <td><code>/api/signup</code></td>
                        <td><strong>Create a new user. Post fields:</strong>
                            <ul>
                                <li>name</li>
                                <li>email</li>
                                <li>password</li>
                                <li>password_confirmation</li>
                            </ul>
                        </td>
                        <td>On success: JSON object containing an "access_token" and "token_type".</td>
                    </tr>
                    <tr>
                        <th>POST</th>
                        <td><code>/api/login</code></td>
                        <td><strong>Login to existing user. Post fields:</strong>
                            <ul>
                                <li>email</li>
                                <li>password</li>
                            </ul>
                        </td>
                        <td>On success: JSON object containing an "access_token" and "token_type".</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>
            <i>When you have succefully created a new user or logged in, you can start to make API requests.
            This is done by including two fields in your headers.
            First field is "Authorization" which includes the token_type AND access_token.
            Second field is "Accept" which should be set to "application/json"</i>
        </p>
            <h5>Example headers</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Authorization</th>
                    <td><code>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU5Z...</code></td>
                </tr>
                <tr>
                    <th>Accept</th>
                    <td><code>application/json</code></td>
                </tr>
            </tbody>
        </table>

        <h3>Endpoints</h3>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope=>METHOD</th>
                        <th>URL</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>GET</th>
                        <td><code>/api/logs/</code></td>
                        <td>Get all logs.</td>
                    </tr>
                    <tr>
                        <th>GET</th>
                        <td><code>/api/logs/{id}</code></td>
                        <td>Get specified log entry.<br>
                        <i>Example: /api/logs/1</i></td>
                    </tr>
                    <tr>
                        <th>POST</th>
                        <td><code>/api/logs/</code></td>
                        <td>Create log entry.</td>
                    </tr>
                    <tr>
                        <th>PUT</th>
                        <td><code>/api/logs/{id}</code></td>
                        <td>Update specified log.</td>
                    </tr>
                    <tr>
                        <th>DELETE</th>
                        <td><code>/api/logs/{id}</code></td>
                        <td>Delete specified log entry.</td>
                    </tr>
                    <tr>
                        <td colspan="3">Note: PUT and DELETE requests are sent by including a field called <strong>_method</strong> which is set to either <strong>PUT</strong> or <strong>DELETE</strong> when making a <strong>POST</strong> request</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3>Fields used when creating or updating log entries</h3>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope=>Field</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>owner</th>
                        <td>Name of the log entry owner.</td>
                    </tr>
                    <tr>
                        <th>device-type</th>
                        <td>The Device type <i>(Android Smartphone, Laptop, etc)</i>.</td>
                    </tr>
                    <tr>
                        <th>log</th>
                        <td>Content of the log entry.</td>
                    </tr>
                    <tr>
                        <th>resolved</th>
                        <td>Status of the log entry, is it resolved? <i>(yes/no)</i>.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </body>
</html>
