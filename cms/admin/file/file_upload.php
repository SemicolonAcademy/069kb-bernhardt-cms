<html>
<head>
<title>
File Upload
</title>
</head>
<body>
<?php
// In PHP earlier then 4.1.0, $HTTP_POST_FILES should be used instead of $_FILES.
// In PHP earlier then 4.0.3, use copy() and is_uploaded_file() instead of move_uploaded_file

$uploaddir = 'uploads/';

echo "<pre>";
print_r($_FILES);
echo "</pre>";


print "<pre>";
if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploaddir . $_FILES['myfile']['name'])) 
{
    print "File is valid, and was successfully uploaded.  Here's some more debugging info:\n";
    print_r($_FILES);
} else 
{
    print "Possible file upload attack!  Here's some debugging info:\n";
    print_r($_FILES);
}





?>


</body>
</html>