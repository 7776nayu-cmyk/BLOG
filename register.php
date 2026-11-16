<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>        
</head>
<body>
    <form>
        <label>Name:</label>
        <input type="text" name="name">
        <br>
        <label>Email:</label>
        <input type="email" name="email">
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <label>Role:</label>
        <select name="role">
            <option>Subscriber</option>
            <option>Author</option>
            <option>Editor</option>
            <option>Admin</option>
        </select>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>