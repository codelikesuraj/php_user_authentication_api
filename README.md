<h1>Build a simple User API described below</h1>
<p>Firstly, after initializing your application;
<ol>
    <li>Update the existing User Model and Migration file to have the following fields:
        <ul>
            <li>id</li>
            <li>Name</li>
            <li>Email</li>
            <li>Password</li>
            <li>Timestamps (which already exist, do not change)</li>
        </ul>
    </li>
    <li>User Controller with the following methods:
        <ul>
            <li><span style="text-decoration: underline">Register</span> - This takes in the following:
                <ul>
                    <li>Name
                    <li>Email | should be unique</li>
                    <li>Password</li>
                    <li>Password repeat</li>
                </ul>
                For a user to be registered successfully, validate the all fields, email must be unique, password and password repeat must be same.<br/> 
                If the validation passes, register the user. On success return the user that was register as a json
            </li>
            <li><span style="text-decoration: underline">Login</span> - Takes in the following:
                <ul>
                    <li>Email</li>
                    <li>Password</li>
                </ul>
                Logs in the user if the email and password correspond to that in the database.</br>
                If login was successful,create a session for the user and return a json response with the session and success;
            <li><span style="text-decoration: underline">Update</span> - Does the following:<br/>
                Updates any of the field specified, if success, return a json of the update user
            </li>
            <li><span style="text-decoration: underline">Delete</span> - Does the following:<br/>
                Takes in the user Id and deletes the user, if success, return a json with success
            </li>
            <li><span style="text-decoration: underline">Getuser</span> - returns a json of user by ID</li>
            <li><span style="text-decoration: underline">GetUsers</span> - returns all users from the database</li>
        </ul>
    </li>
</ol>
</p>
<p><strong style="color:red">NOTE</strong>: Since you are building an api, use api.php for routing, with the following endpoints:
    <ul>
        <li>Register: /user/create</li>
        <li>Login: /user/login</li>
        <li>Update: /user/update/{id}</li>
        <li>Delete: /user/delete/{id}</li>
        <li>Getuser: /user</li>
        <li>Getusers: /users</li>
    </ul>
</p>

<p><strong>Check out the live project at <a href="https://quiet-mesa-84153.herokuapp.com">https://quiet-mesa-84153.herokuapp.com</a> hosted on Heroku.</strong></p>