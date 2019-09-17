<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<style>
body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
    margin-left: 40%;
    margin-top: 10%;
}
input[type=text], textarea {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 9px;
  font-size: 15px;
}
button {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 9px;
}
</style>
<body>
<h1>Leave YOUR comment here</h1>


<form method="POST" action="/posts">
    @csrf
    
    <p>Title:</p>
    <input type="text" name="title" placeholder="Title" required >
    <p>Content:</p>
    <textarea type="text" name="content" placeholder="Content" required ></textarea>

    <p><button type="submit">ADD</button>
</form>


<a href="/posts">
    <button>Back</button>
</a>
    
</body>
</html>